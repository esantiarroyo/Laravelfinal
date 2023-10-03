<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="/js/bootstrap.js"></script>
    <script src="/js/jquery-3.1.1.min.js"></script>
    <title>Celadores</title>
</head>

<body class="bg-primary">

    <x-layouts.app
    title="Contact"
    meta-description="Contact meta description">
    </x-layouts.app>

    <div class="h1 text-primary p-5 bg-white">
        Celadores
    </div>
    <div class="bg-primary-subtle mt-3 mb-3 pt-3 pb-3 d-flex justify-content-center">

        <div><img src="/img/imgAdministrador.jpg" width="50%" class="img-thumbnail" alt="not fount img"></div>

        <div class="m-2">

            @foreach ($cels as $cel)
            <div style="display: flex; align-items: baseline" class="h6">
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                          <th scope="col">Nombre Celador</th>
                          <th scope="col"></th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>
                                <h5 href="{{ route('cels.show', $cel) }}">
                                {{ $cel->name }}
                                </h5>
                            </td>

                            <td>
                                <button type="button" class="btn btn-light"><a href="{{ route('cels.edit', $cel) }}">Edit</a></button>
                            </td>

                            <td>
                                <form action="{{ route('cels.destroy', $cel) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                      </tbody>
                  </table>
            </div>
            @endforeach
        </div>

        <div>
            <a href="{{ route('cels.create') }}">Crear nuevo Celador</a>
        </div>
    </div>

    <div class="h6 text-primary p-1 bg-white d-flex justify-content-center">
        Contactenos: 321-123-1234
    </div>
</body>

</html>



