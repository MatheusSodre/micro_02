<!-- resources/views/cotas/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Minhas Cotas</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Valor Total</th>
                <th>Data Compra</th>
                <th>Contemplada</th>
                <th>Saldo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($cotas as $cota)
            <tr>
                <td>{{ $cota->codigo }}</td>
                <td>R$ {{ number_format($cota->valor_total, 2, ',', '.') }}</td>
                <td>{{ $cota->data_compra->format('d/m/Y') }}</td>
                <td>{{ $cota->contemplada ? 'Sim' : 'Não' }}</td>
                <td>R$ {{ number_format($cota->calcularSaldo(), 2, ',', '.') }}</td>
                <td>
                    <a href="{{ route('cotas.show', $cota) }}" class="btn btn-sm btn-info">Detalhes</a>
                </td>
            </tr>
            @endforeach --}}
        </tbody>
    </table>

    {{-- {{ $cotas->links() }} --}}
</div>
@endsection