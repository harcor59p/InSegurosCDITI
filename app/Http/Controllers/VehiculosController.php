<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

use function Psy\debug;

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
                                ->select('vehiculos.id',  'clientes.identificacion', 'clientes.nombre' , 'vehiculos.placa', 'vehiculos.modelo' , 'vehiculos.cilindraje' , 'vehiculos.marca' , 'vehiculos.vr_serg_vehi' )
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
    public function create(Request $request)
    {

        $licenseplate = isset($request->licenseplate) ? trim($request->get('licenseplate')) : null;
        $cliselect = isset($request->cliente_id) ? $request->get('cliente_id') : null;
        $clientecito = Cliente::all();

        if($licenseplate != null && $cliselect != null){

            $datosvehi = Http::withToken('112233asd')->get('http://localhost:9000',['licenseplate' => $licenseplate]);
            $datosvehi_array = $datosvehi->json();
            //$datosvehi_array = json_decode($datosvehi);

            $clisel = Cliente::where('id', $cliselect )->first();
        }else{
            $datosvehi_array = [];
            $clisel = [];
        }

        //$clisel1 = json_decode($clisel);

        //$hoy = getdate('d/M/y');
        //dd($hoy);
        return view('cotizaciones-vehiculos.create' , compact('clientecito' , 'datosvehi_array' , 'clisel'));
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
        $vehiculo->cliente_id = $request->cliente_id;
        $vehiculo->placa = $request->placa;
        $vehiculo->Modelo = $request->Modelo;
        $vehiculo->serie = $request->serie;
        $vehiculo->cilindraje = $request->cilindraje;
        $vehiculo->marca = $request->marca;
        $vehiculo->color = $request->color;
        $vehiculo->servicio = $request->servicio;
        $vehiculo->vr_serg_vehi = $request->vr_serg_vehi;
        $vehiculo->save();
        return redirect('/vehiculos')->with('store','Cotizaci??n Creada Satisfactoriamente');
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
        vehiculo::destroy($id);
        return redirect('/vehiculos')->with('destroy','Cotizaci??n Eliminada');
    }
}
