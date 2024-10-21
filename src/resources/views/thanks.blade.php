@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/thanks.css')}}">
@endsection

@section('content')
<main>
    <p class="thanks__text">お問い合わせありがとうございました</p>
    <p class="thanks__background">Thank you</p>
    <form action="/home" method="post" class="">
        @csrf
        <button class="home-button">HOME</button>
    </form>
</main>
@endsection