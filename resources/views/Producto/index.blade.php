<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>

</head>

<body>
 
        @extends('layouts.app')
  
        @section('content')
        <section class="section">
            <div class="section-header">
    <div class="container ">
        <div class="row justify-content-center">
            <h3>Lista de Productos</h3>
            <a href="{{url('Producto/create')}}" class="btn btn-primary">Registrar nuevo producto</a>

            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Categoria</th>
                        <th>Estado</th>
                        <th>Acion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Productos as $Producto)
                    <tr>
                        <td>{{ $Producto->id}}</td>
                        <td>{{ $Producto->nombre}}</td>
                        <td>{{ $Producto->precio}}</td>
                        <td>{{ $Producto->stock}}</td>
                        <td>{{ $Producto->id_categoria}}</td>
                        <td>{{ $Producto->id_estado}}</td>
                        <td>
                            <form action ="{{ url('/Producto/'. $Producto->id) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" onclick="return confirm('seguro que desea borrar?')"
                            value="Borrar">
                            </form>
                        </td>
                    </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>
@endsection
</body>

</html>