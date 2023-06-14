<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DataIspu;
use Illuminate\Http\Request;

class DataIspuAPIController extends Controller
{
    public function getDataIspu()
    {
        $data = DataIspu::select('tanggal', 'pm10', 'so2', 'co', 'o3', 'no2', 'max', 'critical', 'categori')->where('status_data', 'Data Uji')->latest()->first();
        return response()->json($data);
    }
}
