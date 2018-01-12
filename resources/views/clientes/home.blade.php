@extends('layouts.app')
@section('title')
    Socios
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="@if (!count($errors)) active @endif"><a href="#tab_1" data-toggle="tab"
                                                                       aria-expanded="true">Busqueda</a></li>
                    <li class="@if (count($errors)) active @endif"><a href="#tab_2" data-toggle="tab"
                                                                      aria-expanded="false">Nuevo Socio</a></li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane @if (!count($errors)) active @endif" id="tab_1">
                        <div class="row">

                            {!! Form::open(['route.name' => 'socios', 'method'=>'GET']) !!}

                            <div class="col-md-12">
                                <div class="input-group">
                                    {!! Form::text('q',  isset($q) ? $q: '' ,['class' => 'form-control', 'placeholder'=>'Entre CEDULA, NOMBRES, APELLIDOS']) !!}
                                    {!! Form::token() !!}
                                    <span class="input-group-btn">
                                    <button type="submit" class="btn btn-success btn-flat"><i
                                                class="fa fa-search"></i></button>
                                 </span>

                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>

                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane @if (count($errors))active @endif" id="tab_2">
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::open(['route' => 'socios_new', 'method'=>'POST']) !!}
                                @include('clientes.form')
                                <button type="submit" class="btn btn-success btn-flat pull-right"><i
                                            class="fa fa-plus"></i> Crear Socio
                                </button>
                                {!! Form::close() !!}
                            </div>
                        </div>

                    </div>

                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->


    </div>


    @foreach($clientes as $cliente)
        @include('clientes.lista',['cliente'=>$cliente])
    @endforeach
    <div class="pull-right">
        {{ $clientes->appends(['q'=>$q])->links()}}
    </div>


@endsection
