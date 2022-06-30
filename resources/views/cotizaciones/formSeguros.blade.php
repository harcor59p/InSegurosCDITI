@extends('layouts.layout')

@section('titulo', 'Cotizador Seguro Todo Riesgos - Vehiculos')

@section('main')

<head>
    <style>
        .col-md-6{
            display: inline-block;
            width: 50vw;
            margin-left: 20vw;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="{{Route('rSeguroVida')}}" method="POST">
            @csrf
            @method('GET')
            <div></div>
            <div class="col-md-6">
                <label for="inputState" class="mb-0 form-label">Número de personas que dependen de usted</label>
                <select id="inputState" class="custom-select" name="dependientes" required>
                    <option selected>Ninguna</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="+5">Mas de 5</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputState" class="mb-0 form-label">Área que desempeña en su trabajo</label>
                <select id="inputState" class="custom-select" name="trabajo" required>
                <option selected>Seleccione...</option>
                <option value="Dir">• Dirección</option>
                <option value="RecHum">• Recursos Humanos</option>
                <option value="Produc">• Producción</option>
                <option value="TcCm">• Tecnologia o Comunicaciones</option>
                <option value="FnCon">• Finanzas o Contabilidad</option>
                <option value="Vts">• Ventas</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="mb-0 form-label">Ingresos neto Anual (Sin puntos ni comas)</label>
                <input type="number" class="form-control" id="ingresos" name="ingresos" required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="mb-0 form-label">Estado de salud</label>
                <select id="inputState" class="custom-select" name="salud" required>
                <option selected>Seleccione...</option>
                <option value="Mal">•	Malo</option>
                <option value="Reg">•	Regular</option>
                <option value="Bue">•	Bueno</option>
                <option value="Exc">•	Excelente</option>
                </select>
            </div>
            <div class="d-grid gap- col-md-3 mx-auto mt-4">
                <button class="btn btn-primary" type="submit" style="background-color: #4a38a7; border: #fff; font-weight: bold;">Consulta tu Seguro de Vida</button>
            </div>
        </form>

    </div>
</body>
</html>

@endsection