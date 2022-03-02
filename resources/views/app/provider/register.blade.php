@extends('app.layouts.basic')

@section('title', $title)

@section('content')
    <div class="page-content">
        <div class="page-title-app">
            <h1>Fornecedor - Cadastrar</h1>
        </div>

        @include('app.provider.menus_provider.menu')

        <div class="page-information">
            <div class="provider-form">
                <form action="{{ route('app.provider.register') }}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Nome" class="black-board">
                    <input type="text" name="email" placeholder="E-mail" class="black-board">
                    <input type="text" name="site" placeholder="Site" class="black-board">
                    <input type="text" name="federative_union" placeholder="UF" class="black-board">
                    <button type="submit" class="black-board">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

    @include('app.layouts.menus.footer')
@endsection
