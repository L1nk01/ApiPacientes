<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PacienteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'edad' => $this->edad,
            'sexo' => $this->sexo,
            'cedula' => $this->cedula,
            'tipo_sangre' => $this->tipo_sangre,
            'telefono' => $this->telefono,
            'correo_electronico' => $this->correo,
            'direccion' => $this->direccion,
            'fecha_creacion' => $this->created_at->format('d-m-Y'),
            'fecha_modificacion' => $this->updated_at->format('d-m-Y H:m:s')
        ];
    }

    public function with(Request $request): array {
        return [
            'res' => true,
        ];
    }
}
