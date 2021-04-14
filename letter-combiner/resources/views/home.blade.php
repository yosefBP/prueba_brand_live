<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>

<body class="antialiased">
    <div class="card">
        <div class="card-header">
            CONBINADOR DE LETRAS
        </div>
        <div class="card-body">
            <div class="container">
                <form>
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInput">Escriba la cadena de letras</label>
                            <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ejemplo: MFJNERJNRFKV">
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Ingrese el numero de letras de la palabra</label>
                            <div class="input-group mb-2">
                                <input type="number" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>

                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-2">Calcular conbinaciones</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</body>

</html>