<?php

namespace App\Http\Controllers;

use App\HistoriaClinica;
use App\Http\Requests\ClienteRequest;
use App\Http\Requests\ClienteUpdateRequest;

use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Cliente;


class ClienteController extends Controller
{
    /**
     * ClienteController constructor.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'doctor']);
    }

    public function index(Request $request)
    {
        $q = $request->input('q');
        $clientes = Cliente::search($q)->orderBy('id', 'DESC')->paginate(20);
        return view('clientes.home', compact('clientes', 'q'));
    }


    public function nuevo(ClienteRequest $request)
    {
        $cliente = Cliente::create($request->all());
        $cliente->save();
        flash('Socio guardado exitosamente')->success();
        return redirect('socios');
    }

    public function update(ClienteUpdateRequest $request, $id)
    {
        Cliente::updateOrCreate(['id' => $id], $request->all());
        flash('Socio guardado exitosamente')->success();
        return redirect('socios');
    }

    public function editar($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function delete($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        flash('Socio eliminado exitosamente')->success();
        return redirect('socios');
    }

    public function getHistories($id)
    {
        $cliente = Cliente::find($id);
        $historias = HistoriaClinica::where('cliente_id', '=', $id)->orderBy('historiaclinicas.id', 'DESC')->paginate(5);
        $enfermeros = $this->getArry(User::ROLE_ENFERMERA);
        $doctores = $this->getArry(User::ROLE_DOCTOR);
        $choferes = $this->getArry(User::ROLE_CHOFER);

        return view('historias.home', compact('historias', 'cliente', 'enfermeros', 'doctores', 'choferes'));

    }

    public function getArry($role)
    {
        $cls = User::all();
        $clientes_select = [];
        foreach ($cls as $cliente) {
            if ($cliente->role == $role) {
                $clientes_select[$cliente->id] = $cliente->full_name;
            }
        }
        return $clientes_select;
    }

    public function nuevaHistoria($id)
    {
        $cliente = Cliente::find($id);
        $enfermeros = $this->getArry(User::ROLE_ENFERMERA);
        $choferes = $this->getArry(User::ROLE_CHOFER);
        return view('historias.new', compact('cliente', 'enfermeros', 'doctores', 'choferes'));

    }


}
