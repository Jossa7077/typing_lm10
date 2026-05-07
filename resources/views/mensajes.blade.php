@extends('layouts.app')

@section('title', 'Mensajes')
@section('content')
<div class="container mt-4">
    <h3 class="mb-4 text-center">Mensajes PQRS</h3>

    <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered align-middle text-center">
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
    <td>{{ $item->nombre }}</td>
    <td>{{ $item->apellidos }}</td>
    <td>{{ $item->correo }}</td>
    <td>{{ $item->tipo }}</td>
    <td>{{ $item->mensaje }}</td>
    <td>{{ $item->created_at->format('d/m/Y H:i') }}</td>

    <td>

    <!-- BOTÓN EDITAR -->
    <a href="{{ route('mensajes.edit', $item->id) }}"
       class="btn btn-warning btn-sm mb-1">
        Editar
    </a>

    <!-- BOTÓN ELIMINAR -->
    <form action="{{ route('mensajes.destroy', $item->id) }}"
          method="POST"
          style="display:inline-block;">

        @csrf
        @method('DELETE')

        <button type="submit"
                class="btn btn-danger btn-sm"
                onclick="return confirm('¿Seguro que deseas eliminar este mensaje?')">

            Eliminar

        </button>

    </form>

</td>
    
</tr>
@empty
<tr>
    <td colspan="8">No hay mensajes registrados</td>
</tr>
@endforelse
                
            </tbody>
        </table>
    </div>
</div>
@endsection
