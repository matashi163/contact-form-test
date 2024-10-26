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
</header>
<main>
    <div class="confirm__content">
        <h2 class="confirm__title">
            Confirm
        </h2>
        <form action="/contact" method="post" class="comfirm__form">
            @csrf
            <table class="form__table">
                <tr class="form__table--row">
                    <td class="form__table--lavel">お名前</td>
                    <td class="form__table--content">
                        <input type="text" name="name" value="{{$last_name . ' ' . $first_name}}" readonly>
                        <input type="hidden" name="first_name" value="{{$first_name}}">
                        <input type="hidden" name="last_name" value="{{$last_name}}">
                    </td>
                </tr>
                <tr class="form__table--row">
                    <td class="form__table--lavel">性別</td>
                    <td class="form__table--content">
                        <input type="text" name="gender" value="{{$gender}}" readonly>
                    </td>
                </tr>
                <tr class="form__table--row">
                    <td class="form__table--lavel">メールアドレス</td>
                    <td class="form__table--content">
                        <input type="text" name="email" value="{{$email}}" readonly>
                    </td>
                </tr>
                <tr class="form__table--row">
                    <td class="form__table--lavel">電話番号</td>
                    <td class="form__table--content">
                        <input type="text" name="tel" value="{{$tel_beginning . $tel_middle . $tel_end}}" readonly>
                    </td>
                </tr>
                <tr class="form__table--row">
                    <td class="form__table--lavel">住所</td>
                    <td class="form__table--content">
                        <input type="text" name="address" value="{{$address}}" readonly>
                    </td>
                </tr>
                <tr class="form__table--row">
                    <td class="form__table--lavel">建物名</td>
                    <td class="form__table--content">
                        <input type="text" name="building" value="{{$building}}" readonly>
                    </td>
                </tr>
                <tr class="form__table--row">
                    <td class="form__table--lavel">お問い合わせの種類</td>
                    <td class="form__table--content">
                        <input type="text" name="category_id" value="{{$category_id}}" readonly>
                    </td>
                </tr>
                <tr class="form__table--row">
                    <td class="form__table--lavel">お問い合わせ内容</td>
                    <td class="form__table--content">
                        <input type="text" name="detail" value="{{$detail}}" readonly>
                    </td>
                </tr>
            </table>
            <button name="confirm_button" value="submit" class="form__submit">
                送信
            </button>
            <button name="confirm_button" value="modify" class="form__modify">
                修正
            </button>
        </form>
    </div>
</main>
@endsection