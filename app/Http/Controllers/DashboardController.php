<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Grupo;
use App\Alumno;
use App\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function __construct() {
    //     $this->middleware(['auth', 'verified']);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = new Dashboard;
        $data->cursos = $this->getCursos();
        $data->alumnos = $this->getAlumnos();
        $data->grupos = $this->getGrupos();
        $data->cursosgrupos = $this->getGruposCurso();
        $data->gruposalumnos = $this->getAlumnosGrupo();

        return view('dashboard.index', compact('data'));
    }


    /** Obtiene la informacion de los grupos */
    private function getGrupos(){
        $gruposNuevos = Grupo::where('status_id', 1)->get();
        $gruposAbiertos = Grupo::where('status_id', 2)->get();
        $gruposCerrados = Grupo::where('status_id', 3)->get();
        $gruposFinalizados = Grupo::where('status_id', 4)->get();

        $grupos = [
            'total' => count($gruposNuevos) + count($gruposAbiertos) + count($gruposCerrados) + count($gruposFinalizados),
            'data' => json_encode( [count($gruposNuevos), count($gruposAbiertos), count($gruposCerrados), count($gruposFinalizados)] )
        ];

        return $grupos;
    }

    /** Obtiene la informacion de los cursos */
    private function getCursos(){
        $cursosActivos = Curso::where('activo', 1)->get();
        $cursosInactivos = Curso::where('activo', 0)->get();
        $cursos = [
            'total' => count($cursosActivos) + count($cursosInactivos),
            'data' => json_encode( [count($cursosActivos), count($cursosInactivos)] )
        ];

        return $cursos;
    }

    /** Obtiene la informacion de los alumnos */
    private function getAlumnos(){
        $alumnosActivos = Alumno::where('activo', 1)->get();
        $alumnosInactivos = Alumno::where('activo', 0)->get();
        $alumnos = [
            'total' => count($alumnosActivos) + count($alumnosInactivos),
            'data' => json_encode( [count($alumnosActivos), count($alumnosInactivos)] )
        ];

        return $alumnos;
    }

    /** Obtiene los grupos de cada curso */
    private function getGruposCurso(){
        $cursos = Curso::where('activo', 1)->get();

        $labels = [];
        $bgcolor = [];
        $bdcolor = [];
        $grupos = [];

        foreach ($cursos as $key => $curso) {
            $labels[$key] = $curso->siglas;
            $grupos[$key] = count($curso->grupos);
        }

        for ($i=0; $i < count($labels); $i++) {
            $rand = range(1, 255);
            shuffle($rand);
            $bgcolor[$i] = 'rgba('.$rand[0].', '.$rand[1].', '.$rand[2].', 0.2)';
            $bdcolor[$i] = 'rgba('.$rand[0].', '.$rand[1].', '.$rand[2].')';
        }


        $cursosinfo = [
            'labels' => json_encode($labels),
            'bgcolor' => json_encode($bgcolor),
            'bdcolor' => json_encode($bdcolor),
            'data' => json_encode($grupos),
        ];

        return $cursosinfo;
    }

    /** Obtiene los grupos de cada curso */
    private function getAlumnosGrupo(){
        $grupos = Grupo::where('status_id', 2)->get();

        $labels = [];
        $bgcolor = [];
        $bdcolor = [];
        $alumnos = [];

        foreach ($grupos as $key => $grupo) {
            $labels[$key] = $grupo->nombre;
            $alumnos[$key] = count($grupo->alumnos);
        }

        for ($i=0; $i < count($labels); $i++) {
            $rand = range(1, 255);
            shuffle($rand);
            $bgcolor[$i] = 'rgba('.$rand[0].', '.$rand[1].', '.$rand[2].', 0.2)';
            $bdcolor[$i] = 'rgba('.$rand[0].', '.$rand[1].', '.$rand[2].')';
        }


        $gruposinfo = [
            'labels' => json_encode($labels),
            'bgcolor' => json_encode($bgcolor),
            'bdcolor' => json_encode($bdcolor),
            'data' => json_encode($alumnos),
        ];

        return $gruposinfo;
    }
}
