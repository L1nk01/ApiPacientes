<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\GuardarPacienteRequest;
use App\Models\Paciente;
use Illuminate\Http\Request;
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
        return PacienteResource::collection(Paciente::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuardarPacienteRequest $request)
    {
        Paciente::create($request->all());
        return response()->json([
            'response' => true,
            'msg' => 'Paciente guardado correctamente'
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Paciente $paciente)
    {
        return response()->json([
            'response' => true,
            'paciente' => $paciente
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActualizarPacienteRequest $request, Paciente $paciente)
    {
        $paciente->update($request->all());
        return response([
            'response' => true,
            'mensaje' => 'Paciente actualizado correctamente'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return response([
            'response' => true,
            'mensaje' => 'Paciente eliminado correctamente'
        ], 200);
    }
}
