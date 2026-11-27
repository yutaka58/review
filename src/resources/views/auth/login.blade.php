@extends('layouts.header')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('content')
<main>
    <form type="text" action="login.blade.php" method="post">
    @csrf
        <div class="login-content">
            <div class="login-form">
                <h1>ログイン</h1>
            </div>
            <div class="login-form">
                <p>メールアドレス</p>
                <input type="text">
            </div>
            <div class="login-form">
                <p>パスワード</p>
                <input type="text">
            </div>
            <div class="login-form">
                <button>ログインする</button>
            </div>
            <div class="login-form">
                <a href="auth/register.blade.php">会員登録はこちら</a>
            </div>

        </div>
    </form>
</main>

@endsection
