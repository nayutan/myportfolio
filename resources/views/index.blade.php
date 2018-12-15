@php
    $title = env('APP_NAME');
@endphp

@extends('layouts.my')
@section('title', 'demo-laravel-crud')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <p>
        {{ __('My portfolio of Laravel 5.7 on Heroku.') }}
    </p>
    <ul>
        <li>
          ぽーとふぉりおですにゃ
        </li>
    </ul>
    <h2>{{ __('自己紹介') }}</h2>
    <p>自己紹介書きますにゃ</p>

    <h2>{{ __('やりたいこと') }}</h2>
</div>
@endsection
