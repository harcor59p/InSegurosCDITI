<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido - InSegurosCDITI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/welcome.css">
</head>
<body>
    <div class="container">
        <br>
        <h1 style="text-align:center">In-Seguros-CDITI</h1>
        <br><br>
        <div align="center"><img src="logo.png" alt="No disponible"></div>
        <br><br>
        <a href="{{Route('register')}}" class="btn btn-secondary btn-lg btn-block" style="background-color: #4a38a7;">
            Registrarse
         </a>
        <br>
       <a href="{{Route('login')}}" class="btn btn-secondary btn-lg btn-block" style="background-color: #4a38a7;">
          Ingresar
       </a>
    </div>
</body>
</html>
