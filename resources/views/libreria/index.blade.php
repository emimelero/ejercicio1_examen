<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @include('partials.nav')


    <div class="container mt-5">
        <a href="{{ route('libreria.create') }}">
                        <i class="btn btn-primary btn-sm" >Añadir Libro</i> 
                    </a>
        @if (auth()->user() && auth()->user()->login == 'admin')
            
        @elseif (auth()->user())
            <h4>Bienvenido/a {{ auth()->user()->login }}</h4>
        @else
            <h4>No registrado</h4>
        @endif 

        <a href="{{ route('login')}}" class="btn btn-success btn-sm">Iniciar Sesion</a>


        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Acciones</th>
                    <!-- @if(auth()->user() && auth()->user()->login == 'admin') -->
                        
                    <!-- @endif -->
                    
                </tr>
            </thead>
            <tbody>
                @foreach($libros as $libro)
                    <tr>
                        <td>{{ $libro->titulo }}</td>
                        <td>{{ $libro->autor }}</td>
                        <td>{{ $libro->editorial }}</td>
                        <td>
                            <a href="{{ route('libreria.edit', $libro->id)}}" class="btn btn-success btn-sm">Editar</a>
                            <form action="{{ route('libreria.destroy', $libro->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                        <!-- @if(auth()->user() && auth()->user()->login == 'admin') -->
                            
                        <!-- @endif -->
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>




</body>
</html>
