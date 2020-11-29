<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0. maximun-scale=1.0 minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>TIENDA VIRTUAL</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mt-3 mb-4" href="{{ route('equipos.create') }}">Crear Nuevo Equipo</a>
              <table class="table table-striped">
                <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre del Equipo</th>
                <th scope="col">Logo</th>
                <th scope="col">Localidad</th>
                <th scope="col">FECHA CREACION</th>
                <th scope="col">OPCIONES</th>
                </tr>
                </thead>
                  <tbody>
                  @foreach($equipos as $equipos)
                  <tr>
                      <td>{{$equipos->id}}</td>
                      <td>{{$equipos->nombre_equipo}}</td>
                      <td>{{$equipos->logo}}</td>
                      <td>{{$equipos->localidad_id}}</td>
                      <td>{{$equipos->created_at}}</td>
                      <td>
                          <form action="{{ route( 'equipos.destroy',$equipos->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                          <a href="{{ route('equipos.show',$equipos->id)}}" class="btn btn-sm btn-info">Detalles</a>
                          <a href="{{ route('equipos.edit',$equipos->id)}}" class="btn btn-sm btn-warning">Editar</a>
                          <button type="submit" class="btn btn-sm btn-danger">Eliminar</buttonty>
                          </form>
                      </td>
                  </tr>
                  @endforeach
                  </tbody>
               </table>
        </div>
    </div>
</div>
</body>
</html>
