<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataIspuRequest;
use App\Models\DataIspu;
use App\Models\LMDWKNN;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DataIspuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layout.dataispu.index', [
            'dataIspus' => DataIspu::latest('tanggal')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $today = Carbon::now()->format('Y-m-d');
        return view('layout.dataispu.create', compact('today'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataIspuRequest $request)
    {
        $data = DB::table('data_ispus')->where('status_data', 'Data Latih')->get();
        $samples = [];
        $labels = [];
        foreach ($data as $row) {
            $samples[] = [$row->pm10, $row->so2, $row->co, $row->o3, $row->no2];
            $labels[] = $row->categori;
        }

        $dataset = collect($samples)->zip($labels);

        // Mengatur nilai seed untuk pengacakan
        $seedValue = 42; // Nilai seed yang diinginkan
        mt_srand($seedValue);

        // Mengacak urutan elemen dalam koleksi
        $shuffled = $dataset->shuffle();

        // Menghitung jumlah sampel untuk set pelatihan dan set pengujian
        $totalSamples = $shuffled->count();
        $trainSize = (int) ($totalSamples * 0.8);

        // Membagi koleksi menjadi set pelatihan dan set pengujian
        $datasetParts = [
            'train' => $shuffled->take($trainSize),
            'test' => $shuffled->slice($trainSize)
        ];

        // Memisahkan fitur-fitur dan label-label dari set pelatihan dan set pengujian
        $x_train = $datasetParts['train']->pluck(0)->all();
        $y_train = $datasetParts['train']->pluck(1)->all();
        $x_test = [[$request->pm10, $request->so2, $request->co, $request->o3, $request->no2]];

        $lmdwknn = new LMDWKNN(7);
        $lmdwknn->fit($x_train, $y_train);
        $prediksi = $lmdwknn->predict($x_test);

        DataIspu::create([
            'tanggal' => $request->tanggal,
            'pm10' => $request->pm10,
            'so2' => $request->so2,
            'co' => $request->co,
            'o3' => $request->o3,
            'no2' => $request->no2,
            'max' => $request->max,
            'critical' => Str::upper($request->critical),
            'categori' => $prediksi[0],
            'lokasi' => $request->lokasi,
            'status_data' => 'Data Uji',
        ]);
        return redirect('data-ispu')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataIspu  $dataIspu
     * @return \Illuminate\Http\Response
     */
    public function edit(DataIspu $dataIspu)
    {
        return view('layout.dataispu.edit', compact('dataIspu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataIspu  $dataIspu
     * @return \Illuminate\Http\Response
     */
    public function update(DataIspuRequest $request, DataIspu $dataIspu, $id)
    {
        $data = DB::table('data_ispus')->where('status_data', 'Data Latih')->get();
        $samples = [];
        $labels = [];
        foreach ($data as $row) {
            $samples[] = [$row->pm10, $row->so2, $row->co, $row->o3, $row->no2];
            $labels[] = $row->categori;
        }

        $dataset = collect($samples)->zip($labels);

        // Mengatur nilai seed untuk pengacakan
        $seedValue = 42; // Nilai seed yang diinginkan
        mt_srand($seedValue);

        // Mengacak urutan elemen dalam koleksi
        $shuffled = $dataset->shuffle();

        // Menghitung jumlah sampel untuk set pelatihan dan set pengujian
        $totalSamples = $shuffled->count();
        $trainSize = (int) ($totalSamples * 0.8);

        // Membagi koleksi menjadi set pelatihan dan set pengujian
        $datasetParts = [
            'train' => $shuffled->take($trainSize),
            'test' => $shuffled->slice($trainSize)
        ];

        // Memisahkan fitur-fitur dan label-label dari set pelatihan dan set pengujian
        $x_train = $datasetParts['train']->pluck(0)->all();
        $y_train = $datasetParts['train']->pluck(1)->all();
        $x_test = [[$request->pm10, $request->so2, $request->co, $request->o3, $request->no2]];

        $lmdwknn = new LMDWKNN(7);
        $lmdwknn->fit($x_train, $y_train);
        $prediksi = $lmdwknn->predict($x_test);

        DataIspu::find($id)->update([
            'tanggal' => $request->tanggal,
            'pm10' => $request->pm10,
            'so2' => $request->so2,
            'co' => $request->co,
            'o3' => $request->o3,
            'no2' => $request->no2,
            'max' => $request->max,
            'critical' => Str::upper($request->critical),
            'categori' => $prediksi[0],
            'lokasi' => $request->lokasi,
            'status_data' => $request->status_data,
        ]);
        return redirect('data-ispu')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataIspu  $dataIspu
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataIspu $dataIspu, $id)
    {
        DataIspu::find($id)->delete();
        return redirect('data-ispu')->with('success', 'Data berhasil dihapus!');
    }
}
