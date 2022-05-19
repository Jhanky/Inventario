<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado</title>

</head>

<body>
 
        @extends('layouts.app')
  
        @section('content')
        <section class="section">
            <div class="section-header">
    <div class="container">
        <div class="row justify-content-center">
            <h3>Lista de Estados</h3>
            <a href="{{url('Estado/create')}}" class="btn btn-primary">Registrar nuevo estado</a>

            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Esrado</th>
                        <th>Acion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estados as $estado)
                    <tr>
                        <td>{{ $estado->id}}</td>
                        <td>{{ $estado->estado}}</td>
                        <td>
                            <form action ="{{ url('/Estado/'. $estado->id) }}" method="post">
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