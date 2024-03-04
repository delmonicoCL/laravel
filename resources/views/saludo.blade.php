@extends('layouts.principal')

@section('contenido')

<div class="alert alert-primary mt-5" role="alert">
    {{'Hola  ' . $nombre . '   ' .$apellido . ',    ' .$comentario }}
  </div>

@endsection>