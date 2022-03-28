@extends('layouts.site')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cadastro de Usuário</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
        <div class="col-lg-7">
            <div class="p-5">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />

                <form class="user" method="POST" action="{{ route('register') }}" >
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="name"
                            placeholder="Nome do usuário" name="name" required autofocus >
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user" id="email"
                            placeholder="E-Mail" name="email" required >
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password" class="form-control form-control-user"
                                id="password" placeholder="Senha" name="password" required autocomplete="new-password" >
                        </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control form-control-user" required
                                id="password_confirmation" placeholder="Repita a senha" name="password_confirmation">
                        </div>
                    </div>
                    <x-button class="ml-2">
                        {{ __('Salvar') }}
                    </x-button>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection