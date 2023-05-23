<?php

namespace App\Imports;

use App\Models\DataIspu;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataIspusImport implements ToCollection, WithHeadingRow
{
    use Importable;

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            DataIspu::create([
                'tanggal' => $row['tanggal'],
                'pm10' => $row['pm10'],
                'so2' => $row['so2'],
                'co' => $row['co'],
                'o3' => $row['o3'],
                'no2' => $row['no2'],
                'max' => $row['max'],
                'critical' => Str::upper($row['critical']),
                'categori' => Str::title($row['categori']),
                'lokasi' => $row['lokasi_spku'],
                'status_data' => 'Data Latih',
            ]);
        }
    }
}
