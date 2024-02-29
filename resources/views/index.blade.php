@extends('layouts.principal')

@section('titulo','indeCE')

    
@section('contenido')

<h1>TITULO</h1>


<a href="{{ url('/prova')}}">IR A SALUDO</a>
<a href="{{ route('saludo')}}">IR A SALUDO2</a>


@endsection