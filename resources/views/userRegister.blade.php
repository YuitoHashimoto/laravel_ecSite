@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ (Route('userInsert')) }}" style="display:flex; flex-direction:column;">
        {{ csrf_field() }}
        <label for="">メールアドレス：
            <input type="email" name="email">
        </label>
        <label for="">パスワード：
            <input type="password" name="password">
        </label>
        <label for="">確認パスワード：
            <input type="password" name="conPassword">
        </label>
        <label for="">お名前：
            <input type="" name="name" placeholder="例:田中　太郎">
        </label>
        <label for="">ふりがな：
            <input type="" name="nameRuby" placeholder="例:たなか　たろう">
        </label>
        <button type="submit">送信</button>
    </form>
@endsection