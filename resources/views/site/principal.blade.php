@extends('site.layouts.basic')

@section('title', $title)

@section('content')
    <div class="featured-content">

        <div class="display-left">
            <div class="information">
                <h1>Sistema Super Gestão</h1>
                <p>Software para gestão empresarial ideal para sua empresa.<p>
                <div class="call">
                    <img src="{{ asset('/img/check.png') }}">
                    <span class="white-text">Gestão completa e descomplicada</span>
                </div>
                <div class="call">
                    <img src="{{ asset('/img/check.png') }}">
                    <span class="white-text">Sua empresa na nuvem</span>
                </div>
            </div>

            <div class="video">
                <img src="{{ asset('/img/player_video.jpg') }}">
            </div>
        </div>

        <div class="display-right">
            <div class="contact">
                <h1>Contato</h1>
                <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
                    @component('site.layouts.components.form_contact', ['classe' => 'white-border', 'reason_contacts' => $reason_contacts])
                    @endcomponent
            </div>
        </div>
    </div>
@endsection
