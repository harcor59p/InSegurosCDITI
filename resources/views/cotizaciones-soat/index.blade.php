@extends('layouts.layout')

@section('titulo', 'Cotizar precio de Soat')

@section('main')

<br>
<div class="container">
    <h2 class="title-cards">Cotizaciones Seguros - SOAT</h2>
    <br><br>

    @if (\Session::has('store'))
    <div class="alert alert-success">
        <p>{{\Session::get('store')}}</p>
    </div>
    @endif

    @if (\Session::has('update'))
    <div class="alert alert-success">
        <p>{{\Session::get('update')}}</p>
    </div>
    @endif

    @if (\Session::has('destroy'))
    <div class="alert alert-danger">
        <p>{{\Session::get('destroy')}}</p>
    </div>
    @endif
    <div class="row">

        <div class="col-xl-12">
            <form action="{{route('soat.create')}}" method="get">
                <div class="form-row">
                    <div class="col-sm-7">
                        <button type="submit" class="btn btn-secondary" style="background-color: #4a38a7">Crear Cotización</button>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="texto" value="{{$texto}}">
                    </div>
                    <div class="col-auto">
                        <input type="submit" class="btn btn-secondary" style="background-color: #4a38a7" value="Buscar">
                    </div>
                </div>
            </form>

        </div>
    </div>

    <form action="{{Route('soat.store')}}" method="post">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $alerta )
            <div class="alert alert-danger" role="alert">
                <ul>
                    <li>{{$alerta}}</li>
                </ul>
            </div>
            @endforeach
        @endif

    <br>
    <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Fecha</th>
            <th scope="col">Identificación</th>
            <th scope="col">Nombre</th>
            <th scope="col">Placa</th>
            <th scope="col">Modelo</th>
            <th scope="col">Cilindraje</th>
            <th scope="col">Marca</th>
            <th scope="col">Vr Soat</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ( $soat as $soats )
          <tr>
            <th>{{soats->id}}</th>
            <th>{{soats->fecha_cot}}</th>
            <th>{{soats->identificacion}}</th>
            <th>{{soats->nombre}}</th>
            <th>{{soats->placa}}</th>
            <th>{{soats->modelo}}</th>
            <th>{{soats->cilindraje}}</th>
            <th>{{soats->marca}}</th>
            <th>{{soats->vr_soat}}</th>
            <th>
                <button type="submit" class="btn btn-secondary btn-sm" style="background-color: #4a38a7" data-toggle="modal" data-target="#deleteModal" data-nombre="{{$soats->placa}}" data-id="{{$soats->id}}">Eliminar  <i class="fa-solid fa-trash"></i></button>
            </th>
            </tr>
          @endforeach
        </tbody>
      </table>
{{$soat->links('vendor.pagination.bootstrap-4')}}
</div>

<!-- Modal de Configuración -->

  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar un Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Estas seguro de eliminiar la cotización seleccionada?</p>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

        <form  id="formdelete" action="{{route('soat.destroy', 1 )}}" data-action="{{route('soat.destroy', 1)}}"  method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary" style="background-color: #4a38a7">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>
