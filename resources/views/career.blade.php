@php
    $title = env('APP_NAME');
@endphp

@extends('layouts.my')
@section('title', 'demo-laravel-crud')
@section('content')

<div class="container">
    <h1>{{ $title }}</h1>
    <p>
        {{ __('経歴') }}
    </p>
    <ul>
        <li>
          こんなことやってきましたにゃ
        </li>
    </ul>
    <h2>{{ __('経歴') }}</h2>
    <p>仕事歴書きますにゃ</p>

    <h2>{{ __('やりたいこと') }}</h2>
</div>
@endsection
