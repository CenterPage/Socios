<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocioRquest extends FormRequest
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
            'nombre_socio' => '',
            'url' => 'nullable',
            'num_placa' => '',
            'nombre_asociacion' => '',
            'expedicion' => 'nullable',
            'revalidacion' => 'nullable',
            'num_operacion' => '',
            'vigencia_operacion' => '',
        ];
    }
}
