
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
  
    @section('content')
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
   
        <div class="container border border-primary">
            <div class="row justify-content-center">
                <form action="{{ url('/Producto') }}" method="post" enctype="multipart/form-data" class="row g-3">
                @csrf
                    
                    <div class="mb-3">
                        <label for="id">Id de Producto</label> <br>
                        <input type="text" name="id"><br>
                    </div>

                    <div class="mb-3">
                        <label for="nombre">Nombre</label><br>
                        <input type="text" name="nombre"><br>
                    </div>

                    <div class="mb-3">
                        <label for="precio">Precio</label><br>
                        <input type="text" name="precio"><br>
                    </div>

                    <div class="mb-3">
                        <label for="stock">Stock</label><br>
                        <input type="text" name="stock"><br>
                    </div>
        
                    <div class="mb-3">
                        <label for="id_categoria">Categoria</label><br>
                        <select name="id_categoria">
                            <option select>Selecinar categoria</option>
                            @foreach ($Productos as $Producto)
                            <option value="$Productos->id"> {{ $Producto->id_categoria}} </option>
                            @endforeach
                          </select> <br>
                    </div>


                    <div class="mb-3">
                        <label for="id_categoria">Estado</label><br>
                        <select name="id_categoria">
                            <option select>Selecinar estado</option>
                            @foreach ($Productos as $Producto)
                            <option value="$Productos->id"> {{ $Producto->id_estado}} </option>
                            @endforeach
                          </select> <br>
                    </div>
                    
                    <input type="submit" value="Guardar" class="btn btn-primary"><br>
                    </form>
        </div>
        </div>
    </div>
</div>
    </div>
</section>
@endsection
</body>
</html>
