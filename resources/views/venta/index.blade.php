@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('venta.create') }}" class="waves-effect waves-light btn dark-primary-color">Nueva venta</a>
        </div>
        <div class="col s12 center card-title">
            <span>LISTA DE VENTAS</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Fecha</th>
                        <th>Total (Bs.)</th>
                        <th>Cliente</th>
                        <th>Encargado</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($ventas as $venta)
                            <tr>
                                <td>{{ $venta->cod_venta }}</td>
                                <td>{{ $venta->fecha }}</td>
                                <td>{{ $venta->total.' Bs.' }}</td>
                                <td>{{ $venta->cliente->nombre_completo }}</td>
                                <td>{{ $venta->persona->nombre.' '.$venta->persona->apellido }}</td>
                                <td>
                                    <a href="{{ route('venta.show', [$venta->cod_venta]) }}"><span class="new badge green" data-badge-caption="show"></span></a>
                                    <a href="{{ route('venta.destroy', [$venta->cod_venta]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
