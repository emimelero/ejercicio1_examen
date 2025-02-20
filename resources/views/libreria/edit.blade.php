<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include('partials.nav')
    <div>
        <h1>Editar fruta</h1>
        <form action="{{ route('libreria.update',$libros->id) }}" method="POST">
            @csrf
            @method('PUT')
 
            <div>
                <label for="titulo" class="form-label">Titulo:</label>
                <input type="text" id="titulo" name="titulo" class="form-control" value="{{$libros->titulo}}">
            </div>
            
    
            <div>
                <label for="autor" class="form-label">Autor:</label>
                <input type="text" id="autor" name="autor" class="form-control" value="{{$libros->autor}}">
            </div>
            

            <div>
                <label for="editorial" class="form-label">Editorial:</label>
                <input type="text" id="editorial" name="editorial" class="form-control" value="{{$libros->editorial}}">
            </div>

            <div>
                <label for="foto" class="form-label">Foto:</label>
                <input type="text" id="foto" name="foto" class="form-control" value="{{$libros->foto}}">
            </div>


            <div>
                <button type="submit" class="btn btn-success">Editar</button>
            </div>
        </form>

        
        
    </div>

    <?php

        echo "<img src=$libros->foto height='500px' width='350px'>"
    ?>


</body>
</html>
