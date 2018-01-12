<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::paginate(10);
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = User::create(
            [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => bcrypt($request->get('password')),
                'active' => $request->get('active'),
                'role' => $request->get('role'),
                'lastname' => $request->get('lastname'),
            ]
        );
        $user->save();
        flash('Pago guardado exitosamente')->success();
        return redirect('usuarios');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('usuarios.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $array =
            [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'active' => $request->get('active'),
                'role' => $request->get('role'),
                'lastname' => $request->get('lastname'),
            ];
        if ($request->get('password')) {
            $array['password'] = bcrypt($request->get('password'));
        }
        User::updateOrCreate(['id' => $id], $array);
        flash('usuario guardado exitosamente')->success();
        return redirect('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = User::find($id);
        $cliente->delete();
        flash('Usuario eliminado exitosamente')->success();
        return redirect('usuarios');
    }
}
