@extends('layouts.app')

@section('content')
    <h1>Регистрация</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password">
            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password_confirmation">Подтвердите пароль:</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
        <button type="submit">Зарегистрироваться</button>
    </form>
@endsection