<?php

namespace App\Http\Controllers;

use App\Models\DataIspu;
use App\Models\LMDWKNN;

class PerhitunganController extends Controller
{
    public function __invoke()
    {
        // Mengambil data dari database yang stasus_data = Data Latih
        $data = DataIspu::where('status_data', 'Data Latih')->get();

        if ($data->isEmpty()) { // Jika data kosong
            return view('layout.perhitungan.index', [
                'data' => '',
            ]);
        } else { // Jika data tidak kosong
            // Memisah data menjadi fitur dan label
            $features = [];
            $labels = [];
            foreach ($data as $row) {
                $features[] = [$row->pm10, $row->so2, $row->co, $row->o3, $row->no2];
                $labels[] = $row->categori;
            }

            // Menggabung kembali fitur dan label agar memudahkan saat membagi data
            $dataset = collect($features)->zip($labels);

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
            $trainData = $datasetParts['train']->pluck(0)->all();
            $trainLabel = $datasetParts['train']->pluck(1)->all();
            $testData = $datasetParts['test']->pluck(0)->all();
            $testLabel = $datasetParts['test']->pluck(1)->all();

            // Menguji akurasi berdasarkan nilai k
            $test_k = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
            foreach ($test_k as $i) {
                $lmdwknn = new LMDWKNN($i);
                $lmdwknn->train($trainData, $trainLabel);
                $prediksi = $lmdwknn->predict($testData);
                $akurasi[] = $lmdwknn->score($testLabel, $prediksi);
            }

            // Menghitung confusion matrix dan classification report
            $lmdwknn = new LMDWKNN(7);
            $lmdwknn->train($trainData, $trainLabel);
            $prediksi = $lmdwknn->predict($testData);
            $confusion_matrix = $lmdwknn->confusion_matrix($testLabel, $prediksi);
            $precision = $lmdwknn->precision($testLabel, $prediksi);
            $recall = $lmdwknn->recall($testLabel, $prediksi);
            $f1Score = $lmdwknn->f1Score($testLabel, $prediksi);
            $average = $lmdwknn->average($testLabel, $prediksi);
            $support = $lmdwknn->support($testLabel, $prediksi);

            $viewHasilReport = [
                "Precision" => [
                    "Baik" => number_format(($precision['Baik'] * 100), 2) . "%",
                    "Sedang" => number_format(($precision['Sedang'] * 100), 2) . "%",
                    "Tidak Sehat" => number_format(($precision['Tidak Sehat'] * 100), 2) . "%",
                    "Sangat Tidak Sehat" => number_format(($precision['Sangat Tidak Sehat'] * 100), 2) . "%",
                ],
                "Recall" => [
                    "Baik" => number_format(($recall['Baik'] * 100), 2) . "%",
                    "Sedang" => number_format(($recall['Sedang'] * 100), 2) . "%",
                    "Tidak Sehat" => number_format(($recall['Tidak Sehat'] * 100), 2) . "%",
                    "Sangat Tidak Sehat" => number_format(($recall['Sangat Tidak Sehat'] * 100), 2) . "%",
                ],
                "F1-Score" => [
                    "Baik" => number_format(($f1Score['Baik'] * 100), 2) . "%",
                    "Sedang" => number_format(($f1Score['Sedang'] * 100), 2) . "%",
                    "Tidak Sehat" => number_format(($f1Score['Tidak Sehat'] * 100), 2) . "%",
                    "Sangat Tidak Sehat" => number_format(($f1Score['Sangat Tidak Sehat'] * 100), 2) . "%",
                ],
                "Average" => [
                    "Precision" => number_format(($average['precision'] * 100), 2) . "%",
                    "Recall" => number_format(($average['recall'] * 100), 2) . "%",
                    "F1-Score" => number_format(($average['f1score'] * 100), 2) . "%",
                ],
                "Support" => [
                    "Baik" => $support['Baik'],
                    "Sedang" => $support['Sedang'],
                    "Tidak Sehat" => $support['Tidak Sehat'],
                    "Sangat Tidak Sehat" => $support['Sangat Tidak Sehat'],
                ],
            ];

            // dd($average);

            return view('layout.perhitungan.index', [
                'data' => $data,
                'akurasi' => $akurasi,
                'confusion_matrix' => $confusion_matrix,
                'test_k' => $test_k,
            ]);
        }
    }
}
