<?php

namespace App\Http\Controllers;

use App\Models\LMDWKNN;
use Illuminate\Support\Facades\DB;

class PerhitunganController extends Controller
{
    public function __invoke()
    {
        $data = DB::table('data_ispus')->where('status_data', 'Data Latih')->get();

        // if ($data) {
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
        $train_data = $datasetParts['train']->pluck(0)->all();
        $train_labels = $datasetParts['train']->pluck(1)->all();
        $test_data = $datasetParts['test']->pluck(0)->all();
        $test_labels = $datasetParts['test']->pluck(1)->all();

        $test_k = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        foreach ($test_k as $i) {
            $lmdwknn = new LMDWKNN($i);
            $lmdwknn->fit($train_data, $train_labels);
            $prediksi = $lmdwknn->predict($test_data);
            $akurasi[] = $lmdwknn->score($test_labels, $prediksi);
        }

        $lmdwknn = new LMDWKNN(7);
        $lmdwknn->fit($train_data, $train_labels);
        $prediksi = $lmdwknn->predict($test_data);
        $confusion_matrix = $lmdwknn->confusion_matrix($test_labels, $prediksi);
        $precision = $lmdwknn->precision($test_labels, $prediksi);
        $recall = $lmdwknn->recall($test_labels, $prediksi);
        $f1Score = $lmdwknn->f1Score($test_labels, $prediksi);
        $average = $lmdwknn->average($test_labels, $prediksi);
        $support = $lmdwknn->support($test_labels, $prediksi);

        dd($confusion_matrix);
        return view('layout.perhitungan.index', [
            'akurasi' => $akurasi,
            'confusion_matrix' => $confusion_matrix,
            'test_k' => $test_k,
        ]);
        // } else {
        //     return view('layout.perhitungan.index', [
        //         'error' => "Tidak ada data",
        //     ]);
        // }
    }
}
