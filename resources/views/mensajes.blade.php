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
</tr>
@empty
<tr>
    <td colspan="7">No hay mensajes registrados</td>
</tr>
@endforelse
                
            </tbody>
        </table>
    </div>
</div>
@endsection
