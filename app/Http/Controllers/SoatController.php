<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\soat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class SoatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $soat=DB::table('Soats')
                                ->join('clientes' , 'soats.cliente_id' , '=' , 'clientes.id' )
                                ->select('soats.id', 'soats.fecha_cot_soat' , 'clientes.identificacion', 'clientes.nombre' , 'soats.placa', 'soats.modelo' , 'soats.cilindraje' , 'soats.marca' , 'soats.vr_soat' )
                                ->where('Soats.id','LIKE' , '%'.$texto.'%')
                                ->orwhere('clientes.identificacion','LIKE' , '%'.$texto.'%')
                                ->orwhere('clientes.nombre','LIKE' , '%'.$texto.'%')
                                ->orwhere('soats.placa','LIKE' , '%'.$texto.'%')
                                ->orwhere('soats.modelo','LIKE' , '%'.$texto.'%')
                                ->orwhere('soats.cilindraje','LIKE' , '%'.$texto.'%')
                                ->orwhere('soats.marca','LIKE' , '%'.$texto.'%')
                                ->orderBy('soats.id')
                                ->paginate(4);

        return view('cotizaciones-soat.index' , compact('soat','texto' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datosSoat = Http::withToken('112233asd')->get('http://localhost:9000',['licenseplate' => 'MMT308']);
        $soat_array = $datosSoat->json();

        $clientecito = Cliente::all();


        return view('cotizaciones-soat.create' , compact('clientecito' , 'soat_array'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $soat = new soat();
        // $vehiculo->identificacion = $request->input('identificacion');
        // $vehiculo->nombre = $request->input('nombre');
        // $vehiculo->email = $request->input('email');
        // $vehiculo->telefono = $request->input('telefono');
        $soat->save();
        return redirect('cotizaciones-soat.index')->with('store','Cotización Creada Satisfactoriamente');
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
