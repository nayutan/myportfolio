@php
    $title = env('APP_NAME');
@endphp

@extends('layouts.my')
@section('title', 'demo-laravel-crud')
@section('content')

<div class="container">
    <h1>活動</h1>
    <div class="row mt-1">
        <div class="col-4 skill2">
          活動
        </div>
        <div class="col-8 skill1">
          内容
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-4 skill1">
          PHPカンファレンス
        </div>
        <div class="col-8 skill2">
          PHPカンファレンス仙台2019への参加(予定)<br>
          2019年1月26日(土)
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-4 skill1">
          運営者ギルドへの参加
        </div>
        <div class="col-8 skill2">
          Twitterアプリケーション「マシュマロ」の作成者である「だーすー」さんの作ったSlackグループ<br>
          Webサービスの運営を行っている人、またそれを目指している人の集まり。<br>
          Laravelでの開発を行うにあたり、不明点の質問などを行ったり、Bugbashというチャンネルでサービスのバグ出し、使用感に関する指摘等を行っている。<br>
          目標は2019年中に自主開発で何らかのサービスをリリースすること。
        </div>
    </div>
    <h1 class="mt-4">制作</h1>
    <div class="row mt-1">
        <div class="col-4 skill2">
          活動
        </div>
        <div class="col-8 skill1">
          内容
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-4 skill1">
          自己紹介用ポートフォリオ作成
        </div>
        <div class="col-8 skill2">
          本ポートフォリオ
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-4 skill1">
          アウトプット用ブログ
        </div>
        <div class="col-8 skill2">
          <a href="https://sodenashi-swing.hatenablog.jp/">袖はなくとも振りたい</a><br>
          IgA腎症の経験や、Laravelの独学中に学んだことを些細でもアウトプットしようという試みです。
        </div>
    </div>
    <h1 class="mt-4">制作</h1>
      <p>Tシャツデザイン(クリックで販売ページへ)</p>
    <div class="row mt-1">
      <div class="col-4 offset-md-2 skill2">
        <a href="https://www.ttrinity.jp/product/2973153#47"><img src="img/product001.jpg" class="skill-img"></a>
      </div>
      <div class="col-4 skill2">
        <a href="https://www.ttrinity.jp/product/4148147#1"><img src="img/product002.jpg" class="skill-img"></a>
      </div>
      <div class="col-4 skill2">
        <a href="https://www.ttrinity.jp/product/4164224#19"><img src="img/product003.jpg" class="skill-img"></a>
      </div>
      <div class="col-4 skill2">
        <a href="https://www.ttrinity.jp/product/4164286#4"><img src="img/product004.jpg" class="skill-img"></a>
      </div>
      <div class="col-4 skill2">
        <a href="https://www.ttrinity.jp/product/2393142#1"><img src="img/product005.jpg" class="skill-img"></a>
      </div>
    </div>
    <div class="row mt-2">
      <p class="mt-1">自作のPC用壁紙</p>
      <div class="col-10 offset-md-1 skill2">
        <img src="img/Re.jpg" class="skill-img">
      </div>

    </div>

</div>
@endsection
