<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página no encontrada</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        :root {
            --primary-color: #6c5ce7;
            --secondary-color: #a29bfe;
            --dark-color: #2d3436;
            --light-color: #f5f6fa;
            --accent-color: #fd79a8;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, var(--light-color), #dfe6e9);
            color: var(--dark-color);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
        }
        
        .container {
            max-width: 800px;
            padding: 2rem;
        }
        
        .error-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 3rem 2rem;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        
        .error-card:hover {
            transform: translateY(-5px);
        }
        
        .error-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 8px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        }
        
        h1 {
            font-size: 6rem;
            margin: 0;
            background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            line-height: 1;
        }
        
        h2 {
            font-size: 2rem;
            margin: 1rem 0;
            color: var(--dark-color);
        }
        
        p {
            font-size: 1.2rem;
            margin: 1.5rem 0;
            line-height: 1.6;
            color: #636e72;
        }
        
        .btn {
            display: inline-block;
            text-decoration: none;
            color: white;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            padding: 12px 30px;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            margin: 1rem 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(108, 92, 231, 0.3);
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(108, 92, 231, 0.4);
            background: linear-gradient(45deg, var(--primary-color), #8479f1);
        }
        
        .btn-secondary {
            background: white;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            box-shadow: none;
        }
        
        .btn-secondary:hover {
            background: var(--primary-color);
            color: white;
        }
        
        .error-icon {
            font-size: 5rem;
            margin: 1rem 0;
            color: var(--accent-color);
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        
        .search-box {
            max-width: 400px;
            margin: 2rem auto;
            display: flex;
            border-radius: 50px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .search-input {
            flex: 1;
            padding: 0.8rem 1.5rem;
            border: none;
            font-size: 1rem;
            outline: none;
        }
        
        .search-btn {
            padding: 0 1.5rem;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .search-btn:hover {
            background: linear-gradient(45deg, var(--primary-color), #8479f1);
        }
        
        @media (max-width: 600px) {
            h1 {
                font-size: 4rem;
            }
            
            h2 {
                font-size: 1.5rem;
            }
            
            .error-card {
                padding: 2rem 1rem;
            }
            
            .btn {
                display: block;
                width: 80%;
                margin: 0.5rem auto;
            }
            
            .search-box {
                max-width: 300px;
            }
        }
    </style>
</head>
<body>
    <div class="container animate__animated animate__fadeIn">
        <div class="error-card">
            <div class="error-icon">🔍</div>
            <h1>404</h1>
            <h2>Página no encontrada</h2>
            <p>Lo sentimos, la página que estás buscando no existe o ha sido movida.</p>
            
            <div class="search-box">
                <input type="text" class="search-input" placeholder="Buscar en el sitio...">
                <button class="search-btn">Buscar</button>
            </div>
            
            <div class="actions">
                <a href="/" class="btn">Volver al inicio</a>
                <a href="/contacto" class="btn btn-secondary">Contactar soporte</a>
            </div>
        </div>
    </div>

    <script>
        
        document.querySelector('.search-btn').addEventListener('click', function() {
            const query = document.querySelector('.search-input').value.trim();
            if(query) {
                window.location.href = '/search?q=' + encodeURIComponent(query);
            }
        });
        
        
        document.querySelector('.search-input').addEventListener('keypress', function(e) {
            if(e.key === 'Enter') {
                document.querySelector('.search-btn').click();
            }
        });
    </script>
</body>
</html>