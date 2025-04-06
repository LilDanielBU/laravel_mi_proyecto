<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
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
            background-image: url('https://cdn.skatedeluxe.com/images/content/manufacturers/description/nike-sb/nike-sb-blazer-mid-ol.jpg?/api/placeholder/600/800');
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
            max-width: 500px;
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
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #2c3e50;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
            font-family: Arial, Helvetica, sans-serif;
        }

        input:focus {
            border-color: #4D1C95;
            outline: none;
        }

        select {
      width: 100%;
      padding: 12px;
      border: 2px solid #ddd;
      border-radius: 8px;
      box-sizing: border-box;
      transition: border-color 0.3s ease;
      background-color: white;
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      background-image: url("data:image/svg+xml;utf8,<svg fill='%232c3e50' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/></svg>");
      background-repeat: no-repeat;
      background-position: right 8px center;
      font-family: Helvetica;
    }

        button {
            background-color: #4D1C95;
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #F2D027;
        }

        .error {
            color: #e74c3c;
            font-size: 0.85em;
            margin-top: 5px;
            display: none;
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
                <h2>Registro de Usuario</h2>
                <form method="POST" action="{{ route('usuarios.store') }}">
    @csrf

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <div class="error" id="nombreError">Por favor ingrese un nombre válido</div>
    </div>

    <div class="form-group">
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        <div class="error" id="emailError">Por favor ingrese un correo electrónico válido</div>
    </div>

    <div class="form-group">
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>
        <div class="error" id="direccionError">Por favor ingrese una dirección válida</div>
    </div>

    <div class="form-group">
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
        <div class="error" id="fechaError">Por favor ingrese una fecha válida</div>
    </div>

    <div class="form-group">
        <label for="tipo_documento">Tipo de Documento</label>
        <select id="tipo_documento" name="tipo_documento" required>
            <option value="">Seleccione una opción</option>
            <option value="CC">CC</option>
            <option value="CE">Cédula de Extranjería</option>
            <option value="Contraseña">Contraseña</option>
        </select>
    </div>

    <div class="form-group">
        <label for="numero_documento">Número de Documento</label>
        <input type="text" id="numero_documento" name="numero_documento" required>
        <div class="error" id="numero_documentoError">Por favor ingrese un número de documento válido</div>
    </div>

    <div class="form-group">
        <label for="telefono">Número de Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" pattern="[0-9]{9}" required>
        <div class="error" id="telefonoError">Por favor ingrese un número de teléfono válido (9 dígitos)</div>
    </div>

    <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <div class="error" id="passwordError">La contraseña debe tener al menos 8 caracteres</div>
    </div>

    <button type="submit">Registrarse</button>
</form>

            </div>
        </div>
    </div>

    <script>
        
        function validarFormulario() {
            let isValid = true;
            
            // Validar nombre
            const nombre = document.getElementById('nombre');
            if (nombre.value.length < 2) {
                document.getElementById('nombreError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('nombreError').style.display = 'none';
            }

            // Validar email
            const email = document.getElementById('email');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email.value)) {
                document.getElementById('emailError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('emailError').style.display = 'none';
            }

            // Validar apellidos
            const apellidos = document.getElementById('apellidos');
            if (apellidos.value.length < 2) {
                document.getElementById('apellidosError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('apellidosError').style.display = 'none';
            }

            // Validar dirección
            const direccion = document.getElementById('direccion');
            if (direccion.value.length < 5) {
                document.getElementById('direccionError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('direccionError').style.display = 'none';
            }

            // Validar fecha
            const fecha = document.getElementById('fechaNacimiento');
            if (!fecha.value) {
                document.getElementById('fechaError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('fechaError').style.display = 'none';
            }

            // Validar teléfono
            const telefono = document.getElementById('telefono');
            if (!telefono.value.match(/^[0-9]{9}$/)) {
                document.getElementById('telefonoError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('telefonoError').style.display = 'none';
            }

            // Validar contraseña
            const password = document.getElementById('password');
            if (password.value.length < 8) {
                document.getElementById('passwordError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('passwordError').style.display = 'none';
            }

            return isValid;
        }
    </script>
</body>
</html>