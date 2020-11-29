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
            <a class="btn btn-primary mt-3 mb-4" href="{{ route('localidades.create') }}">Crear Nueva Localidad</a>
              <table class="table table-striped">
                <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Localidad</th>
                <th scope="col">Fecha Creacion</th>
                <th scope="col">OPCIONES</th>
                </tr>
                </thead>
                  <tbody>
                  @foreach($localidad as $localidad)
                  <tr>
                      <td>{{$localidad->id}}</td>
                      <td>{{$localidad->localidad}}</td>s
                      <td>{{$localidad->created_at}}</td>
                      <td>
                          <form action="{{ route( 'localidades.destroy',$localidad->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                          <a href="{{ route('localidades.show',$localidad->id)}}" class="btn btn-sm btn-info">Detalles</a>
                          <a href="{{ route('localidades.edit',$localidad->id)}}" class="btn btn-sm btn-warning">Editar</a>
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
