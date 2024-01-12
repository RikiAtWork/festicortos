<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    @include('partials.nav')

    <h1>Home</h1>
    <p>Estás en la página de Home</p>
</body>
</html>