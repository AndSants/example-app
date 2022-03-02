@extends('app.layouts.basic')

@section('title', $title)

@section('content')
    <div class="page-content">
        <div class="page-title-app">
            <h1>Fornecedor - Listar</h1>
        </div>

        @include('app.provider.menus_provider.menu')

        <div class="page-information">
            <div class="provider-form">
                ... Lista fornecedores ...
            </div>
        </div>
    </div>

    @include('app.layouts.menus.footer')
@endsection
