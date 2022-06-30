<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        .back {
            background: #e1e1e1;
            width: 100%;
            position: absolute;
            top: 0;
            bottom: 0;
        }
        .div-center {
            width: 400px;
            height: 400px;
            background-color: #fff;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            max-width: 100%;
            max-height: 100%;
            overflow: auto;
            padding: 1em 2em;
            border: 2px solid #4a38a7;
            display: table;
        }
        div.content {
            display: table-cell;
            vertical-align: middle;
        }
        button{
            width: 110px;
            margin-left: 50%;
            transform: translateX(-50%);
        }
    </style>
</head>
<body>
    <div class="back">
        <div class="div-center">
            <div class="content">
                <hr>
                <h3 class="text-center" style="font-weight: bold;">Recuperar Contraseña</h3>
                <hr>
                
                <form action="{{Route('rPasswordReset')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ingrese su Email para restablecer la contraseña</label>
                        <input type="email" class="form-control" id="emailreset" name="emailreset" placeholder="Email" required>
                    </div>
                    <button type="submit" class="btn btn-primary text-center" style="background-color:#4a38a7; border: #4a38a7; text-align: center;">Enviar</button>
                    
                </form>
                <form action="{{Route('login')}}">
                    <button type="submit" class="btn btn-primary mt-3" style="background-color:#4a38a7; border: #4a38a7; text-align: center;">Cancelar</button>
                </form>
                <hr>
            </div>
        </div>
    </div>
</body>
</html>