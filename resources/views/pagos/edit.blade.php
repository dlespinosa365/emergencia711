@extends('layouts.app')
@section('title')
    Editar Datos del Pago
@endsection
@section('content')

    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $pago->create_at }} | {{ $pago->cliente->full_name }}</h3>
        </div>
        <div class="box-body">
            {!! Form::model($pago, ['route' => ['pagos-data.update', $pago->id], 'method'=>'PUT']) !!}
            @include('pagos.form')
            <button type="submit" class="btn btn-success btn-flat pull-right"><i
                        class="fa fa-pencil"></i> Editar Pago
            </button>
            {!! Form::close() !!}
        </div>
        <div class="box-footer">
            <a href="{{ route('pagos') }}" class="btn btn-success btn-flat pull-right"><i
                        class="fa fa-list"></i> Regresar al Listado
            </a>
        </div>
        <!-- /.box-body -->
    </div>
@endsection
