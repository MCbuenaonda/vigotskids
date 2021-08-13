<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Grupo;
use App\Alumno;
use Carbon\Carbon;
use App\GruposAlumno;
use Illuminate\Http\Request;

class GrupoController extends Controller
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
        $grupos = Grupo::paginate(6);
        return view('grupos.index', compact('grupos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::where('activo', '=', 1)->get();
        return view('grupos.create', compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validar
        $data = request()->validate([
            'nombre' => 'required',
            'curso_id' => 'required',
            'fecha' => 'required'
        ]);

        $grupo = new Grupo;
        $grupo->create([
            'nombre' => $data['nombre'],
            'curso_id' => $data['curso_id'],
            'fecha' => $data['fecha'],
            'activo' => 1,
            'status_id' => 1
        ]);

        return redirect()->action('GrupoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function show(Grupo $grupo)
    {
        return view('grupos.show', compact('grupo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function edit(Grupo $grupo)
    {
        $cursos = Curso::all();
        return view('grupos.edit', compact('grupo', 'cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grupo $grupo)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'curso_id' => 'required',
            'fecha' => 'required',
        ]);

        //asignar valores
        $grupo->nombre = $data['nombre'];
        $grupo->curso_id = $data['curso_id'];
        $grupo->fecha = $data['fecha'];
        $grupo->updated_at = Carbon::now();
        $grupo->update();

        return redirect()->action('GrupoController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grupo $grupo)
    {
        $grupo->delete();
        return redirect()->action('GrupoController@index');
    }


    public function assign(Grupo $grupo)
    {
        $alumnos = Alumno::all();
        return view('grupos.assign', compact('grupo', 'alumnos'));
    }

    public function add(Request $request, Grupo $grupo)
    {
        //validar
        $data = request()->validate([
            'nombre' => 'required',
            'alumno_id' => 'required',
        ]);

        //asignar valores
        $grupoAlumno = new GruposAlumno;
        $grupoAlumno->grupo_id = $grupo->id;
        $grupoAlumno->alumno_id = $data['alumno_id'];
        $grupoAlumno->save();

        return redirect()->action('GrupoController@index');
    }

    public function change(Request $request, Grupo $grupo)
    {
        //asignar valores
        $grupo->status_id = 2;
        $grupo->update();

        return redirect()->action('GrupoController@index');
    }
}
