<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $clientecito=DB::table('clientes')
                                ->select('id' , 'identificacion', 'nombre' , 'email' , 'telefono', 'updated_at')
                                ->where('id','LIKE' , '%'.$texto.'%')
                                ->orwhere('identificacion','LIKE' , '%'.$texto.'%')
                                ->orwhere('nombre','LIKE' , '%'.$texto.'%')
                                ->orwhere('email','LIKE' , '%'.$texto.'%')
                                ->orwhere('telefono','LIKE' , '%'.$texto.'%')
                                ->orderBy('id')
                                ->paginate(4);
        //$clientecito = Cliente::orderBy('id')->paginate(6);
        return view('clientes.index' , compact('clientecito','texto'));
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
        $clientecito = new Cliente();
        $clientecito->identificacion = $request->input('identificacion');
        $clientecito->nombre = $request->input('nombre');
        $clientecito->email = $request->input('email');
        $clientecito->telefono = $request->input('telefono');
        $clientecito->save();
        return redirect('/clientes')->with('store','Cliente Creado Satisfactoriamente');
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
         $clientecito = Cliente::find($id);

        $clientecito->identificacion = $request->identificacion;
        $clientecito->nombre = $request->nombre;
        $clientecito->email = $request->email;
         $clientecito->telefono = $request->telefono;

        $clientecito->save();

        return redirect('/clientes')->with('update','Cliente Editado Satisfactoriamente');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::destroy($id);
        return redirect('/clientes')->with('destroy','Cliente Eliminado');
    }
}
