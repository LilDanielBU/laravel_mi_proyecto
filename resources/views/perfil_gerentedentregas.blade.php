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
            --primary-color: #6b46c1;
            --primary-dark: #553c9a;
            --secondary-color: #805ad5;
            --accent-color: #B9E0FF;
            --text-color: #2D2727;
            --light-bg: #F5F5F5;
            --card-shadow: 0 10px 20px rgba(0,0,0,0.1);
            --success-color: #4CAF50;
            --warning-color: #FF9800;
            --error-color: #F44336;
            --golden-color: #FFD700;
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
        
        .icon {
            font-size: 1.8em;
            color: white; 
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
            background-color: rgba(107, 70, 193, 0.05);
            border-radius: 8px;
            border-left: 3px solid var(--secondary-color);
            transition: all 0.3s;
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
            box-shadow: 0 4px 10px rgba(107, 70, 193, 0.3);
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
            box-shadow: 0 6px 15px rgba(107, 70, 193, 0.4);
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
        
        .btn-secondary {
            background: linear-gradient(135deg, #4a5568, #718096);
            box-shadow: 0 4px 10px rgba(74, 85, 104, 0.3);
        }
        
        .btn-secondary:hover {
            box-shadow: 0 6px 15px rgba(74, 85, 104, 0.4);
        }
        
        .btn-success {
            background: linear-gradient(135deg, var(--success-color), #66BB6A);
            box-shadow: 0 4px 10px rgba(76, 175, 80, 0.3);
        }
        
        .btn-success:hover {
            box-shadow: 0 6px 15px rgba(76, 175, 80, 0.4);
        }
        
        .btn-danger {
            background: linear-gradient(135deg, var(--error-color), #EF5350);
            box-shadow: 0 4px 10px rgba(244, 67, 54, 0.3);
        }
        
        .btn-danger:hover {
            box-shadow: 0 6px 15px rgba(244, 67, 54, 0.4);
        }
        
        .hidden {
            display: none;
        }
        
        .input-container {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        
        input, select, textarea {
            padding: 12px 15px;
            font-size: 16px;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: border 0.3s;
            font-family: 'Poppins', sans-serif;
        }
        
        input:focus, select:focus, textarea:focus {
            border-color: var(--secondary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(128, 90, 213, 0.2);
        }
        
        .table-container {
            margin-top: 20px;
            overflow-x: auto;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        
        th {
            background-color: var(--primary-color);
            color: white;
            font-weight: 500;
        }
        
        tr:hover {
            background-color: rgba(107, 70, 193, 0.05);
        }
        
        .confirmation-section {
            margin-top: 20px;
            text-align: center;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        

        .info-item p {
            transition: all 0.3s;
        }
        
        .info-item:hover p {
            transform: translateX(5px);
            background-color: rgba(107, 70, 193, 0.1);
        }
        

        .confirmation-modal {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
        }
        
        .confirmation-modal.active {
            opacity: 1;
            visibility: visible;
        }
        
        .modal-content {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            transform: translateY(-20px);
            transition: transform 0.3s;
            background: linear-gradient(to bottom right, white, #f9f5ff);
        }
        
        .confirmation-modal.active .modal-content {
            transform: translateY(0);
        }
        
        .modal-title {
            font-size: 22px;
            margin-bottom: 20px;
            color: var(--primary-color);
            text-align: center;
            font-weight: 600;
        }
        
        .modal-message {
            margin-bottom: 25px;
            line-height: 1.6;
            text-align: center;
        }
        
        .modal-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        
        .modal-btn {
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .modal-btn-confirm {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            box-shadow: 0 4px 10px rgba(107, 70, 193, 0.3);
        }
        
        .modal-btn-confirm:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(107, 70, 193, 0.4);
        }
        
        .modal-btn-cancel {
            background: white;
            color: var(--text-color);
            border: 1px solid #ddd;
        }
        
        .modal-btn-cancel:hover {
            background-color: #f5f5f5;
        }
        
        .modal-btn:hover {
            transform: translateY(-2px);
        }
        

        .result-container {
            margin-top: 30px;
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(107, 70, 193, 0.05);
            border-left: 4px solid var(--success-color);
            animation: fadeIn 0.5s ease-out;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
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
        
        .cancelation-result {
            border-left-color: var(--error-color);
        }
        
        .cancelation-result .result-title {
            color: var(--error-color);
        }
        

        .specific-delivery {
            margin-top: 20px;
            padding: 20px;
            border-radius: 8px;
            background-color: rgba(107, 70, 193, 0.05);
            border-left: 4px solid var(--secondary-color);
            animation: fadeIn 0.5s ease-out;
        }
        
        .specific-delivery h3 {
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .delivery-info {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .delivery-item {
            flex: 1 1 200px;
        }
        
        .delivery-item strong {
            display: block;
            color: var(--secondary-color);
            margin-bottom: 5px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--secondary-color);
            font-weight: 500;
        }
        
        .action-buttons {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
        }
        
        .action-buttons button {
            padding: 8px 15px;
            font-size: 14px;
        }
        
        .distributor-card {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            border-left: 4px solid var(--secondary-color);
            transition: all 0.3s;
        }
        
        .distributor-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.1);
        }
        
        .distributor-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .distributor-name {
            font-size: 18px;
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .distributor-details {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .detail-item {
            flex: 1 1 200px;
        }
        
        .detail-item strong {
            display: block;
            color: var(--secondary-color);
            margin-bottom: 5px;
            font-size: 14px;
        }
        
        .detail-item p {
            margin: 0;
            font-size: 15px;
        }
        
        .empty-state {
            text-align: center;
            padding: 40px 20px;
            color: var(--secondary-color);
        }
        
        .empty-state i {
            font-size: 50px;
            margin-bottom: 20px;
            color: var(--accent-color);
        }
        
        .empty-state h3 {
            margin-bottom: 10px;
        }
        
        .empty-state p {
            margin-bottom: 20px;
        }
        
        .form-section {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }
        
        .form-section h3 {
            color: var(--primary-color);
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--accent-color);
        }
        
        .two-columns {
            display: flex;
            gap: 20px;
        }
        
        .two-columns > div {
            flex: 1;
        }
        
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
            
            .modal-buttons {
                flex-direction: column;
            }
            
            .modal-btn {
                width: 100%;
                justify-content: center;
            }
            
            .brand-name {
                font-size: 1.2em;
            }
            
            .two-columns {
                flex-direction: column;
                gap: 0;
            }
            
            .distributor-details {
                flex-direction: column;
                gap: 10px;
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
        <div class="icon"><i class="fas fa-shipping-fast"></i></div>
        <h2>Gerente de Entregas</h2>
    </div>
    <div class="icon-wrapper">
        <span class="brand-name">Golden Feets</span>
    </div>
</header>

<main id="vista-perfil">
    <div class="profile-header">
        <div class="profile-avatar">
            <i class="fas fa-user-tie"></i>
        </div>
        <h1>PERFIL DEL GERENTE DE ENTREGAS</h1>
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
                    <p>15/05/1985</p>
                </div>
                <div class="info-item">
                    <strong>Rol</strong>
                    <p>Gerente de Entregas</p>
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
                    <p>+1234567890</p>
                </div>
                <div class="info-item">
                    <strong>Dirección</strong>
                    <p>Calle Falsa 123, Ciudad Ejemplo</p>
                </div>
            </div>
        </div>
        
        <div class="button-container">
            <button onclick="navegar('vista-consultar')">
                <i class="fas fa-search"></i> Consultar Entregas
            </button>
            <button onclick="navegar('vista-distribuidores')">
                <i class="fas fa-truck"></i> Gestión de Distribuidores
            </button>
            <a href="index.html" style="text-decoration: none;">
                <button class="btn-logout" onclick="cerrarSesion()">
                    <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                </button>
            </a>
        </div>
    </div>
</main>


<main id="vista-consultar" class="hidden">
    <div style="padding: 30px;">
        <h2>CONSULTAR ENTREGAS</h2>
        <div class="input-container">
            <input type="text" id="numero-entrega" placeholder="Número de entrega">
            <button onclick="buscarEntregaEspecifica()"><i class="fas fa-search"></i> Buscar</button>
        </div>

        <div id="entrega-especifica" class="specific-delivery hidden">
            <h3>Información de la Entrega</h3>
            <div class="delivery-info">
                <div class="delivery-item">
                    <strong>Número de Entrega</strong>
                    <p id="entrega-numero">-</p>
                </div>
                <div class="delivery-item">
                    <strong>Persona a la que se le Entrega </strong>
                    <p id="entrega-persona">-</p>
                </div>
                <div class="delivery-item">
                    <strong>Dirección de Entrega</strong>
                    <p id="entrega-direccion">-</p>
                </div>
                <div class="delivery-item">
                    <strong>Número de Productos</strong>
                    <p id="entrega-productos">-</p>
                </div>
                <div class="delivery-item">
                    <strong>Información de Contacto</strong>
                    <p id="entrega-contacto">-</p>
                </div>
            </div>
        </div>

        <div class="input-container">
            <select id="filtro-entregas">
                <option value="todas">Todas las entregas</option>
                <option value="recientes">Entregas recientes</option>
                <option value="semana">Última semana</option>
                <option value="mes">Último mes</option>
            </select>
            <button onclick="buscarEntregas()"><i class="fas fa-filter"></i> Buscar</button>
        </div>

        <div class="table-container hidden" id="tabla-entregas">
            <table id="entregas-table">
                <thead>
                    <tr>
                        <th>Número de Entrega</th>
                        <th>Persona que Entregó</th>
                        <th>Dirección de Entrega</th>
                        <th>Número de Productos</th>
                        <th>Información de Contacto</th>
                    </tr>
                </thead>
                <tbody id="entregas-body">
              
                </tbody>
            </table>
        </div>

        <div class="button-container" style="justify-content: flex-start; margin-top: 30px;">
            <button onclick="navegar('vista-cancelar')"><i class="fas fa-times-circle"></i> Cancelar Entrega</button>
            <button onclick="navegar('vista-distribuidor')"><i class="fas fa-truck"></i> Asignar Distribuidor</button>
        </div>
    </div>
</main>

<main id="vista-distribuidor" class="hidden">
    <div style="padding: 30px;">
        <h2>Asignar Distribuidor</h2>
        <div class="input-container">
            <select id="entrega-distribuidor">
                <option value="">Seleccionar Entrega</option>
            
            </select>
        </div>
        <div class="input-container">
            <select id="distribuidor-elegido">
                <option value="">Seleccionar Distribuidor</option>
           
            </select>
        </div>
        <div class="confirmation-section">
            <button onclick="mostrarConfirmacionDistribuidor()"><i class="fas fa-check-circle"></i> Confirmar Asignación</button>
        </div>
        

        <div id="resultado-asignacion" class="result-container hidden">
            <div class="result-title">
                <i class="fas fa-check-circle"></i>
                <span>Distribuidor asignado correctamente</span>
            </div>
            <div class="result-details">
                <div class="result-item">
                    <span class="result-label">Número de entrega:</span>
                    <span id="result-entrega-dist">-</span>
                </div>
                <div class="result-item">
                    <span class="result-label">Distribuidor:</span>
                    <span id="result-distribuidor">-</span>
                </div>
                <div class="result-item">
                    <span class="result-label">Fecha:</span>
                    <span id="result-fecha-dist">-</span>
                </div>
            </div>
        </div>
    </div>
</main>

<main id="vista-cancelar" class="hidden">
    <div style="padding: 30px;">
        <h2>Cancelar Entrega</h2>
        <div class="input-container">
            <select id="entrega-cancelar">
                <option value="">Seleccionar Entrega</option>
                <!-- Las opciones se cargarán dinámicamente -->
            </select>
        </div>
        <div class="input-container">
            <select id="razon-cancelacion">
                <option value="">Razón de Cancelación</option>
                <option value="error">Error en la dirección</option>
                <option value="cliente">Solicitud del cliente</option>
                <option value="producto">Problemas con el producto</option>
                <option value="otra">Otra razón</option>
            </select>
        </div>
        <div class="confirmation-section">
            <button onclick="mostrarConfirmacionCancelacion()"><i class="fas fa-exclamation-triangle"></i> Confirmar Cancelación</button>
        </div>
        

        <div id="resultado-cancelacion" class="result-container cancelation-result hidden">
            <div class="result-title">
                <i class="fas fa-exclamation-triangle"></i>
                <span>Entrega cancelada correctamente</span>
            </div>
            <div class="result-details">
                <div class="result-item">
                    <span class="result-label">Número de entrega:</span>
                    <span id="result-entrega-cancel">-</span>
                </div>
                <div class="result-item">
                    <span class="result-label">Razón:</span>
                    <span id="result-razon">-</span>
                </div>
                <div class="result-item">
                    <span class="result-label">Fecha:</span>
                    <span id="result-fecha-cancel">-</span>
                </div>
            </div>
        </div>
    </div>
</main>

<main id="vista-distribuidores" class="hidden">
    <div style="padding: 30px;">
        <h2>Gestión de Distribuidores</h2>
        
        <div class="form-section">
            <h3>Agregar Nuevo Distribuidor</h3>
            <form id="form-distribuidor">
                <div class="two-columns">
                    <div>
                        <div class="form-group">
                            <label for="nombre-distribuidor">Nombre Completo</label>
                            <input type="text" id="nombre-distribuidor" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono-distribuidor">Teléfono</label>
                            <input type="tel" id="telefono-distribuidor" required>
                        </div>
                        <div class="form-group">
                            <label for="email-distribuidor">Correo Electrónico</label>
                            <input type="email" id="email-distribuidor" required>
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <label for="direccion-distribuidor">Dirección</label>
                            <input type="text" id="direccion-distribuidor" required>
                        </div>
                        <div class="form-group">
                            <label for="vehiculo-distribuidor">Tipo de Vehículo</label>
                            <select id="vehiculo-distribuidor" required>
                                <option value="">Seleccionar</option>
                                <option value="moto">Motocicleta</option>
                                <option value="auto">Automóvil</option>
                                <option value="camioneta">Camioneta</option>
                                <option value="bicicleta">Bicicleta</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="placa-distribuidor">Placa/Identificación Vehículo</label>
                            <input type="text" id="placa-distribuidor">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="notas-distribuidor">Notas Adicionales</label>
                    <textarea id="notas-distribuidor" rows="3"></textarea>
                </div>
                <div class="button-container" style="justify-content: flex-end; margin-top: 20px;">
                    <button type="button" class="btn-secondary" onclick="limpiarFormularioDistribuidor()">
                        <i class="fas fa-eraser"></i> Limpiar
                    </button>
                    <button type="button" class="btn-success" onclick="agregarDistribuidor()">
                        <i class="fas fa-save"></i> Guardar Distribuidor
                    </button>
                </div>
            </form>
        </div>
        
        <div class="form-section">
            <h3>Lista de Distribuidores</h3>
            <div id="lista-distribuidores">
              
                <div class="empty-state">
                    <i class="fas fa-truck-loading"></i>
                    <h3>No hay distribuidores registrados</h3>
                    <p>Agrega tu primer distribuidor usando el formulario superior</p>
                </div>
            </div>
        </div>
    </div>
</main>


<div id="confirmation-modal" class="confirmation-modal">
    <div class="modal-content">
        <h3 class="modal-title" id="modal-title">Confirmar acción</h3>
        <p class="modal-message" id="modal-message">¿Está seguro que desea realizar esta acción?</p>
        <div class="modal-buttons">
            <button class="modal-btn modal-btn-cancel" onclick="cerrarModal()">
                <i class="fas fa-times"></i> Cancelar
            </button>
            <button class="modal-btn modal-btn-confirm" onclick="confirmarAccion()">
                <i class="fas fa-check"></i> Confirmar
            </button>
        </div>
    </div>
</div>

<script>
  
    let historial = ['vista-perfil'];
    let accionActual = null;
    let datosAccion = {};
    let distribuidores = [
        {
            id: 'dist1',
            nombre: 'Carlos Martínez',
            telefono: '+1234567890',
            email: 'carlos@example.com',
            direccion: 'Calle Principal 123',
            vehiculo: 'moto',
            placa: 'MOT-123',
            notas: 'Experiencia en entregas rápidas',
            fechaRegistro: '2023-05-15'
        },
        {
            id: 'dist2',
            nombre: 'Ana Rodríguez',
            telefono: '+9876543210',
            email: 'ana@example.com',
            direccion: 'Avenida Central 456',
            vehiculo: 'auto',
            placa: 'AUT-456',
            notas: 'Especialista en paquetes frágiles',
            fechaRegistro: '2023-06-20'
        },
        {
            id: 'dist3',
            nombre: 'Luis Fernández',
            telefono: '+4561237890',
            email: 'luis@example.com',
            direccion: 'Boulevard Norte 789',
            vehiculo: 'camioneta',
            placa: 'CAM-789',
            notas: 'Capacidad para paquetes grandes',
            fechaRegistro: '2023-07-10'
        }
    ];

  
    let entregasDB = {
        "001": {
            persona: "Juan López",
            direccion: "Calle A 123",
            productos: "5",
            contacto: "+123456789",
            estado: "activa"
        },
        "002": {
            persona: "Maria García",
            direccion: "Avenida B 456",
            productos: "3",
            contacto: "+987654321",
            estado: "activa"
        },
        "003": {
            persona: "Carlos Martínez",
            direccion: "Boulevard C 789",
            productos: "2",
            contacto: "+456123789",
            estado: "activa"
        }
    };

   
    document.addEventListener('DOMContentLoaded', function() {
        actualizarVistas();
        actualizarSelectoresDistribuidores();
        renderizarListaDistribuidores();
        cargarEntregasEnSelectores();
        renderizarTablaEntregas();
    });

    // Funciones de navegación
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
        

        const vistaActual = historial[historial.length - 1];
        document.getElementById(vistaActual).classList.remove('hidden');
        

        document.getElementById('back-arrow').classList.toggle('active', historial.length > 1);
        

        document.getElementById('resultado-asignacion').classList.add('hidden');
        document.getElementById('resultado-cancelacion').classList.add('hidden');
        document.getElementById('entrega-especifica').classList.add('hidden');
    }


    function buscarEntregas() {
        document.getElementById('tabla-entregas').classList.remove('hidden');
    }

    function buscarEntregaEspecifica() {
        const numeroEntrega = document.getElementById('numero-entrega').value.trim();
        const entregaEspecifica = document.getElementById('entrega-especifica');
        
        if (numeroEntrega) {
            if (entregasDB[numeroEntrega] && entregasDB[numeroEntrega].estado === "activa") {
         
                document.getElementById('entrega-numero').textContent = numeroEntrega;
                document.getElementById('entrega-persona').textContent = entregasDB[numeroEntrega].persona;
                document.getElementById('entrega-direccion').textContent = entregasDB[numeroEntrega].direccion;
                document.getElementById('entrega-productos').textContent = entregasDB[numeroEntrega].productos;
                document.getElementById('entrega-contacto').textContent = entregasDB[numeroEntrega].contacto;
                
                entregaEspecifica.classList.remove('hidden');
                document.getElementById('tabla-entregas').classList.add('hidden');
            } else {
                alert(`No se encontró la entrega #${numeroEntrega} o ha sido cancelada`);
                entregaEspecifica.classList.add('hidden');
                document.getElementById('tabla-entregas').classList.remove('hidden');
            }
        } else {
            alert("Por favor ingrese un número de entrega");
            entregaEspecifica.classList.add('hidden');
            document.getElementById('tabla-entregas').classList.remove('hidden');
        }
    }

    function cargarEntregasEnSelectores() {
        const selectAsignacion = document.getElementById('entrega-distribuidor');
        const selectCancelacion = document.getElementById('entrega-cancelar');
        
    
        [selectAsignacion, selectCancelacion].forEach(select => {
            while (select.options.length > 1) {
                select.remove(1);
            }
        });
        
       
        Object.keys(entregasDB).forEach(key => {
            if (entregasDB[key].estado === "activa") {
                const entrega = entregasDB[key];
                const optionText = `${key} - ${entrega.persona}`;
           
                const optionAsignacion = document.createElement('option');
                optionAsignacion.value = key;
                optionAsignacion.textContent = optionText;
                selectAsignacion.appendChild(optionAsignacion);
                
              
                const optionCancelacion = document.createElement('option');
                optionCancelacion.value = key;
                optionCancelacion.textContent = optionText;
                selectCancelacion.appendChild(optionCancelacion);
            }
        });
    }

    function renderizarTablaEntregas() {
        const tbody = document.getElementById('entregas-body');
        tbody.innerHTML = '';
        

        Object.keys(entregasDB).forEach(key => {
            if (entregasDB[key].estado === "activa") {
                const entrega = entregasDB[key];
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${key}</td>
                    <td>${entrega.persona}</td>
                    <td>${entrega.direccion}</td>
                    <td>${entrega.productos}</td>
                    <td>${entrega.contacto}</td>
                `;
                tbody.appendChild(row);
            }
        });
    }


    function obtenerTipoVehiculo(codigo) {
        const tipos = {
            'moto': 'Motocicleta',
            'auto': 'Automóvil',
            'camioneta': 'Camioneta',
            'bicicleta': 'Bicicleta'
        };
        return tipos[codigo] || codigo;
    }

    function actualizarSelectoresDistribuidores() {
      
        const selectAsignacion = document.getElementById('distribuidor-elegido');
        
      
        [selectAsignacion].forEach(select => {
          
            const selectedValue = select.value;
            
      
            while (select.options.length > 1) {
                select.remove(1);
            }
            
      
            distribuidores.forEach(dist => {
                const option = document.createElement('option');
                option.value = dist.id;
                option.textContent = `${dist.nombre} (${obtenerTipoVehiculo(dist.vehiculo)})`;
                select.appendChild(option);
            });
   
            if (selectedValue && distribuidores.some(d => d.id === selectedValue)) {
                select.value = selectedValue;
            }
        });
    }

    function renderizarListaDistribuidores() {
        const contenedor = document.getElementById('lista-distribuidores');
        
        if (distribuidores.length === 0) {
            contenedor.innerHTML = `
                <div class="empty-state">
                    <i class="fas fa-truck-loading"></i>
                    <h3>No hay distribuidores registrados</h3>
                    <p>Agrega tu primer distribuidor usando el formulario superior</p>
                </div>
            `;
            return;
        }
        
        contenedor.innerHTML = '';
        
        distribuidores.forEach(dist => {
            const card = document.createElement('div');
            card.className = 'distributor-card';
            card.innerHTML = `
                <div class="distributor-header">
                    <div class="distributor-name">${dist.nombre}</div>
                    <div class="action-buttons">
                        <button class="btn-danger" onclick="mostrarConfirmacionEliminarDistribuidor('${dist.id}')">
                            <i class="fas fa-trash-alt"></i> Eliminar
                        </button>
                    </div>
                </div>
                <div class="distributor-details">
                    <div class="detail-item">
                        <strong>Contacto</strong>
                        <p>${dist.telefono} | ${dist.email}</p>
                    </div>
                    <div class="detail-item">
                        <strong>Dirección</strong>
                        <p>${dist.direccion}</p>
                    </div>
                    <div class="detail-item">
                        <strong>Vehículo</strong>
                        <p>${obtenerTipoVehiculo(dist.vehiculo)} ${dist.placa ? `(${dist.placa})` : ''}</p>
                    </div>
                    <div class="detail-item">
                        <strong>Fecha de Registro</strong>
                        <p>${dist.fechaRegistro}</p>
                    </div>
                    ${dist.notas ? `
                    <div class="detail-item" style="flex: 1 1 100%;">
                        <strong>Notas</strong>
                        <p>${dist.notas}</p>
                    </div>` : ''}
                </div>
            `;
            contenedor.appendChild(card);
        });
    }

    function agregarDistribuidor() {
        const nombre = document.getElementById('nombre-distribuidor').value.trim();
        const telefono = document.getElementById('telefono-distribuidor').value.trim();
        const email = document.getElementById('email-distribuidor').value.trim();
        const direccion = document.getElementById('direccion-distribuidor').value.trim();
        const vehiculo = document.getElementById('vehiculo-distribuidor').value;
        const placa = document.getElementById('placa-distribuidor').value.trim();
        const notas = document.getElementById('notas-distribuidor').value.trim();
        

        if (!nombre || !telefono || !email || !direccion || !vehiculo) {
            alert('Por favor complete todos los campos obligatorios');
            return;
        }
        
        // Crear nuevo distribuidor
        const nuevoDistribuidor = {
            id: 'dist' + (distribuidores.length + 1),
            nombre,
            telefono,
            email,
            direccion,
            vehiculo,
            placa,
            notas,
            fechaRegistro: new Date().toISOString().split('T')[0] // Fecha actual en formato YYYY-MM-DD
        };
        
  
        distribuidores.push(nuevoDistribuidor);
        
   
        actualizarSelectoresDistribuidores();
        renderizarListaDistribuidores();
        limpiarFormularioDistribuidor();
        
      
        alert('Distribuidor agregado correctamente');
    }

    function limpiarFormularioDistribuidor() {
        document.getElementById('form-distribuidor').reset();
    }

    function mostrarConfirmacionEliminarDistribuidor(idDistribuidor) {
        const distribuidor = distribuidores.find(d => d.id === idDistribuidor);
        if (!distribuidor) return;
        
        accionActual = 'eliminar_distribuidor';
        datosAccion = { id: idDistribuidor };
        
        document.getElementById('modal-title').textContent = 'Confirmar Eliminación';
        document.getElementById('modal-message').innerHTML = `
            <p>¿Está seguro que desea eliminar al distribuidor <strong>${distribuidor.nombre}</strong>?</p>
            <p>Esta acción no se puede deshacer.</p>
        `;
        
        mostrarModal();
    }

    function eliminarDistribuidor(id) {
        distribuidores = distribuidores.filter(d => d.id !== id);
        actualizarSelectoresDistribuidores();
        renderizarListaDistribuidores();
        
   
        const resultado = document.getElementById('resultado-asignacion');
        resultado.querySelector('.result-title i').className = 'fas fa-check-circle';
        resultado.querySelector('.result-title span').textContent = 'Distribuidor eliminado correctamente';
        resultado.style.borderLeftColor = 'var(--success-color)';
        resultado.classList.remove('hidden');
        
        setTimeout(() => {
            resultado.classList.add('hidden');
        }, 3000);
    }


    function mostrarModal() {
        document.getElementById('confirmation-modal').classList.add('active');
    }

    function cerrarModal() {
        document.getElementById('confirmation-modal').classList.remove('active');
    }

    function confirmarAccion() {
        cerrarModal();
        
        if (accionActual === 'asignar_distribuidor') {
            confirmarAsignacion();
        } else if (accionActual === 'cancelar_entrega') {
            confirmarCancelacion();
        } else if (accionActual === 'eliminar_distribuidor') {
            eliminarDistribuidor(datosAccion.id);
        }
    }


    function confirmarAsignacion() {
        const { entrega, distribuidor } = datosAccion;
        const distribuidorObj = distribuidores.find(d => d.id === distribuidor);
        const distribuidorText = distribuidorObj ? distribuidorObj.nombre : 'Desconocido';
        const entregaText = document.querySelector(`#entrega-distribuidor option[value="${entrega}"]`).text;
        
 
        document.getElementById('result-entrega-dist').textContent = entregaText;
        document.getElementById('result-distribuidor').textContent = distribuidorText;
        document.getElementById('result-fecha-dist').textContent = new Date().toLocaleString();
        
        const resultado = document.getElementById('resultado-asignacion');
        resultado.querySelector('.result-title i').className = 'fas fa-check-circle';
        resultado.querySelector('.result-title span').textContent = 'Distribuidor asignado correctamente';
        resultado.style.borderLeftColor = 'var(--success-color)';
        resultado.classList.remove('hidden');

        console.log(`Distribuidor ${distribuidor} asignado a entrega ${entrega}`);
    }

    function confirmarCancelacion() {
        const { entrega, razon } = datosAccion;
        const razonText = document.querySelector(`#razon-cancelacion option[value="${razon}"]`).text;
        const entregaText = document.querySelector(`#entrega-cancelar option[value="${entrega}"]`).text;
        
        
        entregasDB[entrega].estado = "cancelada";
        
      
        cargarEntregasEnSelectores();
        renderizarTablaEntregas();

        document.getElementById('result-entrega-cancel').textContent = entregaText;
        document.getElementById('result-razon').textContent = razonText;
        document.getElementById('result-fecha-cancel').textContent = new Date().toLocaleString();
        document.getElementById('resultado-cancelacion').classList.remove('hidden');
        
        console.log(`Entrega ${entrega} cancelada por razón: ${razon}`);
    }

    function mostrarConfirmacionDistribuidor() {
        const entrega = document.getElementById('entrega-distribuidor').value;
        const distribuidor = document.getElementById('distribuidor-elegido').value;
        
        if (!entrega || !distribuidor) {
            alert('Por favor, seleccione una entrega y un distribuidor.');
            return;
        }
        
        accionActual = 'asignar_distribuidor';
        datosAccion = {
            entrega: entrega,
            distribuidor: distribuidor
        };
        
        const distribuidorObj = distribuidores.find(d => d.id === distribuidor);
        const distribuidorText = distribuidorObj ? distribuidorObj.nombre : 'Desconocido';
        const entregaText = document.querySelector(`#entrega-distribuidor option[value="${entrega}"]`).text;
        
        document.getElementById('modal-title').textContent = 'Confirmar Asignación de Distribuidor';
        document.getElementById('modal-message').innerHTML = `
            <p>¿Está seguro que desea asignar el distribuidor <strong>${distribuidorText}</strong> a la entrega <strong>${entregaText}</strong>?</p>
        `;
        
        mostrarModal();
    }

    function mostrarConfirmacionCancelacion() {
        const entrega = document.getElementById('entrega-cancelar').value;
        const razon = document.getElementById('razon-cancelacion').value;
        
        if (!entrega || !razon) {
            alert('Por favor, seleccione una entrega y una razón de cancelación.');
            return;
        }
        
        accionActual = 'cancelar_entrega';
        datosAccion = {
            entrega: entrega,
            razon: razon
        };
        
        const razonText = document.querySelector(`#razon-cancelacion option[value="${razon}"]`).text;
        const entregaText = document.querySelector(`#entrega-cancelar option[value="${entrega}"]`).text;
        
        document.getElementById('modal-title').textContent = 'Confirmar Cancelación de Entrega';
        document.getElementById('modal-message').innerHTML = `
            <p>¿Está seguro que desea cancelar la entrega <strong>${entregaText}</strong>?</p>
            <p><strong>Razón:</strong> ${razonText}</p>
        `;
        
        mostrarModal();
    }

    function cerrarSesion() {
        if (confirm('¿Está seguro que desea cerrar sesión?')) {
            alert('Sesión cerrada correctamente.');
            window.location.href = "index.html";
        }
    }
</script>
</body>
</html>