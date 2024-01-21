@extends('layouts.theme.app')

@section('content')
    <!-- Main Container -->
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Main Card -->
                <div class="card">
                    <div class="card-header text-center" style="background-color: #3b3f5c; color: white;">
                        <h3 class="text-white">{{ __('¡Bienvenid@ Al Sistema De Ventas!') }}</h3>
                    </div>

                    <div class="card-body">
                        <!-- Success Message -->
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!-- Welcome Message if the user is logged in -->
                        @auth
                            <p class="lead text-center">{{ Auth::user()->name }}</p>
                        @else
                            <!-- Message if the user is not logged in -->
                            <p class="lead">{{ __('No has iniciado sesión.') }}</p>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
