<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\GuardarPacienteRequest;
use App\Models\Paciente;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarPacienteRequest;
use App\Http\Resources\PacienteResource;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PacienteResource::collection(Paciente::all())->response()->setStatusCode(202);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuardarPacienteRequest $request)
    {
        return (new PacienteResource(Paciente::create($request->all())))
                    ->additional([
            "msg" => "Paciente guardado correctamente."
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Paciente $paciente)
    {
        return new PacienteResource($paciente);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActualizarPacienteRequest $request, Paciente $paciente)
    {
        $paciente->update($request->all());
        return (new PacienteResource($paciente))->additional([
            "msg" => "Paciente actualizado correctamente."
        ]);;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return (new PacienteResource($paciente))->additional([
            "msg" => "Paciente eliminado correctamente."
        ]);;
    }
}
