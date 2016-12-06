<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBuscarServicioRequest extends FormRequest
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
            'searchmap' => 'max:60',
            'txtLongitud' => 'required|min:3|max:80',
            'txtLatitud' => 'required|min:3|max:80',
            'Sector' => 'required|numeric|min:1|max:200',
            'servicio' => 'required|numeric|min:1|max:9999',
            'comentario' => 'required|string|max:200'
        ];
    }
}
