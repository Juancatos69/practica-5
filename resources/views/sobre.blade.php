
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>MR CARLOS - Sobre Mí</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1c1c1c;
            color: #ffffff; 
        }
        header {
            background-color: #333333; 
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
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
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #ffc107; 
        }
        .hero {
            background: url('https://source.unsplash.com/1600x900/?nature,people') no-repeat center center/cover;
            color: white;
            padding: 60px 20px;
            text-align: center;
            border-bottom: 5px solid #333333; 
        }
        .hero h2 {
            font-size: 2.5rem;
            margin: 0;
        }
        .hero p {
            font-size: 1.2rem;
            margin: 10px 0 20px;
            font-weight: 300; 
        }
        .video-info, .mission, .team {
            max-width: 800px;
            margin: 20px auto;
            background: #2c2c2c; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s;
        }
        .video-info:hover, .mission:hover, .team:hover {
            transform: translateY(-5px); 
        }
        .video-container {
            margin-top: 20px;
            text-align: center; 
        }
        .team-member {
            margin-bottom: 15px;
        }
        .team-member h3 {
            margin: 0;
            color: #ffc107;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #333333; 
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);
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
        <h1>MRCARLOS</h1>
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="{{url('/index')}}">crud</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h2>Conóceme Mejor</h2>
        <p>Soy editor de video y un aspirante a desarrollador.</p>
    </section>

    <section class="video-info">
        <h2>Contenido Inspirador</h2>
        <p>Este video de Mr. Beast me inspira por su dedicación y esfuerzo.</p>
        <div class="video-container">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/U_LlX4t0A9I" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <section class="mission">
        <h2>Mi Misión</h2>
        <p>Ofrezco mis servicios como editor de video, mejorando continuamente mis habilidades.</p>
    </section>

    <section class="team">
        <h2>Herramientas que Uso</h2>
        <div class="team-member">
            <h3>CapCut</h3>
            <p>Utilizo CapCut para crear y editar videos para TikTok.</p>
        </div>
        <div class="team-member">
            <h3>Java</h3>
            <p>Uso Java para el desarrollo de aplicaciones simples.</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 - MRCARLOS</p>
        <p>Sígueme en redes sociales:</p>
        <div class="social-icons">
            <a href="https://www.facebook.com/profile.php?id=61557377249867" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/mrcarlosfrases/?next=%2F" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.tiktok.com/@mrcarlosfrases" target="_blank"><i class="fab fa-tiktok"></i></a>
        </div>
    </footer>
</body>
</html>
