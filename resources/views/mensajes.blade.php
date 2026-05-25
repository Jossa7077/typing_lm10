@extends('layouts.app')

@section('title', 'Mensajes')

@section('content')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

<div class="container mt-4">

    <div class="p-4 rounded-5 shadow-lg text-center text-white mb-5"
        style="background: linear-gradient(135deg, #004d98, #7c3aed);">
        <h1 class="fw-bold">
            Panel de Mensajes PQRS ⚽
        </h1>
        <p class="mb-0 fs-5">
            Administración de solicitudes, peticiones y felicitaciones.
        </p>
    </div>

    @if(session('success'))
        <div class="alert alert-success rounded-4 shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="card border-0 shadow-lg rounded-5 overflow-hidden">

        <div class="p-4 text-white"
            style="background: linear-gradient(135deg, #0f172a, #1e3a8a);">
            <h3 class="fw-bold mb-0">
                Tabla de Mensajes 📩
            </h3>
        </div>

        <div class="card-body bg-white p-4">

            <div class="table-responsive">

                <table id="tablaMensajes" class="table table-hover align-middle text-center">

                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>Tipo</th>
                            <th>Mensaje</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($pqrs as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td class="fw-semibold">{{ $item->nombre }}</td>
                                <td>{{ $item->apellidos }}</td>
                                <td>{{ $item->correo }}</td>
                                <td>
                                    @if($item->tipo == 'Queja')
                                        <span class="badge bg-danger px-3 py-2 rounded-pill">
                                            {{ $item->tipo }}
                                        </span>
                                    @elseif($item->tipo == 'Peticion')
                                        <span class="badge bg-primary px-3 py-2 rounded-pill">
                                            {{ $item->tipo }}
                                        </span>
                                    @else
                                        <span class="badge bg-success px-3 py-2 rounded-pill">
                                            {{ $item->tipo }}
                                        </span>
                                    @endif
                                </td>
                                <td style="max-width:250px;">{{ $item->mensaje }}</td>
                                <td>
                                    {{ $item->created_at->format('d/m/Y') }}
                                    <br>
                                    <small class="text-muted">{{ $item->created_at->format('H:i') }}</small>
                                </td>
                                <td>
                                    <a href="{{ route('mensajes.edit', $item->id) }}"
                                        class="btn btn-warning rounded-pill px-3 fw-bold shadow-sm mb-2 mb-md-0 me-md-1 btn-accion">
                                        ✏️ Editar
                                    </a>

                                    <form action="{{ route('mensajes.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn btn-eliminar-custom rounded-pill px-3 fw-bold shadow-sm btn-accion"
                                            onclick="return confirm('¿Seguro que deseas eliminar este mensaje?')"
                                        >
                                            🗑 Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="py-4 text-muted">
                                    No hay mensajes registrados ⚠️
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function () {
    $('#tablaMensajes').DataTable({
        language: {
            search: "_INPUT_", 
            searchPlaceholder: "Buscar mensaje...",
            lengthMenu: "Mostrar Registros _MENU_", 
            info: "Mostrando _START_ a _END_ de _TOTAL_ mensajes",
            infoFiltered: "", 
            paginate: {
                previous: "Anterior",
                next: "Siguiente"
            },
            zeroRecords: "No se encontraron resultados",
            infoEmpty: "Sin registros disponibles"
        },
        pageLength: 5,
        responsive: true
    });

    $('.dataTables_filter label').prepend('<span class="search-icon">🔍</span>');
});
</script>

