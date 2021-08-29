@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('venta.store') }}">
            @csrf

            <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
                <div id="panel-left" class="card">

                    <div class="card-content">
                        <span class="card-title primary-text-color primary-text-style">
                            Formulario de Registro Nueva Venta
                            </span>
                        <div class="row">
                            <div class="col s12 divider"></div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="fecha" type="text" class="validate" name="fecha" value="{{ now() }}" readonly>
                                <label for="fecha">Fecha:</label>
                                @error('fecha')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="total" type="number" class="validate" name="total" value="0.00" readonly>
                                <label for="total">Total:</label>
                                @error('total')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m12">
                                <select name="cliente" id="cliente">
                                    <option value="">Elija una opción:</option>
                                    @foreach($clientes as $cliente)
                                        <option value="{{ $cliente->id }}">{{ $cliente->nombre_completo }}</option>
                                    @endforeach
                                </select>
                                <label for="cliente">Seleccione un cliente:</label>
                                @error('cliente')
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
