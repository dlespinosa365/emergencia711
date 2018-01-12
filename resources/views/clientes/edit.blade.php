@extends('layouts.app')
@section('title')
    Editar Datos del Socio
@endsection
@section('content')

    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $cliente->full_name }}</h3>
        </div>
        <div class="box-body">
            {!! Form::model($cliente, ['route' => ['socios_update', $cliente->id], 'method'=>'PUT']) !!}
            @include('clientes.form')
            <button type="submit" class="btn btn-success btn-flat pull-right"><i
                        class="fa fa-pencil"></i> Editar Socio
            </button>
            {!! Form::close() !!}
        </div>
        <div class="box-footer">
            <a href="{{ route('socios') }}" class="btn btn-success btn-flat pull-right">
                <i class="fa fa-list"></i> Regresar al Listado
            </a>
        </div>
        <!-- /.box-body -->
    </div>
@endsection
