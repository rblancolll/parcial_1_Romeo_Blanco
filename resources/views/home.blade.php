@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <p>Progra III </p>
@endsection

@section('content')
    <p>enlaces de paginas </p>
    <a href="{{route('pagina2')}}"> Link a pagina 2</a>
    <a href="{{route('pagina1')}}"> Link a pagina 1</a>
@endsection
