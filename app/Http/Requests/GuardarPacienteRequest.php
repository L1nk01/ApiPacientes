<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarPacienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "nombres" => "required",
            "apellidos" => "required",
            "edad" => "required",
            "sexo" => "required",
            "cedula" => "required|unique:pacientes,cedula",
            "tipo_sangre" => "required",
            "telefono" => "required",
            "correo_electronico" => "required",
            "direccion" => "required",
        ];
    }
}
