@extends('layouts.app')
@section('title')
    Usuarios
@endsection
@section('content')

    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Nuevo Usuario</h3>
        </div>
        <div class="box-body">
            {!! Form::open(['route' => ['usuarios.store'], 'method'=>'POST']) !!}
            @include('usuarios.form')
            <button type="submit" class="btn btn-success btn-flat pull-right"><i
                        class="fa fa-pencil"></i> Crear
            </button>
            {!! Form::close() !!}
        </div>
        <div class="box-footer">
            <a href="{{ route('usuarios.index') }}" class="btn btn-success btn-flat pull-right margin">
                <i class="fa fa-list"></i> Regresar al Listado
            </a>
        </div>
        <!-- /.box-body -->
    </div>
@endsection
