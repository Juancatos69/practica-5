<!-- resources/views/mesas/index.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Mesas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Lista de Mesas</h1>

        <!-- Mostrar mensaje de éxito -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Botón para crear nueva mesa -->
        <a href="{{ route('mesas.create') }}" class="btn btn-primary mb-3">Crear Nueva Mesa</a>

        <!-- Tabla de mesas -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Material</th>
                    <th>Dimensiones</th>
                    <th>Estilo</th>
                    <th>Color</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mesas as $mesa)
                    <tr>
                        <td>{{ $mesa->id }}</td>
                        <td>{{ $mesa->material }}</td>
                        <td>{{ $mesa->dimensiones }}</td>
                        <td>{{ $mesa->estilo }}</td>
                        <td>{{ $mesa->color }}</td>
                        <td>
                            <!-- Botón para editar -->
                            <a href="{{ route('mesas.edit', $mesa->id) }}" class="btn btn-sm btn-warning">Editar</a>

                            <!-- Botón para eliminar (con confirmación) -->
                            <form action="{{ route('mesas.destroy', $mesa->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta mesa?');">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
