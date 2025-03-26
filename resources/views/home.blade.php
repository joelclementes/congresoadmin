@extends('layouts.plantilla')
@section('title','CongresoAdmin - Inicio')

@section('content')
<div class="row mt-3 menu">
    <a class="link__menu" href="#">
        <div class="card card__menu">
            <span>Administración de usuarios</span>
        </div>
    </a>
    <a class="link__menu" href="{{route('procedimientos.index')}}">
        <div class="card card__menu">
            <span>Procedimientos administrativos (Adquisiciones)</span>
        </div>
    </a>

</div>
@endsection