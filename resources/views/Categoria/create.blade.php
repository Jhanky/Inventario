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
                <form action="{{ url('/Categoria') }}" method="post" enctype="multipart/form-data" class="row g-3">
                @csrf
                    
                    <div class="mb-3">
                        <label for="id">Id de Categoria</label> <br>
                        <input type="text" name="id"><br>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion">Descripción</label> <br>
                        <input type="text" name="descripcion"><br>
                    </div>
                     <div>
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
    
