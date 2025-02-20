<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
<form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="login">Login:</label>
        <input type="text" class="form-control" name="login" id="login" />
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password" />
    </div>
    <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">

</form>
</body>
</html>