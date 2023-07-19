<!DOCTYPE html>
<html>
<head>
    <title>Subir Imagen</title>
</head>
<body>
    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif

    <form action="{{ route('imagen.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre"><br><br>
        <input type="file" name="imagen"><br><br>
        <input type="text" name="categoria" placeholder="Categoría"><br><br>
        <input type="text" name="genero" placeholder="Género"><br><br>
        <input type="text" name="estilo" placeholder="Estilo"><br><br>
        <input type="submit" value="Subir Imagen">
    </form>
</body>
</html>
