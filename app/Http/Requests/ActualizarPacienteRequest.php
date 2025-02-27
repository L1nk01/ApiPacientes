<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarPacienteRequest extends FormRequest
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
            "cedula" => "required|unique:pacientes,cedula," . $this->route('paciente')->id,
            "tipo_sangre" => "required",
            "telefono" => "required|unique:pacientes,telefono," . $this->route('paciente')->id,
            "correo_electronico" => "required|unique:pacientes,correo_electronico," . $this->route('paciente')->id,
            "direccion" => "required",
        ];
    }
}
