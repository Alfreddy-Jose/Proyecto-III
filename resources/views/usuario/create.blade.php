@extends('layouts.plantilla')

@section('titulo', 'Usuarios')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="row">
            <div class="col-ms-12 col-lg-12">

                <div class="card p-4">

                    <div class="card-header">
                        <div class="card-title">NUEVO USUARIO</div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-xl-4">
                            <label class='mt-4' for="name">NOMBRE</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                value="{{ old('name') }}" name="name" placeholder="Nombre" autofocus />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-6 col-xl-4">
                            <label class='mt-4' for="email">EMAIL</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}" placeholder="Email" />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-6 col-xl-4 mb-4">
                            <label class='mt-4' for="password">CONTRASEÑA</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" value="{{ old('password') }}" name="password" placeholder="Contraseña" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-6 col-xl-4 mb-4">
                            <label class='mt-4' for="password_confirmation">CONFIRMAR CONTRASEÑA</label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                id="password_confirmation" value="{{ old('password_confirmation') }}"
                                name="password_confirmation" placeholder="Confirmar Contraseña" />
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="card-action">
                            <button class="btn btn-success">Enviar</button>
                            <button class="btn btn-danger">Cancelar</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
