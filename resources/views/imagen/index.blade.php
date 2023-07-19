<!DOCTYPE html>
<html>
<head>
    <title>Imágenes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" src="../app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="contain" style='display: grid;grid-template-columns: repeat(3, 1fr);grid-template-rows: repeat(4, 1fr);gap: 0px 0px;grid-auto-flow: row;grid-template-areas:". . ."". . ."". . ."". . ."; width: 80%; '>
            @foreach ($imagenes as $imagen)
            <div id="{{ $imagen->id }}" class="">
                <div class="">
                    <div><img src="{{ asset('images/' . $imagen->imagen) }}" alt="{{ $imagen->id }}" class="img-fluid" style="max-height: 75px; max-width: 75px; display: block;"></div>
                </div>
                <div class="">
                    <div>{{ $imagen->nombre }}</div>
                </div>
                <div class="">
                    <div>{{ $imagen->categoria }}</div>
                </div>
                <div class="">
                    <div>{{ $imagen->genero }}</div>
                </div>
            </div>
            @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
