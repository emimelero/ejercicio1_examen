<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Libro</title>
</head>
<body>
    @include('partials.nav')
    <div>
        <h1>Crear Libro</h1>
        <form action="{{ route('libreria.store') }}" method="POST">
            @csrf
 
            <div>
                <label for="titulo" class="form-label">Titulo:</label>
                <input type="text" id="titulo" name="titulo" class="form-control">
            </div>
            
    
            <div>
                <label for="autor" class="form-label">Autor:</label>
                <input type="text" id="autor" name="autor" class="form-control">
            </div>
            

            <div>
                <label for="editorial" class="form-label">Editorial:</label>
                <input type="text" id="editorial" name="editorial" class="form-control">
            </div>

            <div>
                <label for="foto" class="form-label">Foto:</label>
                <input type="text" id="foto" name="foto" class="form-control">
            </div>


            <div>
                <button type="submit" >Crear</button>
            </div>
        </form>

        
        
    </div>
</body>
</html>