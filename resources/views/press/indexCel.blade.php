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
            @foreach ($press as $pres)
                <div style="display: flex; align-items: baseline" class="h6">
                    <table class="table table-bordered border-primary">
                        <thead>
                            <tr>
                              <th scope="col">Nombre Prestamo</th>
                              <th scope="col">Nombre Instructor</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>
                                    <h5 href="{{ route('press.show', $pres) }}">
                                    {{ $pres->namePres }}
                                    </h5>
                                </td>

                                <td>
                                    <h5 href="{{ route('press.show', $pres) }}">
                                    {{ $pres->nameIns }}
                                    </h5>
                                </td>

                                <td>
                                    <button type="button" class="btn btn-light"><a href="{{ route('press.editCel', $pres) }}">Edit</a></button>
                                </td>
                            </tr>
                          </tbody>
                      </table>
                </div>

            @endforeach
        </div>

        <div class="d-flex justify-content-around"><a href="{{ route('home') }}">Regresar</a><img src="/img/imgCelador.jpg" width="50%" class="img-thumbnail" alt="not fount img"></div>

    </div>

    <div class="h6 text-primary p-1 bg-white d-flex justify-content-center">
        Contactenos: 321-123-1234
    </div>
</body>

</html>
