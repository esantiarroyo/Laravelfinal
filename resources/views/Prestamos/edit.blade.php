<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="/js/bootstrap.js"></script>
    <script src="/js/jquery-3.1.1.min.js"></script>
    <title>Modificar Prestamo</title>
</head>

<body class="bg-primary">

    <x-layouts.app :title="$pres->name" :meta-description="$pres->name">
    </x-layouts.app>

    <div class="h1 text-primary p-5 bg-white">
        Modificar Prstamo
    </div>
    <div class="bg-primary-subtle mt-3 mb-3 pt-3 pb-3 d-flex justify-content-around">
        <div>
            <form action="{{ route('press.update', $pres) }}" method="POST">
                @csrf @method('PATCH')

                @include('press.form')

                <br><div class="d-flex justify-content-around">
                    <button type="submit" class="btn btn-primary">Enviar</button><br>
                    <a href="{{ route('press.index') }}">Regresar</a>
                </div>
            </form><br>

        </div>

    </div>
</body>
</html>
