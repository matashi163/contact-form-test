@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')
<header class="header">
    <h1 class="header__logo">
        <a href="/">
            FashionablyLate
        </a>
    </h1>
    <form action="" class="login">
        @csrf
        <button class="login__button">
            login
        </button>
    </form>
</header>
<main>
    <h2 class="title">
        Contact
    </h2>
    <form action="/confirm" method="post" class="contact__form">
        @csrf
        <div class="form__input">
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__lavel--item">お名前</span>
                    <span class="form__lavel--required">※</span>
                </div>
                <div class="form__group-content">
                    <input type="text" name="first_name" class="form__name">
                    <input type="text" name="last_name" class="form__name">
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__lavel--item">性別</span>
                    <span class="form__lavel--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__gender">
                        <input type="radio" name="gender" value="1" class="form__gender--button">
                        <span class="form__gender--lavel">男性</span>
                    </div>
                    <div class="form__gender">
                        <input type="radio" name="gender" value="2" class="form__gender--button">
                        <span class="form__gender--lavel">女性</span>
                    </div>
                    <div class="form__gender">
                        <input type="radio" name="gender" value="3" class="form__gender--button">
                        <span class="form__gender--lavel">その他</span>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__lavel--item">メールアドレス</span>
                    <span class="form__lavel--required">※</span>
                </div>
                <div class="form__group-content">
                    <input type="text" name="email" class="form__email">
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__lavel--item">電話番号</span>
                    <span class="form__lavel--required">※</span>
                </div>
                <div class="form__group-content">
                    <input type="tel" name="tel" class="form__tel">
                    <span>-</span>
                    <input type="tel" name="tel" class="form__tel">
                    <span>-</span>
                    <input type="tel" name="tel" class="form__tel">
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__lavel--item">住所</span>
                    <span class="form__lavel--required">※</span>
                </div>
                <div class="form__group-content">
                    <input type="text" name="address" class="form__address">
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__lavel--item">建物名</span>
                </div>
                <div class="form__group-content">
                    <input type="text" name="building" class="form__building">
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__lavel--item">お問い合わせの種類</span>
                    <span class="form__lavel--required">※</span>
                </div>
                <div class="form__group-content">
                    <select name="cotegory" class="form__category">
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__lavel--item">お問い合わせ内容</span>
                    <span class="form__lavel--required">※</span>
                </div>
                <div class="form__group-content">
                    <textarea name="detail" class="form__detail"></textarea>
                </div>
            </div>
        </div>
        <div class="form_button">
            <button>確認画面</button>
        </div>
    </form>
</main>
@endsection