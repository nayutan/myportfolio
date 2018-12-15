@php
    $title = env('APP_NAME');
@endphp

@extends('layouts.my')
@section('title', 'demo-laravel-crud')
@section('content')

<div class="container">
    <h1>{{ $title }}</h1>
    <p>
        {{ __('ぷろだくと') }}
    </p>
    <ul>
        <li>
          こんなものつくりましたにゃ
        </li>
    </ul>
    <h2>{{ __('画像とリンク') }}</h2>
    <p>☆☆☆</p>

</div>
@endsection
