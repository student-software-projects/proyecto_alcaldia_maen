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
            <a class="btn btn-primary mt-3 mb-4" href="{{ route('jugadores.create') }}">Crear Nuevo Jugador</a>
              <table class="table table-striped">
                <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Numero Camisa</th>
                <th scope="col">Apodo</th>
                <th scope="col">Equipo</th>
                <th scope="col">Fecha Creación</th>
                <th scope="col">OPCIONES</th>
                </tr>
                </thead>
                  <tbody>
                  @foreach($jugadores as $jugadores)
                  <tr>
                      <td>{{$jugadores->id}}</td>
                      <td>{{$jugadores->nombres}}</td>
                      <td>{{$company->apellidos}}</td>
                      <td>{{$jugadores->numero_camisa}}</td>
                      <td>{{$company->apodo}}</td>
                      <td>{{$jugadores->equipo_id}}</td>
                      <td>{{$jugadores->created_at}}</td>
                      <td>
                          <form action="{{ route( 'jugadores.destroy',$jugadores->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                          <a href="{{ route('jugadores.show',$jugadores->id)}}" class="btn btn-sm btn-info">Detalles</a>
                          <a href="{{ route('jugadores.edit',$jugadores->id)}}" class="btn btn-sm btn-warning">Editar</a>
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
