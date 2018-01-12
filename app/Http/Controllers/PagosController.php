<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Http\Requests\PagoRequest;
use App\Pago;
use Illuminate\Http\Request;

class PagosController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'contable']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function home(Request $request)
    {
        $q = $request->input('q');
        $clientes_select = $this->getClientArry();
        $pagos = Pago::search($q)->orderBy('pagos.id', 'DESC')->paginate(20);
        return view('pagos.home', compact('pagos', 'q', 'clientes_select'));
    }

    /**
     * @param array $middleware
     */
    public function getClientArry()
    {
        $cls = Cliente::all();
        $clientes_select = [];
        foreach ($cls as $cliente) {
            $clientes_select[$cliente->id] = $cliente->full_name;
        }
        return $clientes_select;
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PagoRequest $request)
    {
        $pago = Pago::create($request->all());
        $pago->save();
        flash('Pago guardado exitosamente')->success();
        return redirect('pagos');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pago = Pago::find($id);
        $clientes = $this->getClientArry();
        return view('pagos.edit', compact('pago', 'clientes'));
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
        Pago::updateOrCreate(['id' => $id], $request->all());
        flash('Pago guardado exitosamente')->success();
        return redirect('pagos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Pago::find($id);
        $cliente->delete();
        flash('Pago eliminado exitosamente')->success();
        return redirect('pagos');
    }
}
