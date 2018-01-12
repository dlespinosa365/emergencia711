@extends('layouts.app')
@section('title')
    Historias de {{ $cliente->fullname }}
@endsection

@section('content')




    @foreach($historias as $historia)
        @include('historias.lista',['historia'=>$historia])
    @endforeach
    <div class="pull-right">
        {{ $historias->links() }}

    </div>
    <a href="{{ route('socios') }}" class="btn btn-success btn-flat pull-left margin"><i
                class="fa fa-list"></i> Regresar al Listado de Socios
    </a>


@endsection
