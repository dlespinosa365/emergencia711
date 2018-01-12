@extends('layouts.app')
@section('title')
    Usuarios
@endsection
@section('content')
    @foreach($usuarios as $user)
        @include('usuarios.lista',['usuario'=>$user])
    @endforeach
    <div class="pull-right">
        {{ $usuarios->links()}}
    </div>
@endsection
