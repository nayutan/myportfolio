@php
    $title = env('APP_NAME');
@endphp

@extends('layouts.my')
@section('title', 'demo-laravel-crud')
@section('content')

<div class="container">
    <h1>{{ $title }}</h1>
    <p>
        {{ __('My portfolio of Laravel 5.7') }}
    </p>
    <div class="row">
      <div class="col-5">
        <ul class="listStyle">
            <li>
              名前：淀野 那佑太
            </li>
            <li>
              生年月日：1988年4月25日生まれ(30歳)
            </li>
            <li>
              性別：男性
            </li>
        </ul>
      </div>
      <div class="col-7 top-bgi">

      </div>
    </div>
      <h2 class="mt-4">{{ __('自己紹介') }}</h2>
      <div class="row skill">
        <div class="col-12">
          QA(品質管理)のアウトソーシング業務を行っている会社で<br>
          チームリーダー業務、及びマネージメント業務を行っています。<br>
          Web開発の実務経験はありませんが、製品不具合の検出に関するノウハウを持って<br>
          WebサイトやWebサービスを作成できるようになりたいという思いから<br>
          本ポートフォリオサイトを作成しました。
        </div>
      </div>

      <h2 class="mt-4">{{ __('仕事に対する姿勢') }}</h2>

      <div class="row mt-1">
          <div class="col-4 skill2">
            やりがい<br>
            理解・納得・共感
          </div>
          <div class="col-8 skill1">
            評価、スコアを得ること。自分の価値を高めていくこと<br>
            提案に対する納得や共感に強い快感を覚える。より良い提案を常に続けていきたい
          </div>
      </div>
      <div class="row mt-1">
          <div class="col-4 skill2">
            目的・目標<br>
            成長したい<br>
            勤務
          </div>
          <div class="col-8 skill1">
            会社やチームで統一されていて明らかになっていて欲しい。みんなで目指したい<br>
            スキルや知識、経験を得たい、高めあえる職場が理想、自分の価値を上げたい<br>
            時間内にやるべきことをきっちりと終わらせたい、集中して時間あたりの効果を上げたい
          </div>
      </div>
      <div class="row mt-1">
          <div class="col-4 skill2">
            嘘はつかない<br>
            三方よしを目指す<br>
            健康第一
          </div>
          <div class="col-8 skill1">
            出来ないことは出来ない、その上でどうすれば理想に近づけるかを模索したい<br>
            誰かにだけ苦しい思いをさせたくない、皆良いならそれが一番<br>
            毎日健康で、予定されていない穴を空けない。体調管理は万全に<br>
          </div>
      </div>

</div>
@endsection
