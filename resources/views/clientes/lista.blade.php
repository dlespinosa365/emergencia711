<div class="box box-widget collapsed-box">
    <div class="box-header with-border">
        <div class="user-block">
            <img class="img-circle" src="{{ asset('img/user_default.png') }}" alt="User Image">
            <span class="username"><a href="#">{{ $cliente->full_name }}</a></span>
            <span class="description">Ingreso {{ $cliente->create_at }}</span>
        </div>
        <!-- /.user-block -->
        <div class="box-tools">

            <button type="button" class="btn btn-primary" data-widget="collapse"><i
                        class="fa fa-plus"> </i>
            </button>

        </div>
        <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body" style="display: none;">
        <div class="row">
            <div class="col-md-4">
                <h3>Datos Personales</h3>
                <table class="table table-hover">
                    <tr>
                        <td><b>Cedula</b></td>
                        <td>{{ $cliente->cedula }}</td>
                    </tr>
                    <tr>
                        <td><b>Direccion</b></td>
                        <td>{{ $cliente->full_direccion }}</td>
                    </tr>
                    <tr>
                        <td><b>Sexo</b></td>
                        <td>{{ $cliente->sexo }}</td>
                    </tr>
                    <tr>
                        <td><b>Edad</b></td>
                        <td>{{ $cliente->edad }}</td>
                    </tr>
                    <tr>
                        <td><b>Socio de</b></td>
                        <td>{{ $cliente->emergencia }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4">
                <h3>Historias</h3>
                <table class="table table-hover">
                    @foreach($cliente->n_historias as $historia)
                        <tr>
                            <td>LLamado {{ $historia->numero_llamado }} <b>Doctor</b> {{ $historia->medico->full_name }}
                                <b>Fecha</b> {{ $historia->create_at }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-md-4">
                <h3>Pagos</h3>
                <table class="table table-hover">
                    @foreach($cliente->n_pagos as $pago)
                        <tr>
                            <td> {{ $pago->created_at }} | {{ $pago->tipo }} |
                                <b>Monto</b> {{ $pago->monto }}
                                | <b>Por</b> {{ $pago->cobrado }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>


        </div>
    </div>

    <div class="box-footer text-center">
        {!! Form::open(['route' => ['socios_delete',$cliente->id], 'method'=>'DELETE']) !!}
        {!! Form::token() !!}
        <button type="submit" class="btn btn-danger margin pull-right"><i
                    class="fa fa-close"></i> Eliminar
        </button>
        {!! Form::close() !!}
        <a href="{{ route('socios_edit',[$cliente->id]) }}" class="btn btn-success margin pull-right"><i
                    class="fa fa-pencil"></i> Editar Datos del Usuario</a>
        <a href="{{ route('socios_historias',[$cliente->id]) }}" class="btn btn-success margin pull-right"><i
                    class="fa fa-history"></i> Historias</a>
        <a href="{{ route('socios_historias_nueva',[$cliente->id]) }}" class="btn btn-success margin pull-right"><i
                    class="fa fa-plus"></i> Nueva Historia</a>


    </div>
</div>


<!-- /.box-footer -->
