<?php

namespace App\Imports;

use App\Models\DataIspu;
use Carbon\Carbon;
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
                'tanggal' => Carbon::create($row['tanggal']),
                'pm10' => intval($row['pm10']),
                'so2' => intval($row['so2']),
                'co' => intval($row['co']),
                'o3' => intval($row['o3']),
                'no2' => intval($row['no2']),
                'max' => intval($row['max']),
                'critical' => Str::upper($row['critical']),
                'categori' => Str::title($row['categori']),
                'lokasi' => Str::upper($row['lokasi_spku']),
                'status_data' => 'Data Latih',
            ]);
        }
    }
}
