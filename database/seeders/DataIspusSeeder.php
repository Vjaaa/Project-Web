<?php

namespace Database\Seeders;

use App\Models\DataIspu;
use Illuminate\Database\Seeder;

class DataIspusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(
            [
                [
                    'tanggal' => '2019-01-01',
                    'pm10' => 29,
                    'so2' => 15,
                    'co' => 7,
                    'o3' => 71,
                    'no2' => 13,
                    'max' => 71,
                    'critical' => 'O3',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI2',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-02',
                    'pm10' => 24,
                    'so2' => 17,
                    'co' => 6,
                    'o3' => 79,
                    'no2' => 6,
                    'max' => 79,
                    'critical' => 'O3',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI2',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-03',
                    'pm10' => 23,
                    'so2' => 16,
                    'co' => 6,
                    'o3' => 65,
                    'no2' => 4,
                    'max' => 65,
                    'critical' => 'O3',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI2',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-04',
                    'pm10' => 42,
                    'so2' => 18,
                    'co' => 10,
                    'o3' => 64,
                    'no2' => 11,
                    'max' => 64,
                    'critical' => 'O3',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI2',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-05',
                    'pm10' => 54,
                    'so2' => 29,
                    'co' => 16,
                    'o3' => 51,
                    'no2' => 20,
                    'max' => 54,
                    'critical' => 'PM10',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI3',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-06',
                    'pm10' => 69,
                    'so2' => 34,
                    'co' => 30,
                    'o3' => 105,
                    'no2' => 27,
                    'max' => 105,
                    'critical' => 'O3',
                    'categori' => 'Tidak Sehat',
                    'lokasi' => 'DKI2',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-07',
                    'pm10' => 71,
                    'so2' => 47,
                    'co' => 16,
                    'o3' => 132,
                    'no2' => 25,
                    'max' => 132,
                    'critical' => 'O3',
                    'categori' => 'Tidak Sehat',
                    'lokasi' => 'DKI3',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-08',
                    'pm10' => 51,
                    'so2' => 22,
                    'co' => 25,
                    'o3' => 143,
                    'no2' => 26,
                    'max' => 143,
                    'critical' => 'O3',
                    'categori' => 'Tidak Sehat',
                    'lokasi' => 'DKI3',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-09',
                    'pm10' => 61,
                    'so2' => 22,
                    'co' => 28,
                    'o3' => 198,
                    'no2' => 21,
                    'max' => 198,
                    'critical' => 'O3',
                    'categori' => 'Tidak Sehat',
                    'lokasi' => 'DKI1',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-10',
                    'pm10' => 59,
                    'so2' => 22,
                    'co' => 27,
                    'o3' => 128,
                    'no2' => 18,
                    'max' => 128,
                    'critical' => 'O3',
                    'categori' => 'Tidak Sehat',
                    'lokasi' => 'DKI1',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-11',
                    'pm10' => 63,
                    'so2' => 23,
                    'co' => 28,
                    'o3' => 91,
                    'no2' => 13,
                    'max' => 91,
                    'critical' => 'O3',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI3',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-12',
                    'pm10' => 57,
                    'so2' => 26,
                    'co' => 24,
                    'o3' => 90,
                    'no2' => 16,
                    'max' => 90,
                    'critical' => 'O3',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI3',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-13',
                    'pm10' => 65,
                    'so2' => 24,
                    'co' => 28,
                    'o3' => 119,
                    'no2' => 15,
                    'max' => 119,
                    'critical' => 'O3',
                    'categori' => 'Tidak Sehat',
                    'lokasi' => 'DKI3',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-14',
                    'pm10' => 65,
                    'so2' => 25,
                    'co' => 32,
                    'o3' => 99,
                    'no2' => 18,
                    'max' => 99,
                    'critical' => 'O3',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI1',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-15',
                    'pm10' => 72,
                    'so2' => 27,
                    'co' => 26,
                    'o3' => 59,
                    'no2' => 13,
                    'max' => 72,
                    'critical' => 'PM10',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI3',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-16',
                    'pm10' => 37,
                    'so2' => 23,
                    'co' => 19,
                    'o3' => 64,
                    'no2' => 7,
                    'max' => 64,
                    'critical' => 'O3',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI3',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-17',
                    'pm10' => 56,
                    'so2' => 23,
                    'co' => 23,
                    'o3' => 101,
                    'no2' => 14,
                    'max' => 101,
                    'critical' => 'O3',
                    'categori' => 'Tidak Sehat',
                    'lokasi' => 'DKI1',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-18',
                    'pm10' => 27,
                    'so2' => 23,
                    'co' => 16,
                    'o3' => 103,
                    'no2' => 13,
                    'max' => 103,
                    'critical' => 'O3',
                    'categori' => 'Tidak Sehat',
                    'lokasi' => 'DKI1',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-19',
                    'pm10' => 44,
                    'so2' => 24,
                    'co' => 27,
                    'o3' => 127,
                    'no2' => 13,
                    'max' => 127,
                    'critical' => 'O3',
                    'categori' => 'Tidak Sehat',
                    'lokasi' => 'DKI1',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-20',
                    'pm10' => 74,
                    'so2' => 30,
                    'co' => 39,
                    'o3' => 82,
                    'no2' => 17,
                    'max' => 82,
                    'critical' => 'O3',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI3',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-21',
                    'pm10' => 62,
                    'so2' => 24,
                    'co' => 22,
                    'o3' => 94,
                    'no2' => 12,
                    'max' => 94,
                    'critical' => 'O3',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI3',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-22',
                    'pm10' => 39,
                    'so2' => 24,
                    'co' => 23,
                    'o3' => 92,
                    'no2' => 9,
                    'max' => 92,
                    'critical' => 'O3',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI3',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-23',
                    'pm10' => 59,
                    'so2' => 23,
                    'co' => 37,
                    'o3' => 70,
                    'no2' => 14,
                    'max' => 70,
                    'critical' => 'O3',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI3',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-24',
                    'pm10' => 51,
                    'so2' => 19,
                    'co' => 20,
                    'o3' => 81,
                    'no2' => 12,
                    'max' => 81,
                    'critical' => 'O3',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI3',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-25',
                    'pm10' => 32,
                    'so2' => 19,
                    'co' => 25,
                    'o3' => 74,
                    'no2' => 12,
                    'max' => 74,
                    'critical' => 'O3',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI3',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-26',
                    'pm10' => 63,
                    'so2' => 22,
                    'co' => 37,
                    'o3' => 118,
                    'no2' => 17,
                    'max' => 118,
                    'critical' => 'O3',
                    'categori' => 'Tidak Sehat',
                    'lokasi' => 'DKI1',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-27',
                    'pm10' => 56,
                    'so2' => 18,
                    'co' => 49,
                    'o3' => 74,
                    'no2' => 10,
                    'max' => 74,
                    'critical' => 'O3',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI3',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-28',
                    'pm10' => 53,
                    'so2' => 20,
                    'co' => 34,
                    'o3' => 77,
                    'no2' => 15,
                    'max' => 77,
                    'critical' => 'O3',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI3',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-29',
                    'pm10' => 48,
                    'so2' => 19,
                    'co' => 33,
                    'o3' => 88,
                    'no2' => 11,
                    'max' => 88,
                    'critical' => 'O3',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI3',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-30',
                    'pm10' => 47,
                    'so2' => 21,
                    'co' => 32,
                    'o3' => 73,
                    'no2' => 16,
                    'max' => 73,
                    'critical' => 'O3',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI1',
                    'status_data' => 'Data Latih',
                ],
                [
                    'tanggal' => '2019-01-31',
                    'pm10' => 56,
                    'so2' => 23,
                    'co' => 22,
                    'o3' => 54,
                    'no2' => 17,
                    'max' => 56,
                    'critical' => 'PM10',
                    'categori' => 'Sedang',
                    'lokasi' => 'DKI3',
                    'status_data' => 'Data Latih',
                ],
            ]
        )->each(function ($data_ispu) {
            DataIspu::create($data_ispu);
        });
    }
}