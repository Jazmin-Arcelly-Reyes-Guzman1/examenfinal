@extends('layout')

@section('content')
<td style="background-color: white;">
    <h2>Clientes </h2>
    <tr>
        <td colspan="4" style="background-color: white;">
            <a href="{{route('clientes.create')}}"> Crear Nuevo Cliente</a>
        </td>
    </tr>
    <table class="table">
    <tr>
        @if ($clientes)
            @foreach ($clientes as $cliente)
                <td style="background-color: white;">
                    <a href="{{ route('clientes.show', ['id' => $cliente->id]) }}">
                        {{ $cliente->nombres }}</a>
                </td>
            @endforeach
        @else
                <td colspan="4">No existen clientes</td>
        @endif
    </tr>
    <tr>
        <td colspan="4">
            {{$clientes->links('pagination::bootstrap-4')}}
        </td>
    </tr>
    </table>
    </td>
@endsection
