@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card border-0 bg-light shadow-sm">
                    <img src="{{ $user->avatar }}" alt="{{ $user->name }}" class="card-img-top">
                    <div class="card-body">
                        {{ $user->name }}
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card border-0 bg-light shadow-sm">
                    <div class="card-body">
                        Mi contenido
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
