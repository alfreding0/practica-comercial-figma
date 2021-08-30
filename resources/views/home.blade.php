@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col m10 offset-m1">
            <div class="card">
                <div class="card-header center">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="center">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </div>

                    <div class="row">
                        <h3 class="center">Vista Principal del Sistema Comercial Figma</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
