<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>In-Seguros-CDITI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <img src="/img/logoRegister.jpeg" alt="">
</head>
<body>
    <div class="container principal" >
        <div>
            <h1>REGISTRARSE</h1>
        </div>
        <div class="">
            <div class="column">
                <form action="/register" method="POST">
                    @csrf
                    <div>
                    <label for="name">Nombre</label>
                    <input type="text" name="name">
                    </div>  
                    <div>
                        <label for="email">Email</label>
                    <input type="email" name="email">
                    </div> 
                    <div>
                    <label for="password">Contraseña</label>
                    <input type="password" name="password">
                    </div> 
                    <div>
                        <label for="password_confirmation">Confirmar Contraseña</label>
                    <input type="password" name="password_confirmation">
                    </div>
                    <div class="boton">
                        <input type="submit" value="registrarse">
                    </div>
                    
                </form>
            </div>
        </div>
        </div>
</body>
</html>