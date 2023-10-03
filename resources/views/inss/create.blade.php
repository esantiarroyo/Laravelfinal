<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="/js/bootstrap.js"></script>
    <script src="/js/jquery-3.1.1.min.js"></script>
    <title>Crear Instructor</title>
</head>

<body class="bg-primary">

    <x-layouts.app title="Crear nuevo Instructor" meta-description="Formulario para crear un nuevo Instructor">
    </x-layouts.app>

    <div class="h1 text-primary p-5 bg-white">
        Crear un Nuevo Instructor
    </div>
    <div class="bg-primary-subtle mt-3 mb-3 pt-3 pb-3 d-flex justify-content-center">

        <div><img src="/img/imgAdministrador.jpg" width="50%" class="img-thumbnail" alt="not fount img"></div>

        <div>
            <form action="{{ route('inss.store') }}" method="POST">
                @csrf

                @include('inss.form')
                <br><div class="d-flex justify-content-around">
                    <button type="submit" class="btn btn-primary">Enviar</button><br>
                    <a href="{{ route('inss.index') }}">Regresar</a>
                </div>
            </form><br>

        </div>

    </div>

    <div class="h6 text-primary p-1 bg-white d-flex justify-content-center">
        Contactenos: 321-123-1234
    </div>

</body>
</html>

