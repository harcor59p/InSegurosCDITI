<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $usuari=DB::table('users')
                                ->select('id',  'name' , 'email' , 'rol', 'updated_at')
                                ->where('id','LIKE' , '%'.$texto.'%')
                                ->orwhere('password','LIKE' , '%'.$texto.'%')
                                ->orwhere('name','LIKE' , '%'.$texto.'%')
                                ->orwhere('email','LIKE' , '%'.$texto.'%')
                                ->orwhere('rol','LIKE' , '%'.$texto.'%')
                                ->orderBy('id')
                                ->paginate(4);

        return view('/usuarios.index' , compact('usuari','texto'));
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
        $usuari = new User();
        $usuari->id = $request->input('id');
        $usuari->name = $request->input('name');
        $usuari->email = $request->input('email');
        $usuari->password = $request->input('password');
        $usuari->save();
        return redirect('/usuarios')->with('store','usuario Creado Satisfactoriamente');
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
         $usuari = User::find($id);

        $usuari->id = $request->id;
        $usuari->name = $request->name;
        $usuari->email = $request->email;
        $usuari->password = $request->password;

        $usuari->save();

        return redirect('/usuarios')->with('update','Usuario Editado Satisfactoriamente');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/usuarios')->with('destroy','Usuario Eliminado');
    }
}
