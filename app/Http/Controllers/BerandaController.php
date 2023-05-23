<?php

namespace App\Http\Controllers;

use App\Models\DataIspu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    public function __invoke()
    {
        $dataIspu = DB::table('data_ispus')->where('status_data', 'Data Uji')->latest()->first();

        return view('layout.beranda.index', compact('dataIspu'));
    }
}
