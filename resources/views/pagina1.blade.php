@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    <p>Bienvenido a pagina 1</p>
@endsection

@section('content')
    <p>Volver a la pagina pricipal</p>
    <a href="{{route('servidor2')}}">Link a la pagina principal</a>
@endsection
