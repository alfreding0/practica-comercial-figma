@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('venta.detalle.store', [$cod_venta]) }}">
            @csrf
            <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
                <div id="panel-left" class="card">

                    <div class="card-content">
                        <span class="card-title primary-text-color primary-text-style">
                            Agregando un producto a la venta
                            </span>
                        <div class="row">
                            <div class="col s12 divider"></div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m6">
                                <select name="producto" id="producto">
                                    <option value="">Elija una opción:</option>
                                    @foreach($productos as $producto)
                                        <option value="{{ $producto->cod_producto }}">{{ $producto->nombre.' || '.$producto->precio.' Bs.' }}</option>
                                    @endforeach
                                </select>
                                <label for="producto">Seleccione un producto:</label>
                                @error('producto')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="cantidad" type="number" class="validate" name="cantidad" value="{{ old('cantidad') }}">
                                <label for="cantidad">Cantidad:</label>
                                @error('cantidad')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>

                        <div class="card-action right-align">
                            <button type="submit" class="waves-effect waves-brown btn-flat red-text bold" onclick="showProgress()">Guardar</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
