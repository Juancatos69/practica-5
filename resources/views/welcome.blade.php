

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MRCARLOS - Mi Página</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #121212; 
            color: #e0e0e0; 
        }
        header {
            background-color: #1e1e1e; 
            color: #ffffff; 
            padding: 20px;
            text-align: center;
        }
        nav {
            margin: 20px 0;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav li {
            display: inline;
            margin: 0 15px;
        }
        nav a {
            color: #ffffff; 
            text-decoration: none;
            font-weight: bold;
        }
        .hero {
            background: url('https://source.unsplash.com/1600x900/?nature,water') no-repeat center center/cover;
            color: white;
            padding: 60px 20px;
            text-align: center;
            opacity: 0.8; 
        }
        .hero h2 {
            font-size: 2.5rem;
            margin: 0;
        }
        .hero p {
            font-size: 1.2rem;
            margin: 10px 0 20px;
        }
        .login {
            background: #1e1e1e; 
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(255, 255, 255, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #ffffff; 
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #444;
            border-radius: 5px;
            background-color: #333;
            color: #e0e0e0; 
        }
        .form-group input::placeholder {
            color: #aaa; 
        }
        .btn {
            background-color: #007bff; 
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 1.1rem;
        }
        .btn:hover {
            background-color: #0056b3; 
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #1e1e1e; 
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .social-icons a {
            margin: 0 10px;
            color: white;
            font-size: 1.5rem;
            transition: color 0.3s;
        }
        .social-icons a:hover {
            color: #ffc107; 
        }
    </style>
</head>
<body>
    <header>
        <h1>BIENVENIDO a MRCARLOS</h1>
    </header>
    
    <section class="hero">
        <h2>ESTUDIANTE SOLO ESO</h2>
        <p>SI DESEAS SABER MÁS DE MÍ Y SOBRE LA PÁGINA, PON TU CLAVE E INICIA SESIÓN</p>
    </section>

   
    <section class="login">
        <h2>Iniciar Sesión</h2>

        @if ($errors->any())
            <div class="error-message" style="color:red;">
                <p>{{ $errors->first() }}</p>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf 
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required placeholder="Ejemplo: correo@ejemplo.com">
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required placeholder="Tu contraseña">
            </div>
            <button type="submit" class="btn">Iniciar Sesión</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 - MRCARLOS</p>
        <p>SÍGUEME</p>
        <div class="social-icons">
            <a href="https://www.facebook.com/profile.php?id=61557377249867" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/mrcarlosfrases/?next=%2F" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.tiktok.com/@mrcarlosfrases" target="_blank"><i class="fab fa-tiktok"></i></a>
        </div>
    </footer>
</body>
</html>

