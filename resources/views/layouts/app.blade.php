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
                    <li><a href="{{ route('logout') }}">Выход</a></li>
                    @if(Auth::user()->role === 'admin')
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Админ-панель</a></li>
                    @endif
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