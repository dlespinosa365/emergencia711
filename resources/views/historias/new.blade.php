@extends('layouts.app')
@section('title')
    Escribir en la historia
@endsection
@section('content')
    {!! Form::model($cliente, ['route' => 'historias-data.store', 'method'=>'POT']) !!}
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $cliente->full_name }}</h3>
        </div>
        <div class="box-body">

            @include('historias.form-new')
            {!! Form::hidden('medico_id', \Illuminate\Support\Facades\Auth::user()->id) !!}
            {!! Form::hidden('cliente_id', $cliente->id) !!}
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-success margin btn-flat pull-right"><i
                        class="fa fa-pencil"></i> Listo
            </button>
            <a href="{{ route('socios') }}" class="btn btn-success btn-flat pull-right margin"><i
                        class="fa fa-list"></i> Regresar al Listado de Socios
            </a>
        </div>
        <!-- /.box-body -->
    </div>
    {!! Form::close() !!}
@endsection
