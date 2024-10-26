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
</header>
<main>
    <div class="contact__content">
        <h2 class="contact__title">
            Contact
        </h2>
        <form action="/confirm" method="post" class="contact__form">
            @csrf
            <div class="form__input">
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__lavel--item">お名前</span>
                        <span class="form__lavel--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <input type="text" name="last_name" value="{{old('last_name')}}" placeholder="例:山田" class="form__name">
                        @error('last_name')
                        <div class="form__group--error">
                            <p>{{$errors->first('last_name')}}</p>
                        </div>
                        @enderror
                        <input type="text" name="first_name" value="{{old('first_name')}}" placeholder="例:太郎"  class="form__name">
                        @error('first_name')
                        <div class="form__group--error">
                            <p>{{$errors->first('first_name')}}</p>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__lavel--item">性別</span>
                        <span class="form__lavel--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__gender">
                            <input type="radio" name="gender" value="1" {{old('gender') == '1' ? 'checked' : ''}} class="form__gender--button" checked>
                            <span class="form__gender--lavel">男性</span>
                        </div>
                        <div class="form__gender">
                            <input type="radio" name="gender" value="2" {{old('gender') == '2' ? 'checked' : ''}} class="form__gender--button">
                            <span class="form__gender--lavel">女性</span>
                        </div>
                        <div class="form__gender">
                            <input type="radio" name="gender" value="3" {{old('gender') == '3' ? 'checked' : ''}} class="form__gender--button">
                            <span class="form__gender--lavel">その他</span>
                        </div>
                        @error('gender')
                        <div class="form__group--error">
                            <p>{{$errors->first('gender')}}</p>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__lavel--item">メールアドレス</span>
                        <span class="form__lavel--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <input type="text" name="email" value="{{old('email')}}" placeholder="例:test@example.com" class="form__email">
                        @error('email')
                        <div class="form__group--error">
                            <p>{{$errors->first('email')}}</p>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__lavel--item">電話番号</span>
                        <span class="form__lavel--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <input type="tel" name="tel_beginning" value="{{old('tel_beginning')}}" placeholder="080" class="form__tel">
                        <span>-</span>
                        <input type="tel" name="tel_middle" value="{{old('tel_middle')}}" placeholder="1234" class="form__tel">
                        <span>-</span>
                        <input type="tel" name="tel_end" value="{{old('tel_end')}}" placeholder="5678" class="form__tel">
                        @if($errors->has('tel_beginning'))
                        <div class="form__group--error">
                            <p>{{$errors->first('tel_beginning')}}</p>
                        </div>
                        @elseif($errors->has('tel_middle'))
                        <div class="form__group--error">
                            <p>{{$errors->first('tel_middle')}}</p>
                        </div>
                        @elseif($errors->has('tel_end'))
                        <div class="form__group--error">
                            <p>{{$errors->first('tel_end')}}</p>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__lavel--item">住所</span>
                        <span class="form__lavel--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <input type="text" name="address" value="{{old('address')}}" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" class="form__address">
                        @error('address')
                        <div class="form__group--error">
                            <p>{{$errors->first('address')}}</p>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__lavel--item">建物名</span>
                    </div>
                    <div class="form__group--content">
                        <input type="text" name="building" value="{{old('building')}}" placeholder="例:千駄ヶ谷マンション101" class="form__building">
                        @error('building')
                        <div class="form__group--error">
                            <p>{{$errors->first('building')}}</p>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__lavel--item">お問い合わせの種類</span>
                        <span class="form__lavel--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <select name="category_id" class="form__category">
                            <option value="" selected hidden>選択してください</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" {{old('category_id') == $category->id ? 'selected' : ''}}>{{$category->content}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="form__group--error">
                            <p>{{$errors->first('category_id')}}</p>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__lavel--item">お問い合わせ内容</span>
                        <span class="form__lavel--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <textarea name="detail" value="{{old('detail')}}" placeholder="お問い合わせ内容をご記載ください" class="form__detail"></textarea>
                        @error('detail')
                        <div class="form__group--error">
                            <p>{{$errors->first('detail')}}</p>
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button>確認画面</button>
            </div>
        </form>
    </div>
</main>
@endsection