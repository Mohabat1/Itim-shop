@extends('layout')

@section('title', 'Авторизация')

@section('main_content')
    <div class="container mt-5">
        <h2>Авторизация</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Войти</button>
            <p class="mt-3">Еще нет аккаунта? <a href="{{ route('register') }}">Зарегистрируйтесь</a></p>
        </form>
    </div>
@endsection

