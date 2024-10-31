@extends('layout')

{{-- メインコンテンツ --}}
@section('contets')
        <h1>ユーザー登録</h1>
        @if ($errors->any())
            <div>
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
            </div>
        @endif
        <form action="/user/register" method="post">
            @csrf
            名前：<input name="name" type="name"><br>
            email：<input name="email" type="email"><br>
            パスワード：<input  name="password" type="password"><br>
            <button class="btn btn-primary mb-3">登録する</button>
        </form>
@endsection