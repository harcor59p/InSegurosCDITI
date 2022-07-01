<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class VehiculosController extends Controller
{
    /**
     *  Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $texto = trim($request->get('texto'));
        $vehiculo=DB::table('vehiculos')
                                ->join('clientes' , 'vehiculos.cliente_id' , '=' , 'clientes.id' )
                                ->select('vehiculos.id', 'vehiculos.fecha_cot' , 'clientes.identificacion', 'clientes.nombre' , 'vehiculos.placa', 'vehiculos.modelo' , 'vehiculos.cilindraje' , 'vehiculos.marca' , 'vehiculos.vr_serg_vehi' )
                                ->where('vehiculos.id','LIKE' , '%'.$texto.'%')
                                ->orwhere('clientes.identificacion','LIKE' , '%'.$texto.'%')
                                ->orwhere('clientes.nombre','LIKE' , '%'.$texto.'%')
                                ->orwhere('vehiculos.placa','LIKE' , '%'.$texto.'%')
                                ->orwhere('vehiculos.modelo','LIKE' , '%'.$texto.'%')
                                ->orwhere('vehiculos.cilindraje','LIKE' , '%'.$texto.'%')
                                ->orwhere('vehiculos.marca','LIKE' , '%'.$texto.'%')
                                ->orderBy('vehiculos.id')
                                ->paginate(4);
        //$clientecito = Cliente::orderBy('id')->paginate(6);
        return view('cotizaciones-vehiculos.index' , compact('vehiculo','texto'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datosvehi = Http::withToken('112233asd')->get('http://localhost:9000',['licenseplate' => 'MMT308']);
        $datosvehi_array = $datosvehi->json();

        $clientecito = Cliente::all();


        return view('cotizaciones-vehiculos.create' , compact('clientecito' , 'datosvehi_array'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculo = new vehiculo();
        // $vehiculo->identificacion = $request->input('identificacion');
        // $vehiculo->nombre = $request->input('nombre');
        // $vehiculo->email = $request->input('email');
        // $vehiculo->telefono = $request->input('telefono');
        $vehiculo->save();
        return redirect('cotizaciones-vehiculos.index')->with('store','Cotización Creada Satisfactoriamente');
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
