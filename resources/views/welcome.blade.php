<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="/js/bootstrap.js"></script>
    <script src="/js/jquery-3.1.1.min.js"></script>
    <title>Inicio</title>
</head>

<body class="bg-primary">

    <div class="h1 text-primary p-5 bg-white">
        Bienvenido
    </div>
    <div class="bg-primary-subtle mt-3 mb-3 pt-3 pb-3">
        <label class="d-flex justify-content-center h4 p-2">Elige tu rol:</label>
        <div class="d-flex justify-content-around m-2">
            <div class="d-grid align-items-center" style="justify-items: center;">
                <div class="d-grid align-items-center" style="justify-items: center;">
                    <h5><a href="{{ route('admins.index') }}">Administrador</a></h5>
                </div>
                <img src="/img/imgAdministrador.jpg" width="50%" class="img-thumbnail" alt="not fount img">

            </div>
            <div class="d-grid align-items-center" style="justify-items: center;">
                <div class="d-grid align-items-center" style="justify-items: center;">
                    <h5><a href="{{ route('press.indexCel') }}">Celador</a></h5>
                </div>
                <img src="/img/imgCelador.jpg" width="50%" class="img-thumbnail" alt="not fount img">
            </div>
        </div>
    </div>


    <div class="h6 text-primary p-1 bg-white d-flex justify-content-center">
        Contactenos: 321-123-1234
    </div>
</body>

</html>
