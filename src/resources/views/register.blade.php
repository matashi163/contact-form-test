@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/register')}}">
@endsection

@section('content')
<header class="header">
    <h1 class="header__logo">
        <a href="/">
            FashionablyLate
        </a>
    </h1>
    <a href="/login" class="header__button">
        login
    </a>
</header>
<main>
    <div class="register__content">
        <h2 class="register__title">
            Register
        </h2>
        <form action="/register" method="post" class="register__form">
            @csrf
            <div class="form__group">
                <p class="form__group--lavel">お名前</p>
                <input type="text" name="name" value="{{old('name')}}" placeholder="例:山田 太郎" class="form__group--content">
                @error('name')
                <div class="form__group--error">
                    {{$errors->first('name')}}
                </div>
                @enderror
            </div>
            <div class="form__group">
                <p class="form__group--lavel">メールアドレス</p>
                <input type="email" name="email" value="{{old('email')}}" placeholder="例:test@example.com" class="form__group--content">
                @error('email')
                <div class="form__group--error">
                    {{$errors->first('email')}}
                </div>
                @enderror
            </div>
            <div class="form__group">
                <p class="form__group--lavel">パスワード</p>
                <input type="password" name="password" placeholder="例:coachtech1106" class="form__group--content">
                @error('password')
                <div class="form__group--error">
                    {{$errors->first('password')}}
                </div>
                @enderror
            </div>
            <button class="form__button">登録</button>
        </form>
    </div>
</main>
@endsection