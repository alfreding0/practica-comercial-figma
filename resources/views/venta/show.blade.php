@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
            <div id="panel-left"  class="card">
                <div class="card-content">
                    <span class="card-title primary-text-color primary-text-style">
                        Datos de la Venta
                    </span>
                    <div class="row">
                        <div class="col s12 divider"></div>
                    </div>

                    <div class="row">
                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Fecha venta:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$venta->fecha}}</p>
                        </div>

                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Total (Bs.):</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$venta->total.' Bs.'}}</p>
                        </div>

                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Cliente:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$venta->cliente->nombre_completo}}</p>
                        </div>

                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Personal encargado:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{ $venta->persona->nombre.' '.$venta->persona->apellido }}</p>
                        </div>
                    </div>
                    <div class="card-action right-align">
                        <a href="{{ route('venta.index') }}" class="waves-effect waves-brown btn-flat red-text bold">Atras</a>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('venta.detalle.create', [$venta->cod_venta]) }}" class="waves-effect waves-light btn dark-primary-color">Agregar Producto</a>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>CodVenta</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio Unit. (Bs.)</th>
                        <th>SubTotal</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($venta->detalle_venta as $detalle)
                        <tr>
                            <td>{{ $detalle->id_venta }}</td>
                            <td>{{ $detalle->producto->nombre }}</td>
                            <td>{{ $detalle->cantidad. ' unidades' }}</td>
                            <td>{{ $detalle->precio_unitario.' Bs.' }}</td>
                            <td>{{ $detalle->cantidad * $detalle->precio_unitario.' Bs.' }}</td>
                            <td>
                                <a href="{{ route('venta.detalle.destroy', [$detalle->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
