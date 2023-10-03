<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="/js/bootstrap.js"></script>
    <script src="/js/jquery-3.1.1.min.js"></script>
    <title>Prestamos</title>
</head>

<body class="bg-primary">

    <div class="h1 text-primary p-5 bg-white">
        Prestamos
    </div>
    <div class="bg-primary-subtle mt-3 mb-3 pt-3 pb-3 d-flex justify-content-around">
        <div >
            @foreach ($prestamos as $prestamo)
                <div style="display: flex; align-items: baseline" class="h6">
                    <h5 href="{{ route('prestamos.show', $prestamo) }}">
                            {{ $prestamo->namePres }}
                    </h5>&nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-light"><a href="{{ route('prestamos.edit', $prestamo) }}">Edit</a></button>
                    &nbsp;&nbsp;&nbsp;
                    <form action="{{ route('prestamos.destroy', $prestamo) }}" method="POST">
                        @csrf
                    </form>
                </div>
            @endforeach
        </div>

        <div>
            <a href="{{ route('press.create') }}">Prestamos</a>
        </div>
    </div>
</body>

</html>


