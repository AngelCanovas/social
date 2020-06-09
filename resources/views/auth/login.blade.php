@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">

                @include('partials.validation-errors')

                <div class="card border-0 bg-light px-4 py-2">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <i class="fas fa-envelope mr-2"></i><label class="font-weight-bold">Correo Electrónico:</label>
                                <input class="form-control border-1" type="email" name="email" placeholder="Tu email..."
                                       value="{{ old('email') }}">
                            </div>

                            <div class="form-group">
                                <i class="fas fa-key mr-2"></i><label class="font-weight-bold">Contraseña:</label>
                                <input class="form-control border-1" type="password" name="password" placeholder="Tu contraseña...">
                            </div>

                            <button class="btn btn-primary btn-block font-weight-bold btn-success" dusk="login-btn">Iniciar sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
