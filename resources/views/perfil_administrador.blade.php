@extends('layouts.app')

@section('title', 'Golden Feets - Admin Empleados')

@section('styles')
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
        --admin-color: #28a745;
        --distribuidor-color: #fd7e14;
        --gerente-color: #20c997;
        --vendedor-color: #0d6efd;
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

    .container-admin {
        max-width: 1200px;
        margin: 30px auto;
        padding: 0;
        background-color: white;
        box-shadow: var(--card-shadow);
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s;
    }

    .container-admin:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }

    .admin-header {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: white;
        padding: 25px 30px;
        text-align: center;
    }

    .admin-header h1 {
        font-size: 28px;
        margin-bottom: 10px;
        text-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }

    .admin-content {
        padding: 30px;
    }

    .table-responsive {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    .table thead {
        background-color: var(--primary-color);
        color: white;
    }

    .table th {
        font-weight: 500;
    }

    .badge-status {
        font-size: 0.9em;
        padding: 5px 10px;
        border-radius: 50px;
    }

    .badge-active {
        background-color: var(--success-color);
    }

    .badge-inactive {
        background-color: var(--error-color);
    }

    .role-badge {
        display: inline-block;
        padding: 4px 12px;
        border-radius: 50px;
        font-size: 0.85em;
        font-weight: 500;
        color: white;
        text-transform: capitalize;
    }

    .role-admin {
        background: linear-gradient(135deg, var(--admin-color), #1e7e34);
    }

    .role-distribuidor {
        background: linear-gradient(135deg, var(--distribuidor-color), #e36209);
    }

    .role-gerente {
        background: linear-gradient(135deg, var(--gerente-color), #17a2b8);
    }

    .role-vendedor {
        background: linear-gradient(135deg, var(--vendedor-color), #0b5ed7);
    }

    .btn-golden {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 50px;
        font-weight: 500;
        transition: all 0.3s;
        box-shadow: 0 4px 10px rgba(108, 74, 182, 0.3);
    }

    .btn-golden:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(108, 74, 182, 0.4);
    }

    .btn-golden:active {
        transform: translateY(0);
    }

    .modal-header {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: white;
    }

    .form-control:focus {
        border-color: var(--secondary-color);
        box-shadow: 0 0 0 0.25rem rgba(108, 74, 182, 0.25);
    }

    .form-select:focus {
        border-color: var(--secondary-color);
        box-shadow: 0 0 0 0.25rem rgba(108, 74, 182, 0.25);
    }

    @media (max-width: 768px) {
        .container-admin {
            margin: 15px;
            border-radius: 10px;
        }

        .admin-header h1 {
            font-size: 22px;
        }

        .table-responsive {
            overflow-x: auto;
        }
    }
</style>
@endsection

@section('content')
<header>
    <div class="back-arrow" id="back-arrow" onclick="history.back()">
        <i class="fas fa-arrow-left"></i>
    </div>
    <div class="logo-title">
        <div class="delivery-icon">
            <i class="fas fa-users-cog"></i>
        </div>
        <h2>Administración</h2>
    </div>
    <div class="icon-wrapper">
        <span class="brand-name">Golden Feets</span>
    </div>
</header>

<div class="container-admin">
    <div class="admin-header">
        <h1><i class="fas fa-user-shield me-2"></i>Gestión de Empleados</h1>
    </div>

    <div class="admin-content">
        <button class="btn btn-golden mb-4" data-bs-toggle="modal" data-bs-target="#modalEmpleado">
            <i class="fas fa-user-plus me-2"></i>Nuevo Empleado
        </button>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->id }}</td>
                        <td>{{ $empleado->nombre }} {{ $empleado->apellido }}</td>
                        <td>{{ $empleado->email }}</td>
                        <td>
                            <span class="role-badge role-{{ explode(' ', $empleado->rol)[0] }}">
                                {{ ucfirst($empleado->rol) }}
                            </span>
                        </td>
                        <td>
                            <span class="badge-status {{ $empleado->activo ? 'badge-active' : 'badge-inactive' }}">
                                {{ $empleado->activo ? 'Activo' : 'Inactivo' }}
                            </span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-warning me-2" data-bs-toggle="modal" 
                                    data-bs-target="#modalEmpleado" 
                                    onclick="editarEmpleado({{ json_encode($empleado) }})">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" 
                                    data-bs-target="#modalConfirmacion" 
                                    onclick="setEmpleadoAEliminar({{ $empleado->id }})">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal para agregar/editar empleado -->
<div class="modal fade" id="modalEmpleado" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEmpleadoTitulo">Nuevo Empleado</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="empleadoForm" method="POST" action="{{ route('empleados.store') }}">
                    @csrf
                    <input type="hidden" id="empleado_id" name="id">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="rol" class="form-label">Rol</label>
                        <select class="form-select" id="rol" name="rol" required>
                            <option value="">Seleccione un rol</option>
                            <option value="administrador">Administrador</option>
                            <option value="distribuidor">Distribuidor</option>
                            <option value="gerente de entregas">Gerente de Entregas</option>
                            <option value="vendedor">Vendedor</option>
                        </select>
                    </div>
                    <div class="mb-3 form-check form-switch" id="estadoContainer" style="display: none;">
                        <input type="checkbox" class="form-check-input" id="activo" name="activo" value="1">
                        <label class="form-check-label" for="activo">Activo</label>
                    </div>
                    <div class="mb-3" id="passwordContainer">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-golden">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmación para eliminar -->
<div class="modal fade" id="modalConfirmacion" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Confirmar Eliminación</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Está seguro que desea eliminar este empleado? Esta acción no se puede deshacer.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form id="deleteForm" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Variables para el empleado a eliminar
    let empleadoAEliminar = null;
    
    // Función para configurar el formulario de edición
    function editarEmpleado(empleado) {
        const form = document.getElementById('empleadoForm');
        form.action = `/empleados/${empleado.id}`;
        form.querySelector('input[name="_method"]').value = 'PUT';
        
        document.getElementById('empleado_id').value = empleado.id;
        document.getElementById('nombre').value = empleado.nombre;
        document.getElementById('apellido').value = empleado.apellido;
        document.getElementById('email').value = empleado.email;
        document.getElementById('rol').value = empleado.rol;
        document.getElementById('activo').checked = empleado.activo;
        
        // Mostrar estado y ocultar campo de contraseña
        document.getElementById('estadoContainer').style.display = 'block';
        document.getElementById('passwordContainer').style.display = 'none';
        
        // Cambiar título del modal
        document.getElementById('modalEmpleadoTitulo').textContent = 'Editar Empleado';
    }
    
    // Función para resetear el formulario cuando se cierra el modal
    document.getElementById('modalEmpleado').addEventListener('hidden.bs.modal', function () {
        const form = document.getElementById('empleadoForm');
        form.action = "{{ route('empleados.store') }}";
        form.querySelector('input[name="_method"]').value = 'POST';
        form.reset();
        
        // Mostrar campo de contraseña y ocultar estado
        document.getElementById('estadoContainer').style.display = 'none';
        document.getElementById('passwordContainer').style.display = 'block';
        
        // Restaurar título del modal
        document.getElementById('modalEmpleadoTitulo').textContent = 'Nuevo Empleado';
    });
    
    // Función para configurar el empleado a eliminar
    function setEmpleadoAEliminar(id) {
        empleadoAEliminar = id;
        const deleteForm = document.getElementById('deleteForm');
        deleteForm.action = `/empleados/${id}`;
    }
</script>
@endsection