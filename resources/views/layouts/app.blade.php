<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('products') }}">Продукты</a></li>
                @guest
                    <li><a href="{{ route('login') }}">Вход</a></li>
                    <li><a href="{{ route('register') }}">Регистрация</a></li>
                @else
                    <li><a href="{{ route('orders') }}">Мои заказы</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выход</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
    </footer>
</body>
</html>