<style>
    /* Efecto Hover Suave en las Filas */
    table tbody tr {
        transition: 0.2s ease-in-out;
    }
    table tbody tr:hover {
        background-color: #f8fafc !important;
    }

    /* Clase personalizada para igualar el tamaño exacto de los botones de acción */
    .btn-accion {
        width: 110px;
        font-size: 0.85rem;
        padding-top: 6px;
        padding-bottom: 6px;
        display: inline-block;
        text-align: center;
    }

    /* === NUEVO: Botón de eliminar con un rojo quemado/terracota diferente al de Queja === */
    .btn-eliminar-custom {
        background-color: #b91c1c !important;
        border-color: #b91c1c !important;
        color: white !important;
        transition: all 0.2s ease;
    }
    .btn-eliminar-custom:hover {
        background-color: #991b1b !important;
        border-color: #991b1b !important;
        box-shadow: 0 4px 6px -1px rgba(185, 28, 28, 0.2);
    }

    /* Centrado estricto horizontal y vertical para los títulos (th) */
    table.dataTable thead th {
        text-align: center !important;
        vertical-align: middle !important;
        position: relative;
        padding-top: 14px !important;
        padding-bottom: 14px !important;
        padding-left: 25px !important; 
        padding-right: 25px !important; 
    }

    /* Contenedores de Filtros Superiores (DataTables Layout) */
    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter {
        padding: 5px 0;
        margin-bottom: 1.8rem;
    }

    /* DISEÑO PREMIUM: MOSTRAR REGISTROS */
    .dataTables_wrapper .dataTables_length label {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-size: 0.95rem;
        font-weight: 600;
        color: #334155;
        background-color: #f1f5f9;
        padding: 8px 16px;
        border-radius: 14px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 1px 3px rgba(0,0,0,0.02);
    }

    /* Selector dentro de Mostrar Registros */
    .dataTables_wrapper .dataTables_length select {
        border-radius: 10px;
        padding: 6px 32px 6px 12px !important;
        border: 1px solid #cbd5e1;
        background-color: #ffffff;
        font-weight: bold;
        color: #1e3a8a;
        cursor: pointer;
        outline: none;
        transition: all 0.2s ease;
        box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);
    }
    .dataTables_wrapper .dataTables_length select:focus {
        border-color: #7c3aed;
        box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.2);
    }

    /* DISEÑO PREMIUM: BUSCADOR (INPUT + ICONO) */
    .dataTables_wrapper .dataTables_filter label {
        position: relative;
        display: inline-flex;
        align-items: center;
        margin-bottom: 0;
    }

    /* Campo input del Buscador */
    .dataTables_wrapper .dataTables_filter input {
        border-radius: 14px;
        padding: 9px 16px 9px 40px !important; 
        border: 1px solid #cbd5e1;
        width: 260px;
        font-size: 0.95rem;
        color: #1e293b;
        background-color: #ffffff;
        outline: none;
        transition: all 0.25s ease-in-out;
        box-shadow: 0 1px 3px rgba(0,0,0,0.02);
    }

    /* Animación de expansión del Buscador */
    .dataTables_wrapper .dataTables_filter input:focus {
        width: 300px;
        border-color: #7c3aed;
        background-color: #fff;
        box-shadow: 0 0 0 4px rgba(124, 58, 237, 0.15), 0 4px 6px -1px rgba(0,0,0,0.05);
    }

    /* Icono de Lupa */
    .dataTables_filter label .search-icon {
        position: absolute;
        left: 14px;
        font-size: 0.95rem;
        color: #94a3b8;
        pointer-events: none;
        z-index: 5;
    }

    /* Desactivar íconos nativos viejos/rotos de DataTables */
    table.dataTable thead .sorting::after, 
    table.dataTable thead .sorting::before,
    table.dataTable thead .sorting_asc::after,
    table.dataTable thead .sorting_asc::before,
    table.dataTable thead .sorting_desc::after,
    table.dataTable thead .sorting_desc::before {
        display: none !important;
    }

    /* Posicionamiento de las flechas personalizadas */
    table.dataTable thead th::after {
        position: absolute;
        right: 8px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 0.65rem;
        opacity: 0.25;
        transition: opacity 0.2s;
    }

    table.dataTable thead .sorting::after { content: "▲▼"; letter-spacing: -1px; }
    table.dataTable thead .sorting_asc::after { content: "▲"; opacity: 1; color: #38bdf8; }
    table.dataTable thead .sorting_desc::after { content: "▼"; opacity: 1; color: #38bdf8; }
</style>

@endsection