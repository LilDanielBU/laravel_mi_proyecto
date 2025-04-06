<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Feets</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Poppins:wght@400;500;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #4D1C95;
            --primary-dark: #3a146e;
            --secondary-color: #6C4AB6;
            --accent-color: #B9E0FF;
            --text-color: #2D2727;
            --light-bg: #F5F5F5;
            --card-shadow: 0 10px 20px rgba(0,0,0,0.1);
            --success-color: #4CAF50;
            --warning-color: #FF9800;
            --error-color: #F44336;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--light-bg);
            color: var(--text-color);
            line-height: 1.6;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: relative;
            z-index: 10;
        }
        
        .icon-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logo-title {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .delivery-icon {
            font-size: 1.8em;
            color: white;
            transition: all 0.3s;
        }
        
        .delivery-icon:hover {
            transform: scale(1.1);
        }
        
        .back-arrow {
            font-size: 1.5em;
            cursor: pointer;
            display: none;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            background-color: rgba(255, 255, 255, 0.2);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            opacity: 0;
            transform: translateX(-10px);
        }
        
        .back-arrow:hover {
            background-color: rgba(255, 255, 255, 0.3);
            transform: translateX(-5px) scale(1.1);
        }
        
        .back-arrow.active {
            opacity: 1;
            transform: translateX(0);
        }
        
        .back-arrow::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 2px solid rgba(255, 255, 255, 0.4);
            animation: pulse 2s infinite;
            opacity: 0;
        }
        
        @keyframes pulse {
            0% { transform: scale(0.8); opacity: 0.5; }
            70% { transform: scale(1.2); opacity: 0; }
            100% { opacity: 0; }
        }
        
        .back-arrow:hover::before {
            animation: pulse 2s infinite;
        }
        
        h1, h2, h3 {
            margin: 0;
            font-weight: 600;
        }
        
        .brand-name {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 1.5em;
            color: white;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
            letter-spacing: 1px;
            position: relative;
            padding-right: 15px;
        }
        
        .brand-name::after {
            content: "";
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 3px;
            height: 70%;
            background: linear-gradient(to bottom, transparent, white, transparent);
        }
        
        main {
            max-width: 800px;
            margin: 30px auto;
            padding: 0;
            background-color: white;
            box-shadow: var(--card-shadow);
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s;
        }
        
        main:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        /* Vista de Perfil */
        #vista-perfil {
            padding: 0;
        }
        
        .profile-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 30px;
            text-align: center;
            position: relative;
        }
        
        .profile-header h1 {
            font-size: 28px;
            margin-bottom: 10px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        
        .profile-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: white;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-size: 40px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }
        
        .profile-avatar::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.3), transparent);
            transform: translateX(-100%);
            transition: 0.5s;
        }
        
        .profile-avatar:hover::before {
            transform: translateX(100%);
        }
        
        .profile-avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }
        
        .profile-content {
            padding: 30px;
        }
        
        .profile-section {
            margin-bottom: 25px;
            animation: fadeIn 0.5s ease-out;
        }
        
        .profile-section h2 {
            font-size: 20px;
            color: var(--primary-color);
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 2px solid var(--accent-color);
            display: inline-block;
        }
        
        .profile-info {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .info-item {
            flex: 1 1 200px;
            margin-bottom: 15px;
            position: relative;
        }
        
        .info-item strong {
            display: block;
            color: var(--secondary-color);
            margin-bottom: 5px;
            font-weight: 500;
        }
        
        .info-item p {
            margin: 0;
            padding: 10px 15px;
            background-color: rgba(108, 74, 182, 0.05);
            border-radius: 8px;
            border-left: 3px solid var(--secondary-color);
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }
        
        .info-item p::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transform: translateX(-100%);
            transition: 0.5s;
        }
        
        .info-item:hover p::after {
            transform: translateX(100%);
        }
        
        .info-item:hover p {
            transform: translateX(5px);
            background-color: rgba(108, 74, 182, 0.1);
        }
        
        .role-badge {
            display: inline-block;
            padding: 3px 10px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border-radius: 50px;
            font-size: 0.9em;
            font-weight: 500;
            margin-left: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: all 0.3s;
        }
        
        .role-badge:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }
        
        .divider {
            height: 1px;
            background: linear-gradient(to right, transparent, var(--accent-color), transparent);
            margin: 25px 0;
        }
        
        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
            flex-wrap: wrap;
        }
        
        button {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            padding: 12px 25px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            box-shadow: 0 4px 10px rgba(108, 74, 182, 0.3);
            display: flex;
            align-items: center;
            gap: 8px;
            position: relative;
            overflow: hidden;
        }
        
        button::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: all 0.5s;
        }
        
        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(108, 74, 182, 0.4);
        }
        
        button:hover::before {
            left: 100%;
        }
        
        button:active {
            transform: translateY(1px);
        }
        
        .btn-logout {
            background: linear-gradient(135deg, #FF6B6B, #FF8E8E);
            box-shadow: 0 4px 10px rgba(255, 107, 107, 0.3);
        }
        
        .btn-logout:hover {
            box-shadow: 0 6px 15px rgba(255, 107, 107, 0.4);
        }
        
        /* Vista de Consultar Entregas */
        #vista-consultar {
            padding: 30px;
        }
        
        .hidden {
            display: none;
        }
        
        .input-container {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        
        select {
            padding: 12px 15px;
            font-size: 16px;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: all 0.3s;
            font-family: 'Poppins', sans-serif;
            background-image: url("data:image/svg+xml;utf8,<svg fill='%232c3e50' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/></svg>");
            background-repeat: no-repeat;
            background-position: right 8px center;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }
        
        select:focus {
            border-color: var(--secondary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(141, 114, 225, 0.2);
        }
        
        .delivery-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            transition: all 0.3s;
        }
        
        .delivery-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-left: 3px solid var(--secondary-color);
        }
        
        .delivery-card p {
            margin: 10px 0;
        }
        
        .delivery-card strong {
            color: var(--secondary-color);
        }
        
        /* Vista de Cancelación */
        #vista-cancelacion {
            padding: 30px;
        }
        
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            resize: vertical;
            min-height: 100px;
            margin-bottom: 20px;
            transition: all 0.3s;
        }
        
        textarea:focus {
            border-color: var(--secondary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(141, 114, 225, 0.2);
        }
        
        .cancel-reason {
            position: relative;
        }
        
        .cancel-reason::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s;
        }
        
        .cancel-reason:focus-within::after {
            transform: scaleX(1);
        }
        
        /* Result Container */
        .result-container {
            margin-top: 30px;
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(108, 74, 182, 0.05);
            border-left: 4px solid var(--success-color);
            animation: fadeIn 0.5s ease-out;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            transition: all 0.3s;
        }
        
        .result-container:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        }
        
        .result-title {
            font-size: 18px;
            color: var(--success-color);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            justify-content: center;
        }
        
        .result-details {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        
        .result-item {
            display: flex;
        }
        
        .result-label {
            font-weight: 500;
            min-width: 120px;
            color: var(--secondary-color);
        }
        
        /* Estilo para resultado de cancelación */
        .cancelation-result {
            border-left-color: var(--error-color);
        }
        
        .cancelation-result .result-title {
            color: var(--error-color);
        }
        
        /* Animaciones */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            40% {transform: translateY(-5px);}
            60% {transform: translateY(-3px);}
        }
        
        .bounce-animation {
            animation: bounce 1.5s infinite;
        }
        
        /* Responsive design */
        @media (max-width: 768px) {
            .profile-info {
                flex-direction: column;
                gap: 15px;
            }
            
            .button-container {
                flex-direction: column;
                gap: 15px;
            }
            
            button {
                width: 100%;
                justify-content: center;
            }
            
            .brand-name {
                font-size: 1.2em;
            }
            
            .input-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="back-arrow" id="back-arrow" onclick="retroceder()">
        <i class="fas fa-arrow-left"></i>
    </div>
    <div class="logo-title">
        <div class="delivery-icon bounce-animation">
            <i class="fas fa-motorcycle"></i>
        </div>
        <h2>Distribuidor</h2>
    </div>
    <div class="icon-wrapper">
        <span class="brand-name">Golden Feets</span>
    </div>
</header>

<!-- Vista de Perfil -->
<main id="vista-perfil">
    <div class="profile-header">
        <div class="profile-avatar">
            <i class="fas fa-user"></i>
        </div>
        <h1>PERFIL DEL DISTRIBUIDOR</h1>
    </div>
    
    <div class="profile-content">
        <div class="profile-section">
            <div class="profile-info">
                <div class="info-item">
                    <strong>Nombre</strong>
                    <p>Juan Pérez</p>
                </div>
                <div class="info-item">
                    <strong>Sexo</strong>
                    <p>Masculino</p>
                </div>
                <div class="info-item">
                    <strong>Fecha de Nacimiento</strong>
                    <p>01/01/1990</p>
                </div>
                <div class="info-item">
                    <strong>Rol</strong>
                    <p>Distribuidor <span class="role-badge">Activo</span></p>
                </div>
            </div>
        </div>
        
        <div class="divider"></div>
        
        <div class="profile-section">
            <h2>INFORMACIÓN DE CONTACTO</h2>
            <div class="profile-info">
                <div class="info-item">
                    <strong>Correo Electrónico</strong>
                    <p>juan.perez@example.com</p>
                </div>
                <div class="info-item">
                    <strong>Número Telefónico</strong>
                    <p>+34 600 123 456</p>
                </div>
                <div class="info-item">
                    <strong>Dirección</strong>
                    <p>Calle Falsa 123, Madrid, España</p>
                </div>
            </div>
        </div>
        
        <div class="button-container">
            <button onclick="navegar('vista-consultar')">
                <i class="fas fa-search"></i> Consultar Entregas
            </button>
            <a href="index.html" style="text-decoration: none;">
                <button class="btn-logout" onclick="cerrarSesion()">
                    <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                </button>
            </a>
        </div>
    </div>
</main>

<!-- Vista de Consultar Entregas -->
<main id="vista-consultar" class="hidden">
    <div style="padding: 30px;">
        <h2>CONSULTAR ENTREGA</h2>
        
        <div class="input-container">
            <select id="entrega-seleccionada">
                <option value="">Seleccione una entrega...</option>
                <option value="1">Entrega #1 - Ana Gómez</option>
                <option value="2">Entrega #2 - Luis Fernández</option>
                <option value="3">Entrega #3 - María Rodríguez</option>
            </select>
            <button onclick="buscarEntrega()"><i class="fas fa-search"></i> Buscar</button>
        </div>

        <div id="info-entrega" class="hidden">
            <div class="delivery-card">
                <p><strong>Número de entrega:</strong> <span id="entrega-numero">12345</span></p>
                <p><strong>Persona a la que se le entrega:</strong> <span id="entrega-persona">Ana Gómez</span></p>
                <p><strong>Dirección de entrega:</strong> <span id="entrega-direccion">Avenida Siempre Viva, Springfield</span></p>
                <p><strong>Número de productos:</strong> <span id="entrega-productos">5</span></p>
                <p><strong>Información de contacto:</strong> <span id="entrega-contacto">ana.gomez@example.com</span></p>
            </div>

            <div class="button-container" style="justify-content: center;">
                <button onclick="confirmarEntrega()">
                    <i class="fas fa-check-circle"></i> Confirmar Entrega
                </button>
                <button onclick="navegar('vista-cancelacion')" style="background: linear-gradient(135deg, #FF6B6B, #FF8E8E);">
                    <i class="fas fa-times-circle"></i> Cancelar Entrega
                </button>
            </div>
        </div>
    </div>
</main>

<!-- Vista de Cancelación de Entrega -->
<main id="vista-cancelacion" class="hidden">
    <div style="padding: 30px;">
        <h2>CANCELACIÓN DE ENTREGA</h2>
        
        <div class="delivery-card">
            <h3>Informar Cancelación</h3>
            <p>Por favor, indique el motivo de la cancelación:</p>
            
            <div class="cancel-reason">
                <label for="motivo">Motivo (obligatorio):</label>
                <textarea id="motivo" required placeholder="Describa el motivo de la cancelación..."></textarea>
            </div>
            
            <div class="button-container" style="justify-content: center;">
                <button onclick="cancelarEntrega()" style="background: linear-gradient(135deg, #FF6B6B, #FF8E8E);">
                    <i class="fas fa-exclamation-triangle"></i> Confirmar Cancelación
                </button>
            </div>
        </div>
    </div>
</main>

<!-- Resultado de Confirmación -->
<main id="vista-resultado" class="hidden">
    <div style="padding: 30px;">
        <div id="resultado-confirmacion" class="result-container">
            <div class="result-title">
                <i class="fas fa-check-circle"></i>
                <span>Entrega confirmada correctamente</span>
            </div>
            <div class="result-details">
                <div class="result-item">
                    <span class="result-label">Número de entrega:</span>
                    <span id="result-numero">-</span>
                </div>
                <div class="result-item">
                    <span class="result-label">Cliente:</span>
                    <span id="result-cliente">-</span>
                </div>
                <div class="result-item">
                    <span class="result-label">Distribuidor:</span>
                    <span>Juan Pérez</span>
                </div>
                <div class="result-item">
                    <span class="result-label">Fecha:</span>
                    <span id="result-fecha">-</span>
                </div>
            </div>
        </div>

        <div class="button-container" style="justify-content: center; margin-top: 30px;">
            <button onclick="navegar('vista-perfil')">
                <i class="fas fa-home"></i> Volver al Inicio
            </button>
        </div>
    </div>
</main>

<!-- Resultado de Cancelación -->
<main id="vista-resultado-cancelacion" class="hidden">
    <div style="padding: 30px;">
        <div id="resultado-cancelacion" class="result-container cancelation-result">
            <div class="result-title">
                <i class="fas fa-exclamation-triangle"></i>
                <span>Entrega cancelada correctamente</span>
            </div>
            <div class="result-details">
                <div class="result-item">
                    <span class="result-label">Número de entrega:</span>
                    <span id="result-numero-cancel">-</span>
                </div>
                <div class="result-item">
                    <span class="result-label">Cliente:</span>
                    <span id="result-cliente-cancel">-</span>
                </div>
                <div class="result-item">
                    <span class="result-label">Distribuidor:</span>
                    <span>Juan Pérez</span>
                </div>
                <div class="result-item">
                    <span class="result-label">Motivo:</span>
                    <span id="result-motivo">-</span>
                </div>
                <div class="result-item">
                    <span class="result-label">Fecha:</span>
                    <span id="result-fecha-cancel">-</span>
                </div>
            </div>
        </div>

        <div class="button-container" style="justify-content: center; margin-top: 30px;">
            <button onclick="navegar('vista-perfil')">
                <i class="fas fa-home"></i> Volver al Inicio
            </button>
        </div>
    </div>
</main>

<script>
    let historial = ['vista-perfil'];
    let datosEntregaActual = null;

    // Base de datos simulada de entregas
    const entregasDB = {
        "1": {
            numero: "001",
            persona: "Ana Gómez",
            direccion: "Avenida Siempre Viva, Springfield",
            productos: "5",
            contacto: "ana.gomez@example.com"
        },
        "2": {
            numero: "002",
            persona: "Luis Fernández",
            direccion: "Calle Principal 456, Ciudad Ejemplo",
            productos: "3",
            contacto: "luis.fernandez@example.com"
        },
        "3": {
            numero: "003",
            persona: "María Rodríguez",
            direccion: "Boulevard Central 789, Pueblo Muestra",
            productos: "2",
            contacto: "maria.rodriguez@example.com"
        }
    };

    function navegar(vista) {
        historial.push(vista);
        actualizarVistas();
    }

    function retroceder() {
        if (historial.length > 1) {
            historial.pop();
            actualizarVistas();
        }
    }

    function actualizarVistas() {
        document.querySelectorAll('main').forEach(main => main.classList.add('hidden'));
        document.getElementById(historial[historial.length - 1]).classList.remove('hidden');
        document.getElementById('back-arrow').classList.toggle('active', historial.length > 1);
    }

    function buscarEntrega() {
        const entregaSeleccionada = document.getElementById('entrega-seleccionada').value;
        
        if (entregaSeleccionada) {
            datosEntregaActual = entregasDB[entregaSeleccionada];
           
            document.getElementById('entrega-numero').textContent = datosEntregaActual.numero;
            document.getElementById('entrega-persona').textContent = datosEntregaActual.persona;
            document.getElementById('entrega-direccion').textContent = datosEntregaActual.direccion;
            document.getElementById('entrega-productos').textContent = datosEntregaActual.productos;
            document.getElementById('entrega-contacto').textContent = datosEntregaActual.contacto;
            
            document.getElementById('info-entrega').classList.remove('hidden');
        } else {
            alert("Por favor seleccione una entrega");
        }
    }

    function cerrarSesion() {
        if (confirm('¿Está seguro que desea cerrar sesión?')) {
            alert('Sesión cerrada correctamente.');
            window.location.href = "index.html";
        }
    }

    function confirmarEntrega() {
        if (!datosEntregaActual) {
            alert("Por favor seleccione una entrega primero");
            return;
        }
        
        // Actualizar los datos en la vista de resultado
        document.getElementById('result-numero').textContent = datosEntregaActual.numero;
        document.getElementById('result-cliente').textContent = datosEntregaActual.persona;
        document.getElementById('result-fecha').textContent = new Date().toLocaleString();
        
        // Navegar a la vista de resultado
        navegar('vista-resultado');
    }

    function cancelarEntrega() {
        const motivo = document.getElementById('motivo').value.trim();
        if (motivo === "") {
            alert("El motivo es obligatorio.");
            return;
        }
        
        document.getElementById('result-numero-cancel').textContent = datosEntregaActual.numero;
        document.getElementById('result-cliente-cancel').textContent = datosEntregaActual.persona;
        document.getElementById('result-motivo').textContent = motivo;
        document.getElementById('result-fecha-cancel').textContent = new Date().toLocaleString();
        
        navegar('vista-resultado-cancelacion');
    }

    actualizarVistas();
</script>
</body>
</html>