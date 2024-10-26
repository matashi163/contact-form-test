@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/admin.css')}}">
<style>
    .modal{
        display: none;
    }
</style>
@endsection

@section('content')
<hender class="header">
    <h1 class="header__logo">
        <a href="/">
            FashionablyLate
        </a>
    </h1>
    <form action="/logout" method="post" class="form__logout">
        @csrf
        <button class="logout__button">logout</button>
    </form>
</hender>
<main>
    <div class="admin__content">
        <h2 class="admin__title">
            Admin
        </h2>
        <form action="/search" method="get" class="search__form">
            <input type="text" name="word" placeholder="名前やメールアドレスを入力してください" class="search__text">
            <select name="gender" class="search__gender">
                <option value="" selected hidden>性別</option>
                <option value="1">男性</option>
                <option value="2">女性</option>
                <option value="3">その他</option>
            </select>
            <select name="category_id" class="search__category">
                <option value="" selected hidden>お問い合わせの種類</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->content}}</option>
                @endforeach
            </select>
            <input type="date" name="date" class="search__date">
            <button name="search_button" value="submit" class="search__submit">検索</button>
            <button name="search_button" value="reset" class="search__reset">リセット</button>
        </form>
        <table class="contact__table">
            <tr class="table__header">
                <th class="table__header--name">お名前</th>
                <th class="table__header--gender">性別</th>
                <th class="table__header--email">メールアドレス</th>
                <th class="table__header--category">お問い合わせの種類</th>
                <th class="table__header--detail"></th>
            </tr>
            @foreach($contacts as $contact)
                <tr class="tabel__content">
                    <td class="table__content--name">{{$contact->last_name . $contact->first_name}}</td>
                    <td class="table__content--gender">
                        @if($contact->gender == 1)
                        男性
                        @elseif($contact->gender == 2)
                        女性
                        @elseif($contact->gender == 3)
                        その他
                        @endif
                    </td>
                    <td class="table__content--email">{{$contact->email}}</td>
                    <td class="table__content--category">{{$contact['category']['content']}}</td>
                    <td class="table__content--detail">
                        <button id="openModal" class="modal__open--button">詳細</button>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$contacts->links()}}
    </div>
</main>
<div id="modal" class="modal">
    <div class="modal__content">
        <span class="modal__close--button" id="closeModalButton">×</span>
        <h2>モーダルの内容</h2>
        <p>これはシンプルなモーダルです。</p>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', () => {
    console.log('DOM fully loaded and parsed');
    const modal = document.getElementById('modal');
    const openModalButtons = document.querySelectorAll('.modal__open--button');
    const closeModalButton = document.getElementById('.modal__close--button');
    openModalButtons.forEach(openModalButton => {
        openModalButton.addEventListener('click', () => {
            modal.style.display = 'flex';
        });
    });
});
</script>
@endsection
