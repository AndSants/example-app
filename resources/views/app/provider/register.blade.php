@extends('app.layouts.basic')

@section('title', $title)

@section('content')
    <div class="page-content">
        <div class="page-title-app">
            <h1>{{ $title }}</h1>
        </div>

        @include('app.provider.menus_provider.menu')

        <div class="page-information">
            <div class="provider-form">
                {{ $message }}
                <form action="{{ route('app.provider.register') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $provider->id ?? '' }}">
                    <input type="text" name="name" value="{{ $provider->name ?? old('name') }}" placeholder="Nome" class="black-board">
                    {{ $errors->has('name') ? $errors->first('name') : '' }}
                    <input type="text" name="email" value="{{ $provider->email ?? old('email') }}" placeholder="E-mail" class="black-board">
                    {{ $errors->has('email') ? $errors->first('email') : '' }}
                    <input type="text" name="site" value="{{ $provider->site ?? old('site') }}" placeholder="Site" class="black-board">
                    {{ $errors->has('site') ? $errors->first('site') : '' }}
                    <input type="text" name="federative_union" value="{{ $provider->federative_union ?? old('federative_union') }}" placeholder="UF" class="black-board">
                    {{ $errors->has('federative_union') ? $errors->first('federative_union') : '' }}
                    <button type="submit" class="black-board">{{ $provider->id != '' ? 'Atulizar' : 'Cadastrar'}}</button>
                </form>
            </div>
        </div>
    </div>

    @include('app.layouts.menus.footer')
@endsection
