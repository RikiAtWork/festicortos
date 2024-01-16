<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    @include('partials.nav')
    <article class="container">
    <div class="row">
            @forelse ($libros as $libro)
                <div class="col-sm-4 mb-4">
                    <div class="card border-0 custom-card">
                        <div class="card-body">
                            <h1 class="card-title">{{$libro["titulo"]}}</h1>
                            <h5 class="card-title">{{$libro["autor"]}}</h5>
                            <br>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Adipisci, delectus. Fuga incidunt vero illo quo itaque voluptate deserunt
                            </p>
                            <a href="#" class="btn btn-primary">Detalles</a>
                        </div>
                    </div>
                </div> 
            @empty
                <p>No hay</p>
            @endforelse
        </div>
    </article>
    @include('partials.footer')
</body>
</html>