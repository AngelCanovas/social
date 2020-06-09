@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">

                @include('partials.validation-errors')

                <div class="card border-0 bg-light px-4 py-2">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group pb-2">
                                <i class="fas fa-user mr-2"></i><label class="font-weight-bold">Apodo:</label>
                                <input class="form-control border-1" type="text" name="name" placeholder="Tu nombre de usuario..." value="{{ old('name') }}">
                            </div>
                            <div class="form-group pb-2">
                                <i class="fas fa-user mr-2"></i><label class="font-weight-bold">Nombre:</label>
                                <input class="form-control border-1" type="text" name="first_name" placeholder="Tu nombre..." value="{{ old('first_name') }}">
                            </div>
                            <div class="form-group pb-2">
                                <i class="fas fa-user mr-2"></i><label class="font-weight-bold">Apellidos:</label>
                                <input class="form-control border-1" type="text" name="last_name" placeholder="Tu apellido..." value="{{ old('last_name') }}">
                            </div>
                            <div class="form-group pb-2">
                                <i class="fas fa-envelope mr-2"></i><label class="font-weight-bold">Correo Electrónico:</label>
                                <input class="form-control border-1" type="email" name="email" placeholder="Tu email..." value="{{ old('email') }}">
                            </div>
                            <div class="form-group pb-2">
                                <i class="fas fa-lock mr-2"></i><label class="font-weight-bold">Contraseña:</label>
                                <input class="form-control border-1" type="password" name="password" placeholder="Tu contraseña...">
                            </div>
                            <div class="form-group pb-3">
                                <i class="fas fa-unlock mr-2"></i><label class="font-weight-bold">Repetir contraseña:</label>
                                <input class="form-control border-1" type="password" name="password_confirmation" placeholder="Repite tu contraseña...">
                            </div>

                            <button class="btn btn-primary btn-block font-weight-bold btn-success" dusk="register-btn">Registrarse</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
