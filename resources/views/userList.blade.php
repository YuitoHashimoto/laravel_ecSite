@extends('adminlte::page')

@section('title', 'お客様情報')

@section('content_header')
    <h1>お客様情報</h1>
@stop

@section('content')
<form action="{{url('userList/search')}}" method="GET">
    <input type="text" placeholder="メールアドレス" name="searchEmail">
    <input type="text" placeholder="お名前" name="searchName">
    <button type="submit">検索</button>
</form>
<div class="panel panel-blur with-scroll table-panel animated zoomIn col-lg-6 col-md-12" >
    <table class="panel-body table table-hover">
        <thead>
            <tr class="black-muted-bg">
                <th>お客様ID</th>
                <th>メールアドレス</th>
                <th>名前</th>
                <th>ふりがな</th>
                <th>アカウント作成日</th>
            </tr>
        </thead>
        @foreach($userList as $user)
            <tbody onclick="return window.open('/userList/{{$user->id}}')">
                <tr class="no-top-border ng-scope">
                    <td>{{$user->id}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->nameRuby}}</td>
                    <td>{{$user->created_at}}</td>
            </tbody>
        @endforeach
    </table>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop