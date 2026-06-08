<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>@yield('header-title', 'MarketFlow | Маркетплейс')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<!-- НАВБАР МАРКЕТПЛЕЙСА с поиском -->
<div class="navbar">
    <div class="inner">
        <div class="logo">⚡ MarketFlow</div>
        <div class="search-wrapper">
            @yield('is_search-bar')
        </div>  
        <div class="href-list">
            <ul>
                @yield('is_admin')
                <li><a href="{{ route('home') }}">Главная</a></li>
                <li><a href="{{ route('account') }}">Аккаунт</a></li>
                <li><a href="{{ route('cart') }}">🛒 Корзина</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="main">
    @yield('content')
</div>

<footer class="footer-market">
    <p>© 2025 MarketFlow — универсальный маркетплейс. Товары от проверенных продавцов со всего мира.</p>
    <p style="margin-top: 0.5rem; opacity: 0.7;">Продавайте на маркетплейсе · Покупайте с кешбэком</p>
</footer>


</body>
</html>