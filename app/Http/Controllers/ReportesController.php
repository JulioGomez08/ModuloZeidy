<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Institucions;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class ReportesController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('can:reportes.index')->only('index');
    }
*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //   if (RolesController::verificRole() == '0') {
        $instituto = Institucions::all();
        $carreras = Solicitud::select('plan_estudios')
            ->distinct('plan_estudios')
            ->get();
        return view("admin.home", compact('instituto', 'carreras'));
        /* } else {
            return redirect()->route('graficas.index');
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

        $origin = ['Nombre', 'Curp', 'Sexo', 'Institucion', 'No.Control', 'Inicial', 'Final', 'PLan de estudios', 'e-mail', 'clave', 'creditos', 'solicitado', 'Status', 'Preparatoria'];
        $sql = ["nombre", "curp", "sexo", "institucion_id", "no_control", "fecha_inicio", "fecha_termino", "plan_estudios", "correo", "clave", "creditos_totales", "fecha", "status", "fecha_media_superior"];
        $data = $request->data;

        foreach ($request->data as $value) {
            $elementSql[] = $sql[$value];
        }

        //codigo where para  filtrar tipo_certificado
        //$insti = Solicitud::select($request->data)
        /*
        $insti = Solicitud::select($elementSql)
            ->where('institucion_id', $request->insti);

            
        $datex = Solicitud::whereBetween('fecha_inicio', [$request->date_init, $request->date_end])
            ->WhereBetween('fecha_termino', [$request->date_init, $request->date_end])
            ->get();
            */

        $insti = Solicitud::select($elementSql)
            ->whereBetween('fecha_inicio', [$request->date_init, $request->date_end])
            ->WhereBetween('fecha_termino', [$request->date_init, $request->date_end])
            ->where('institucion_id', $request->insti);

        if ($request->tipo_certificado != '0') {
            $insti = $insti->where('tipo_certificado', $request->tipo_certificado);
        }

        if ($request->carrera != '0') {
            $insti = $insti->where('plan_estudios', $request->carrera);
        }

        if ($request->genero != 'A') {
            $insti = $insti->where('sexo', $request->genero);
        }

        if ($request->status != '0') {
            $insti = $insti->where('status', $request->status);
        }
        $insti = $insti->get();


        $pdf = App::make('dompdf.wrapper');
        return view('pdf.reporte', compact('insti', 'data', 'origin', 'sql'));
        // $pdf = Pdf::loadView('pdf.reporte', compact('insti', 'data', 'origin', 'sql'));
        //$pdf = Pdf::render('pdf.reporte', compact('insti', 'data', 'origin', 'sql'));
        //return $pdf;
       // $pdf->download('preview.pdf');
        //return 'hi';

        //return $pdf->download('reporte');
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
