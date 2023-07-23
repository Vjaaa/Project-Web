<?php

namespace App\Http\Controllers;

use App\Models\DataIspu;

class BerandaController extends Controller
{
    public function __invoke()
    {
        return view('layout.beranda.index', [
            'dataIspu' => DataIspu::where('status_data', 'Data Uji')->latest()->first(),
        ]);
    }
}
