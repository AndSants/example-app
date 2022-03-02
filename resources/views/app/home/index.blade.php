@extends('app.layouts.basic')

@section('title', $title)

@section('content')
    <div class="page-content">
        <div class="page-title">
            <h1>Home</h1>
        </div>
    </div>

    @include('app.layouts.menus.footer')
@endsection
