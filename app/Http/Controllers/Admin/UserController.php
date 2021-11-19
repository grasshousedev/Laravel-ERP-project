<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Classes\CustomCodeGenerator;

use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('can:Ver listado de usuarios')->only('index');
        $this->middleware('can:Editar usuarios')->only('edit', 'update');
    }
    
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required',
            'apellido'      => 'required',
            'dni'           => 'required|unique:users|max:8',
            'email'         => 'required|unique:users',
            'estado'        => 'required',
            'cargo'         => 'required',
            'celular'       => 'required|max:9',
            'password'      => 'required'
        ]);

        $datosuser = request()->except('_token');
        User::insert($datosuser);

        $last_user = User::all()->last();
        $codigo = new CustomCodeGenerator("USU", $last_user->id - 1);
        $datosuser['codigo'] = $codigo->generar;
        User::where('id', '=', $last_user->id)->update($datosuser);
        //return response()->json($datosuser);
        $users = User::all();
        return redirect()->route('admin.users.index', compact('users'))->with('info', 'Se registro correctamente al usuario.');
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
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.edit', $user)->with('info', 'Roles asignados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // $user->delete();
        $user['estado'] = 'INACTIVO';
        $user->save();
        
        return redirect()->route('admin.users.index')->with('info', 'El usuario se desactivó correctamente.');
    }
}
