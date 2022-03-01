@extends('site.layouts.basic')

@section('title', $title)

@section('content')
    <div class="page-content">
        <div class="page-title">
            <h1>Login</h1>
        </div>

        <div class="page-information">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form action="{{ route('site.login') }}" method="post">
                    @csrf
                    <input name="user" value="{{ old('user') }}" type="text" placeholder="Usuário" class="black-board">
                    {{ $errors->has('user') ? $errors->first('user') : '' }}

                    <input name="password" value="{{ old('password') }}" type="password" placeholder="Senha" class="black-board">
                    {{ $errors->has('password') ? $errors->first('password') : '' }}

                    <button type="submit" class="black-board">Acessar</button>
                </form>
                {{ isset($erro) && $erro != '' ? $erro : '' }}
            </div>
        </div>
    </div>

    @include('site.layouts.menus.footer')
@endsection
