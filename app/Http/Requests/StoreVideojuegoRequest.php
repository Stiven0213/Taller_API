<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVideojuegoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'titulo' => 'required|string|max:255',
            'genero' => 'required|string',
            'plataforma' => 'required|string',
            'anio_lanzamiento' => 'required|integer|min:1950|max:' . date('Y'),
            'desarrollador' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'calificacion' => 'required|numeric|min:0|max:10',
            'disponible' => 'required|boolean',
            'fecha_publicacion' => 'required|date',
        ];
    }
}
