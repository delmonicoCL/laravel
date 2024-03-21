@extends('layouts.principal')

@section('contenido')


<div class="card">
       <div class="card-body">
        <h5 class="card-title">Buscar</h5>
             <form action="{{action([App\Http\Controllers\CiclesController::class,'index'])}}">
            <div class="form-row">
                <div class="col-1">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="actiuBuscar" name="actiuBuscar" value="actiu">
                        <label class="custom-control-label" for="actiuBuscar">Actiu</label>    
                    </div>
                </div>
                <div class="col-1">
                    <button type="submit" class="btn btn-secondary"> <i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </div>
            </form>
       </div>
</div>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Siglas</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Estado</th>
      </tr>
    </thead>
    <tbody>
     
@foreach ($cicles as $cicle)

<tr>
    <td>{{ $cicle->sigles }}</td>
    <td>{{ $cicle->nom }}</td>
    <td>{{ $cicle->descripcio }}</td>
    <td>
        
        @if ($cicle->actiu)

        <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="actiu" name="actiu" value="actiu" checked>
            <label class="custom-control-label" for="actiu"></label>    

        </div>
            
        @else
        <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="actiu" name="actiu" value="actiu">
            <label class="custom-control-label" for="actiu"></label>    

        </div>
        @endif
        
        {{ $cicle->actiu }}</td>

</tr>
    
@endforeach

    </tbody>
  </table>
    
@endsection