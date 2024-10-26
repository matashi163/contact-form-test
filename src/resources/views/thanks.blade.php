@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/thanks.css')}}">
@endsection

@section('content')
<main>
    <div class="thanks__content">
        <p class="thanks__text">お問い合わせありがとうございました</p>
        <p class="thanks__background">Thank you</p>
        <form action="/" method="post" class="home__form">
            @csrf
            <button class="form__button">HOME</button>
        </form>
    </div>
    
</main>
@endsection