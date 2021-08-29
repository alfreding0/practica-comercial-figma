@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('producto.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>nombre</th>
                        <th>precio (Bs.)</th>
                        <th>stock</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $producto)
                            <tr>
                                <td>{{ $producto->cod_producto }}</td>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->precio.' Bs.' }}</td>
                                <td>{{ $producto->stock }}</td>
                                <td>
                                    <a href="{{ route('producto.edit', [$producto->cod_producto]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('producto.destroy', [$producto->cod_producto]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
