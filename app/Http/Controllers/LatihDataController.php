<?php

namespace App\Http\Controllers;

use App\Imports\DataIspusImport;
use Illuminate\Http\Request;

class LatihDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layout.latihdata.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => ['required', 'mimes:csv']
        ]);

        $file = $request->file('file');
        if ($file) {
            (new DataIspusImport)->import($file);
        }
    }

    public function download()
    {
        $filePath = storage_path('app/public/template_dataispu.csv');
        return response()->download($filePath, 'template_dataispu.csv');
    }
}
