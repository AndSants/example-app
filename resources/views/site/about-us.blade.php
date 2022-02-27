@extends('site.layouts.basic')

@section('title', $title)

@section('content')
    <div class="page-content">
        <div class="page-title">
            <h1>Olá, eu sou o Super Gestão</h1>
        </div>

        <div class="page-information">
            <p>O Super Gestão é o sistema online de controle administrativo que pode transformar e potencializar os negócios da sua empresa.</p>
            <p>Desenvolvido com a mais alta tecnologia para você cuidar do que é mais importante, seus negócios!</p>
        </div>
    </div>

    @include('site.layouts.menus.footer')
@endsection
