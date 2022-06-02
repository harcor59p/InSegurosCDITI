<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>
    label{
        display: block;
    }
    .principal{
        text-align: center;
        margin-top: 10%;
    }
    .boton{
        margin-top: 10px
    }
</style>
</head>
<body>
    <div class="container principal" >
        <div>
            <h1>REGISTRARSE</h1>
        </div>
        <div class="row">
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