@extends('layouts.layout')

@section('titulo', 'Cotizador Seguro Todo Riesgos - Vehiculos')

@section('main')

<br>
<div class="container">
    <h2 class="title-cards">Cotizaciones Seguro - Vehiculos</h2>
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
            <div class="form-row">
                    <form action="{{route('vehiculos.create')}}" method="get">
                    <div class="col-sm-7">
                        <button type="submit" class="btn btn-secondary" style="background-color: #4a38a7">Crear Cotización</button>
                    </div>
                    </form>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="texto" value="{{$texto}}">
                    </div>
                    <div class="col-auto">
                        <input type="submit" class="btn btn-secondary" style="background-color: #4a38a7" value="Buscar">
                    </div>
            </div>

        </div>
    </div>

    <form action="{{Route('vehiculos.store')}}" method="post">
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
            <th scope="col">Identificación</th>
            <th scope="col">Nombre</th>
            <th scope="col">Placa</th>
            <th scope="col">Modelo</th>
            <th scope="col">Cilindraje</th>
            <th scope="col">Marca</th>
            <th scope="col">Vr Cotización</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ( $vehiculo as $vehiculos )
          <tr>
            <th>{{$vehiculos->id}}</th>
            <th>{{$vehiculos->identificacion}}</th>
            <th>{{$vehiculos->nombre}}</th>
            <th>{{$vehiculos->placa}}</th>
            <th>{{$vehiculos->modelo}}</th>
            <th>{{$vehiculos->cilindraje}}</th>
            <th>{{$vehiculos->marca}}</th>
            <th>{{$vehiculos->vr_serg_vehi}}</th>
            <th>
                <button type="submit" class="btn btn-secondary btn-sm" style="background-color: #4a38a7" data-toggle="modal" data-target="#deleteModal" data-nombre="{{$vehiculos->placa}}" data-id="{{$vehiculos->id}}">Eliminar  <i class="fa-solid fa-trash"></i></button>
            </th>
            </tr>
          @endforeach
        </tbody>
      </table>
{{$vehiculo->links('vendor.pagination.bootstrap-4')}}
</div>

<script>
    $('#deleteModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') // Extract info from data-* attributes
    var nombre = button.data('nombre') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    action = $('#formdelete').attr('data-action').slice(0,-1);
    action+= id;
    $('#formdelete').attr('action',action);
    var modal = $(this)
    modal.find('.modal-title').text('Se va a eliminar el cliente: ' + nombre)

  })
  </script>

  <!-- Modal de Configuración -->



  {{-- <script>
      $('#deditModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var id = button.data('id') // Extract info from data-* attributes
      var nombre = button.data('nombre') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      action = $('#formdelete').attr('data-action').slice(0,-1);
      action+= id;
      $('#formdelete').attr('action',action);
      var modal = $(this)
      modal.find('.modal-title').text('Se va a eliminar el cliente: ' + nombre)

    })
    </script> --}}




  @endsection
