<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataIspuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tanggal' => ['required'],
            'pm10' => ['required'],
            'so2' => ['required'],
            'co' => ['required'],
            'o3' => ['required'],
            'no2' => ['required'],
            'max' => ['required'],
            'critical' => ['required'],
            'lokasi' => ['required'],
        ];
    }
}
