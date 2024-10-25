<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mesa</title>
</head>
<body>
    <div class="container">
        <!-- resources/views/mesas/edit.blade.php -->

<h2>Editar Mesa</h2>

<form action="{{ route('mesas.update', $mesa->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="material">Material:</label>
    <input type="text" id="material" name="material" value="{{ $mesa->material }}" required>

    <label for="dimensiones">Dimensiones:</label>
    <input type="text" id="dimensiones" name="dimensiones" value="{{ $mesa->dimensiones }}" required>

    <label for="estilo">Estilo:</label>
    <input type="text" id="estilo" name="estilo" value="{{ $mesa->estilo }}" required>

    <label for="color">Color:</label>
    <input type="text" id="color" name="color" value="{{ $mesa->color }}" required>

    <button type="submit">Actualizar Mesa</button>
</form>

    </div>
</body>
</html>
