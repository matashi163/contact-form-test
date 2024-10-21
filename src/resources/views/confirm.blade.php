@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/confirm')}}">
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
<main class="main">
    <h2 class="title">
        Confirm
    </h2>
    <form action="/contact" method="post" class="comfirm__form">
        @csrf
        <table class="form__table">
            <tr class="form__table--row">
                <td class="form__table--lavel">お名前</td>
                <td class="form__table--content">
                    <input type="text" name="name" value="matashi">
                </td>
            </tr>
            <tr class="form__table--row">
                <td class="form__table--lavel">性別</td>
                <td class="form__table--content">
                    <input type="text" name="gender" value="matashi">
                </td>
            </tr>
            <tr class="form__table--row">
                <td class="form__table--lavel">メールアドレス</td>
                <td class="form__table--content">
                    <input type="text" name="email" value="matashi">
                </td>
            </tr>
            <tr class="form__table--row">
                <td class="form__table--lavel">電話番号</td>
                <td class="form__table--content">
                    <input type="text" name="tel" value="matashi">
                </td>
            </tr>
            <tr class="form__table--row">
                <td class="form__table--lavel">住所</td>
                <td class="form__table--content">
                    <input type="text" name="address" value="matashi">
                </td>
            </tr>
            <tr class="form__table--row">
                <td class="form__table--lavel">建物名</td>
                <td class="form__table--content">
                    <input type="text" name="building" value="matashi">
                </td>
            </tr>
            <tr class="form__table--row">
                <td class="form__table--lavel">お問い合わせの種類</td>
                <td class="form__table--content">
                    <input type="text" name="category" value="matashi">
                </td>
            </tr>
            <tr class="form__table--row">
                <td class="form__table--lavel">お問い合わせ内容</td>
                <td class="form__table--content">
                    <input type="text" name="detail" value="matashi">
                </td>
            </tr>
        </table>
        <button class="form__button">
            送信
        </button>
        <a href="/" class="form__modify">
            修正
        </a>
    </form>
</main>
@endsection