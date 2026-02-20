<!-- お問い合わせフォーム画面 html-->

@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/create.css') }}" />
@endsection



@section('content')


<div class="contact-wrapper">

    <form class="contact-form" action="/contacts/confirm" method="post" >
        @csrf

        {{-- お名前 --}}
        <div class="form-group">
            <label>お名前 <span class="required">※</span></label>
            <div class="name-group">
                <input type="text" name="last_name" placeholder="例: 山田">
                <input type="text" name="first_name" placeholder="例: 太郎">
            </div>
        </div>

        {{-- 性別 --}}
        <div class="form-group">
            <label>性別 <span class="required">※</span></label>
            <div class="radio-group">
                <label><input type="radio" name="gender" value="1"> 男性</label>
                <label><input type="radio" name="gender" value="2"> 女性</label>
                <label><input type="radio" name="gender" value="3"> その他</label>
            </div>
        </div>

        {{-- メール --}}
        <div class="form-group">
            <label>メールアドレス <span class="required">※</span></label>
            <input type="email" name="email" placeholder="例: test@example.com">
        </div>

        {{-- 電話番号 --}}
        <div class="form-group">
    <label>電話番号 <span class="required">※</span></label>
    <div class="tel-group">
        <input type="text" name="tel">
    </div>




        {{-- 住所 --}}
        <div class="form-group">
            <label>住所 <span class="required">※</span></label>
            <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
        </div>

        {{-- 建物名 --}}
        <div class="form-group">
            <label>建物名</label>
            <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101">
        </div>

        {{-- お問い合わせ種類 --}}
        <div class="form-group">
            <label>お問い合わせの種類 <span class="required">※</span></label>
            <select name="category_id">
                <option value="">選択してください</option>
                <option value="1">商品について</option>
                <option value="2">注文について</option>
                <option value="3">その他</option>
            </select>
        </div>

        {{-- 内容 --}}
        <div class="form-group">
            <label>お問い合わせ内容 <span class="required">※</span></label>
            <textarea name="detail" rows="5" placeholder="お問い合わせ内容をご記載ください"></textarea>
        </div>

        <div class="btn-area">
            <button type="submit" class="confirm-btn">確認画面</button>
        </div>
    </form>
</div>


@endsection

‰