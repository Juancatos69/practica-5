<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Mesa</title>
</head>
<body>
    <h1>Crear Mesa</h1>
    <form action="{{ route('mesas.store') }}" method="POST">
        @csrf
        <label for="material">Material:</label>
        <input type="text" name="material" required>
        <br>

        <label for="dimensiones">Dimensiones:</label>
        <input type="text" name="dimensiones" required>
        <br>

        <label for="estilo">Estilo:</label>
        <input type="text" name="estilo" required>
        <br>

        <label for="color">Color:</label>
        <input type="text" name="color" required>
        <br>

        <button type="submit">Crear Mesa</button>
    </form>
</body>
</html>
