<div class="display-top">
    <div class="logo">
        <img src="{{ asset('/img/logo.png') }}">
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.home') }}">Home</a></li>
            <li><a href="{{ route('app.client') }}">Cliente</a></li>
            <li><a href="{{ route('app.product') }}">Produto</a></li>
            <li><a href="{{ route('app.provider') }}">Fornecedor</a></li>
            <li><a href="{{ route('app.logout') }}">Logout</a></li>
        </ul>
    </div>
</div>
