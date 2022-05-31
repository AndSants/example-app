@extends('app.layouts.basic')

@section('title', $title)

@section('content')
    <div class="page-content">
        <div class="page-title-app">
            <h1>Fornecedor - Listar</h1>
        </div>

        @include('app.provider.menus_provider.menu')

        <div class="page-information">
            <div class="provider-form-list">
                <table border="1" width="100%">
                    <thead>
                        <th>#</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Site</th>
                        <th>UF</th>
                        <th>Data Cadastro</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($providers as $provider)

                            <tr>
                                <td>{{ $provider->id }} </td>
                                <td>{{ $provider->name }} </td>
                                <td>{{ $provider->email }} </td>
                                <td>{{ $provider->site }} </td>
                                <td>{{ $provider->federative_union }} </td>
                                <td>{{ $provider->created_at }} </td>
                                <td><a href="{{ route('app.provider.edit', $provider->id) }}">Editar</a></td>
                                <td><button>Excluir</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        {{ $providers->appends($request_all)->links() }}
            </div>
        </div>
    </div>

    @include('app.layouts.menus.footer')
@endsection
