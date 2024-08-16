@extends('layout')
@section('title', 'Cliente | ' . $cliente->id)

@section('content')
<style>
.action-buttons {
    display: flex;
    align-items: center;
    gap: 10px;
}

.action-button {
    background: none;
    border: none;
    cursor: pointer;
    font-size: 1.2em;
}

.edit-button {
    color: #fcaa5d;
}

.edit-button:hover {
    color: gold; /* Cambia el color cuando el mouse pasa por encima */
}

.delete-button {
    color: red;
}

.delete-button:hover {
    color: darkred; /* Cambia el color cuando el mouse pasa por encima */
}

.action-button i {
    pointer-events: none; /* Asegura que los iconos no capturen eventos del mouse */
}
</style>

<div class="action-buttons" style="background-color: white;">
    <h5>Cliente <strong><span>{{$cliente->nombres}}</strong></span></h5>
    <a href="{{ route('clientes.edit', ['id' => $cliente->id]) }}" class="action-button edit-button" title="Editar">
        <i class="fas fa-pencil-alt"></i>
    </a>
    <form action="{{ route('clientes.destroy', ['id' => $cliente->id]) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="action-button delete-button" title="Eliminar">
            <i class="fas fa-trash"></i>
        </button>
    </form>
</div>

<table class="table" style="font-size: 0.9em;background-color: white;" >
    <tr>
        <th>Código:</th>
        <td>{{$cliente->id}}</td>
    </tr>
    <tr>
        <th>Nombres:</th>
        <td>{{$cliente->nombres}}</td>
    </tr>
    <tr>
        <th>Email:</th>
        <td>{{$cliente->email}}</td>
    </tr>
    <tr>
        <th>Dirección:</th>
        <td>{{$cliente->direccion}}</td>
    </tr>
    <tr>
        <th>Fono:</th>
        <td>{{$cliente->fono}}</td>
    </tr>
    
</table>
@endsection
