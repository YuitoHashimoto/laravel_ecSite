@extends('adminlte::page')

@section('title', 'お問い合わせリスト')

@section('content_header')
    <h1>お問い合わせ管理</h1>
@stop

@section('content')
<div class="panel panel-blur with-scroll table-panel animated zoomIn col-lg-6 col-md-12">
    <table class="panel-body table table-hover">
        <thead>
            <tr class="black-muted-bg" style="white-space: nowrap">
                <th>お問い合わせID</th>
                <th>メールアドレス</th>
                <th>お問い合わせ内容</th>
                <th>電話番号</th>
                <th>お問い合わせ時間</th>
            </tr>
        </thead>
        @foreach($inquiry as $inquiryList)
            <tbody onclick="return window.open('/inquiryList/edit?inquiryId={{$inquiryList->id}}')">
                <tr class="no-top-border ng-scope">
                    <td>{{$inquiryList->id}}</td>
                    <td>{{$inquiryList->email}}</td>
                    <td>{{$inquiryList->inquiry}}</td>
                    <td>{{$inquiryList->telNumber}}</td>
                    <td>{{$inquiryList->created_at}}</td>
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