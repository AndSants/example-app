@extends('app.layouts.basic')

@section('title', $title)

@section('content')
    <div class="page-content">
        <div class="page-title-app">
            <h1>Fornecedor</h1>
        </div>

        @include('app.provider.menus_provider.menu')

        <div class="page-information">
            <div class="provider-form">
                <form action="{{ route('app.provider.list') }}" method="post">
                    @csrf
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Nome" class="black-board">
                    {{ $errors->has('name') ? $errors->first('name') : '' }}
                    <input type="text" name="email" value="{{ old('email') }}" placeholder="E-mail" class="black-board">
                    {{ $errors->has('email') ? $errors->first('email') : '' }}
                    <input type="text" name="site" value="{{ old('site') }}" placeholder="Site" class="black-board">
                    {{ $errors->has('site') ? $errors->first('site') : '' }}
                    <input type="text" name="federative_union" value="{{ old('federative_union') }}" placeholder="UF" class="black-board">
                    {{ $errors->has('federative_union') ? $errors->first('federative_union') : '' }}
                    <button type="submit" class="black-board">Pesquisar</button>
                </form>
            </div>
        </div>
    </div>

    @include('app.layouts.menus.footer')
@endsection
