<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;

class ChartsController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('can:graficas.index')->only('index');
    }
    */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //if (RolesController::verificRole() == '1') {

        $datos1 = Solicitud::select('promedio', 'nombre')->get();
        $datos = [];
        $nombres = [];
        //return $datos1;
        foreach ($datos1 as  $key => $value) {
            $datos[$key] = $value->promedio;
            $nombres[$key] = $value->nombre;
        }
        //return $datos;
        //return $nombres;
        return view('charts.charts', compact('datos', 'nombres'));
        /*
        }else{
            return redirect()->route('reportes.index');
        }
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
