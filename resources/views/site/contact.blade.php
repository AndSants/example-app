@extends('site.layouts.basic')

@section('title', $title)

@section('content')
<div class="page-content">
    <div class="page-title">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="page-information">
            <div class="main-contact">
                @component('site.layouts.components.form_contact', ['classe' => 'black-border'])
                    <p>A nossa equipe analisará sua mensagem e retornaremos em breve.</p>
                    <p>Nosso tempo médio de resposta é de 48 horas.</p>
                @endcomponent
            </div>
        </div>
    </div>

    @include('site.layouts.menus.footer')
@endsection
