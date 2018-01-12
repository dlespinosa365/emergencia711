<?php

namespace App\Http\Controllers;

use App\HistoriaClinica;
use App\Http\Requests\HistoriaClinicaRequest;
use Illuminate\Http\Request;

class HistoriasController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth', 'doctor']);
    }

    public function store(HistoriaClinicaRequest $request)
    {
        $obj = HistoriaClinica::create($request->all());
        $obj->save();
        flash('Historia guardado exitosamente')->success();
        return redirect('socios');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(HistoriaClinicaRequest $request, $id)
    {

        HistoriaClinica::where('id', $id)->update($request->except(['_method', '_token']));
        flash('Historia guardada exitosamente')->success();
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = HistoriaClinica::find($id);
        $obj->delete();
        flash('Historia eliminado exitosamente')->success();
        return back();
    }
}
