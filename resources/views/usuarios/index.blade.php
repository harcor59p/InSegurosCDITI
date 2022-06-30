@extends('layouts.layout')

@section('titulo', 'usuarios')

@section('main')

<br>
<div class="container">
    <h2 class="title-cards">Usuarios</h2>
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
            <form action="{{route('usuarios.index')}}" method="get">
                <div class="form-row">
                    <div class="col-sm-7">
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#usuarioModal" data-whatever="@mdo" style="background-color: #4a38a7">Crear Usuario</button>
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

    <form action="{{Route('usuarios.store')}}" method="post">
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

        <!-- Modal de creacion de Clientes -->
            <div class="modal fade" id="usuarioModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="usuarioModalLabel">Se creara un nuevo Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Nombre: </label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">E-mail: </label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label">contraseña: </label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="rol" class="col-form-label">rol: </label>
                        <select type="text" class="form-control" id="rol" name="rol">
                            <option disabled="">Escoge Un Rol</option>
                            <option value="Usuario">Usuario</option>
                            <option value="Administrador">Admistrador</option>
                        </select>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" style="background-color: #4a38a7">Crear Usuario</button>
                </div>
                </div>
            </div>
            </div>

    </form>
<!-- Modal de creacion de Clientes -->

    <br>
    <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">E-mail</th>
            <th scope="col">Rol</th>
            <th scope="col">Fecha Modificación</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ( $usuario as $usuari )
          <tr>
            <th>{{$usuari->id}}</th>
            <th>{{$usuari->name}}</th>
            <th>{{$usuari->email}}</th>
            <th>{{$usuari->rol}}</th>
            <th>{{$usuari->updated_at}}</th>
            <th>
                <button type="submit" class="btn btn-secondary btn-sm" style="background-color: #4a38a7" data-toggle="modal" data-target="#editModal{{$usuari->id}}">Editar  <i class="fa-solid fa-pen-to-square"></i></i></button>
                <!-- Modal de edición de Clientes -->
                    <div class="modal fade" id="editModal{{$usuari->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="usuarioModalLabel">Se actualizaran los datos del Usuario</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('usuarios.update', $usuari->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">Nombre: </label>
                                        <input type="name" class="form-control" id="name" value="{{$usuari->name}}" name="name" >
                                    </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">E-mail: </label>
                                    <input type="email" class="form-control" id="email" value="{{$usuari->email}}" name="email" >
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Contraseña: </label>
                                    <input type="password" class="form-control" id="password" value="" name="password" >
                                </div>
                                <div class="form-group">
                                    <label for="rol" class="col-form-label">Rol: </label>
                                    <select type="text" class="form-control" id="rol" value="{{$usuari->rol}}" name="rol">
                                        <option disabled="">Escoge El Nuevo Rol</option>
                                        <option value="Usuario">Usuario</option>
                                        <option value="Administrador">Administrador</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary" style="background-color: #4a38a7">Actualizar</button>
                                </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>

<!-- Modal de edición de Clientes -->

                <button type="submit" class="btn btn-secondary btn-sm" style="background-color: #4a38a7" data-toggle="modal" data-target="#deleteModal" data-name="{{$usuari->name}}" data-id="{{$usuari->id}}">Eliminar  <i class="fa-solid fa-trash"></i></button>
            </th>
            </tr>
          @endforeach
        </tbody>
      </table>
{{ $usuario->links('vendor.pagination.bootstrap-4' )}}
</div>

<!-- Modal de Configuración -->

  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Estas seguro de eliminiar el registro?</p>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

        <form  id="formdelete" action="{{route('usuarios.destroy', 1 )}}" data-action="{{route('usuarios.destroy', 1)}}"  method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary" style="background-color: #4a38a7">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>


<script>
  $('#deleteModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id') // Extract info from data-* attributes
  var name = button.data('name') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  action = $('#formdelete').attr('data-action').slice(0,-1);
  action+= id;
  $('#formdelete').attr('action',action);
  var modal = $(this)
  modal.find('.modal-title').text('Se va a eliminar el Usuario: ' + name)

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
