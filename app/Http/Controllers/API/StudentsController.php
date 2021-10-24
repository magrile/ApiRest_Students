<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\GuardarStudentRequest;
use App\Http\Requests\ActualizarStudentRequest;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Students::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarStudentRequest $request)
    {
        Students::create($request->all());

		return response()->json([
			'res' => true,
			'msg' => 'Estudiante guardado correctamente'
        ]);
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students)
    {
        return response()->json([
            'res' => true,
            'students' => $students
           ]);
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarStudentRequest $request, Students $students)
    {
        $students->update($request->all());
        return response()->json([
            'res' => true,
            'mensaje' => 'Estudiante actualizado correctamente'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $students)
    {
        $students->delete();

        return response()->json([
            'res' => true,
            'mensaje' => 'Estudiante eliminado correctamente'
        ], 200);

      

    }
}
