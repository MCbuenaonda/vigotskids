<?php

namespace App\Http\Controllers;

use App\Alumno;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::paginate(5);
        return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'nombre' => 'required',
            'ap_paterno' => 'required',
            'ap_materno' => '',
            'clave' => 'required',
        ]);

        $alumno = new Alumno;
        $alumno->create([
            'nombre' => $data['nombre'],
            'ap_paterno' => $data['ap_paterno'],
            'ap_materno' => $data['ap_materno'],
            'clave' => $data['clave'],
            'activo' => 1
        ]);

        return redirect()->action('AlumnoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        return view('alumnos.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        return view('alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        $data = request()->validate([
            'nombre' => 'required',
            'ap_paterno' => 'required',
            'ap_materno' => '',
            'clave' => 'required',
        ]);

        $alumno->nombre = $data['nombre'];
        $alumno->ap_paterno = $data['ap_paterno'];
        $alumno->ap_materno = $data['ap_materno'];
        $alumno->clave = $data['clave'];
        $alumno->updated_at = Carbon::now();
        $alumno->update();

        return redirect()->action('AlumnoController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->action('AlumnoController@index');
    }
}
