@extends('layouts.site-bg')
@section('content')
<div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">Autenticação</h1>
</div>
<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />

<form class="user" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <input type="email" class="form-control form-control-user"
            id="email" aria-describedby="emailHelp" name="email"
            placeholder="Digite seu e-mail...">
    </div>
    <div class="form-group">
        <input type="password" class="form-control form-control-user"
            id="password" placeholder="Senha" name="password">
    </div>
    <div class="form-group">
        <div class="custom-control custom-checkbox small">
            <input type="checkbox" class="custom-control-input" id="remember_me">
            <label class="custom-control-label" for="remember_me">Lembrar
            </label>
        </div>
    </div>
    <x-button class="btn btn-primary btn-user btn-block">
        {{ __('Entrar') }}
    </x-button>
    <hr>
    <a href="#" class="btn btn-google btn-user btn-block">
        <i class="fab fa-google fa-fw"></i> Login with Google
    </a>
    <a href="#" class="btn btn-facebook btn-user btn-block">
        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
    </a>
</form>
<hr>
<div class="text-center">
    @if (Route::has('password.request'))
        <a class="small" href="{{ route('password.request') }}">
            {{ __('Esqueceu a senha?') }}
        </a>
    @endif
</div>
@endsection