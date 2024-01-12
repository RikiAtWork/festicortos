<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cortos</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('partials.nav')
    <article>
    @forelse ($cortos as $corto)
    <div class="row">
        <div class="col-sm-3 mb-3 mb-sm-0">
            <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{$corto["titulo"]}}</h3>
                <h6 class="card-title">{{$corto["director"]}}</h6>

                <p class="card-text">{{$corto["sinapsis"]}}</p>
                <a href="#" class="btn btn-primary">Detalles</a>
            </div>
         </div>
    </div>
    @empty
        <p>No hay</p>
    @endforelse

    </article>
</body>
</html>