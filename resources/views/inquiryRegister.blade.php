@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ (Route('inquiryInsert')) }}" style="display:flex; flex-direction:column;">
        {{ csrf_field() }}
        <label for="">メールアドレス：
            <input type="" name="email">
        </label>
        <label for="">お問い合わせ内容：
            <textarea name="inquiry"></textarea>
        </label>
        <label for="">電話番号：
            <input type="tel" name="telNumber">
        </label>
        <button type="submit">送信</button>
    </form>
@endsection