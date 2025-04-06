<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <style>
        body {
            font-family:Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        .page-container {
            display: flex;
            min-height: 100vh;
        }

        .image-section {
            flex: 1;
            background-color: #4D1C95;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .image-container {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('https://allikestore.com/cdn/shop/files/Allike_Banner_adidas_13112024.jpg?v=1731453294&width=900/api/placeholder/600/800');
            background-size: cover;
            background-position: center;
            border-radius: 10px;
        }

        .form-section {
            flex: 1;
            background-color: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
            font-size: 28px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #2c3e50;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 14px;
            border: 2px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
            font-size: 16px;
        }

        input:focus {
            border-color: #4D1C95;
            outline: none;
        }

        .primary-button {
            background-color: #4D1C95;
            color: white;
            padding: 16px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            margin-bottom: 15px;
        }

        .primary-button:hover {
            background-color: transparent;
            color: #4D1C95;
            padding: 16px 20px;
            border: 2px solid #4D1C95;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s ease;;
        }

        .secondary-button {
            background-color: transparent;
            color: #4D1C95;
            padding: 16px 20px;
            border: 2px solid #4D1C95;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .secondary-button:hover {
            background-color: #4D1C95;
            color: white;
        }

        .error {
            color: #e74c3c;
            font-size: 0.85em;
            margin-top: 5px;
            display: none;
        }

        .forgot-password {
            text-align: right;
            margin-top: -15px;
            margin-bottom: 20px;
        }

        .forgot-password a {
            color: #7f8c8d;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .forgot-password a:hover {
            color: #3498db;
        }

        @media (max-width: 768px) {
            .page-container {
                flex-direction: column;
            }

            .image-section {
                min-height: 300px;
            }

            .form-section {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="page-container">
        <div class="image-section">
            <div class="image-container"></div>
        </div>
        <div class="form-section">
            <div class="container">
                <h2>Iniciar Sesión</h2>
                <form onsubmit="validarCredenciales(); return false">
                    <div class="form-group">

                        
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="emailInput" name="email" required>
                        <div class="error" id="emailError">Por favor ingrese un correo electrónico válido</div>
                    
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" id="passwordInput" name="password" required>
                        <div class="error" id="passwordError">Por favor ingrese su contraseña</div>
                    </div>

                    <div class="forgot-password">
                        <a href="#">¿Olvidaste tu contraseña?</a>
                    </div>

                    <button type="submit"  class="primary-button">Iniciar Sesión</button>
                   <a href="{{ route('register') }}">
                   <button type="button" class="secondary-button" onclick="window.location.href='registro.html'">Crear Cuenta Nueva
                   </button>
                   </a>
              
                </form>
            </div>
        </div>
    </div>

    <script>
    function validarCredenciales() {
        let email = document.getElementById('emailInput').value;
        let password = document.getElementById('passwordInput').value;

        if (email === 'david25@gmail.com' && password === '12345') {
            // Redirige al inventario
            window.location.href = '/stock_inventario';
        } else if (email === 'david2503@gmail.com' && password === '12345') {
            // Redirige al perfil del gerente de entregas
            window.location.href = '/gerentedentregas';
        } else if (email === 'david25032@gmail.com' && password === '12345') {
            // Redirige al perfil del distribuidor
            window.location.href = '/distribuidor';
        } else if (email === 'david25033@gmail.com' && password === '12345') {
            // Redirige a ventas
            window.location.href = '/ventas';
        } else if (email === 'david2005@gmail.com' && password === '12345') {
            // Redirige a ventas
            window.location.href = '/administrador';
            //va el administrador
        } else {
            // Mostrar mensaje de error específico
            if (!['david25@gmail.com', 'david2503@gmail.com', 'david25032@gmail.com','david2005@gmail.com', 'david25033@gmail.com'].includes(email)) {
                alert('Correo electrónico incorrecto');
            } else if (password !== '12345') {
                alert('Contraseña incorrecta');
            }
        }
    }
</script>
</body>
</html>