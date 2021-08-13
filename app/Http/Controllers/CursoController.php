<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Grupo;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CursoController extends Controller
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
        $cursos = Curso::paginate(6);
        return view('cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
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
            'siglas' => 'required',
            'precio' => 'required'
        ]);

        $curso = new Curso;
        $curso->create([
            'nombre' => $data['nombre'],
            'slug' => Str::slug($data['nombre']),
            'siglas' => $data['siglas'],
            'precio' => $data['precio'],
            'activo' => 0,
        ]);

        return redirect()->action('CursoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'siglas' => 'required',
            'precio' => 'required',
        ]);

        //asignar valores
        $curso->nombre = $data['nombre'];
        $curso->slug = Str::slug($data['nombre']);
        $curso->siglas = $data['siglas'];
        $curso->precio = $data['precio'];
        $curso->updated_at = Carbon::now();
        $curso->update();

        return redirect()->action('CursoController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->action('CursoController@index');
    }

    public function assign(Curso $curso)
    {
        $grupos = Grupo::all();
        return view('cursos.assign', compact('curso', 'grupos'));
    }

    public function add(Request $request)
    {
        //validar
        $data = request()->validate([
            'nombre' => 'required',
            'grupo_id' => 'required',
        ]);
        return $data;
        // $grupo = new Grupo;
        // $grupo->create([
        //     'nombre' => $data['nombre'],
        //     'curso_id' => $data['curso_id'],
        //     'fecha' => $data['fecha'],
        //     'activo' => 1
        // ]);

        // return redirect()->action('GrupoController@index');
    }

    public function change(Request $request, Curso $curso)
    {
        //asignar valores
        $curso->activo = 1;
        $curso->update();

        return redirect()->action('CursoController@index');
    }
}
