@php
    $title = env('APP_NAME');
@endphp

@extends('layouts.my')
@section('title', 'demo-laravel-crud')
@section('content')

<div class="container">
    <h1>{{ $title }}</h1>
          こんなことやってきましたにゃ
    <h2>{{ __('学歴') }}</h2>
    <div class="row mt-1">
        <div class="col-3 skill1">
          期間
        </div>
        <div class="col-4 skill2">
          在籍校
        </div>
        <div class="col-5 skill1">
          概略
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-3 skill2">
          2004年4月<br>～2007年3月
        </div>
        <div class="col-4 skill1">
          山形県立米沢興譲館高校<br>
          普通科
        </div>
        <div class="col-5 skill2">
          山形県米沢市にある公立高校<br>
          部活は中学からやっていた軟式テニスを継続<br>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-3 skill2">
          2007年4月<br>～2012年3月
        </div>
        <div class="col-4 skill1">
          東北芸術工科大学<br>
          デザイン工学部<br>
          建築・環境デザイン学科
        </div>
        <div class="col-5 skill2">
          内装デザインに憧れがあり入学。<br>
          できるだけ色々な経験を得ようと学科を超えた交流や単位の取得に尽力するも、もともとやりたかった内装デザインからは遠ざかる。
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-3 skill2">
          2012年4月<br>～2014年3月
        </div>
        <div class="col-4 skill1">
          東北電子専門学校<br>
          アドバンス・システムエンジニア科
        </div>
        <div class="col-5 skill2">
          建築に限らず、ものを作りたいというふんわりとした意思があり、プログラミングを学べる方向で学び直すことを選択。<br>
          主にC+について教わりながら、資格の取得として基本情報技術者を取得
        </div>
    </div>
    <h2 class="mt-4">{{ __('職歴') }}</h2>
      <div class="row mt-1">
          <div class="col-2 skill1">
            期間
          </div>
          <div class="col-3 skill2">
            会社名
          </div>
          <div class="col-3 skill1">
            職種
          </div>
          <div class="col-4 skill2">
            概略
          </div>
      </div>
      <div class="row mt-1">
          <div class="col-2 skill2">
            2014年4月<br>
            ～2014年10月
          </div>
          <div class="col-3 skill1">
            明光ネットワークジャパン<br>
            東仙台教室
          </div>
          <div class="col-3 skill2">
            学習塾<br>
            講師
          </div>
          <div class="col-4 skill1">
            塾講師として小学1年～高校3年の国、数、理、英についてを担当。約半年間で担当した生徒の人数は13名ほど。
          </div>
      </div>
      <div class="row mt-1">
          <div class="col-2 skill2">
            2014年11月<br>～現在
          </div>
          <div class="col-3 skill1">
            株式会社デジタルハーツ<br>
            仙台Lab.
          </div>
          <div class="col-3 skill2">
            業務部<br>
            クライアントマネージャ<br>
            タイトルリーダー
          </div>
          <div class="col-4 skill1">
            仙台拠点立ち上げスタッフとして15名採用<br>
            案件リーダーとして、コンシューマーゲーム、モバイルゲーム、アーケードゲーム、ウェブサイトやPCソフトの検証など、幅広い分野でのリーダー業務を経験<br>
            中でも最大規模のものは、コンシューマーゲームソフトのリーダーで、拠点分割を行った上で最大52名のチームを統括するリーダーを担当。クライアントへの進捗の報告やスケジュールの相談、現場指揮などを中心に行った。
          </div>
      </div>


    <h2 class="mt-4">{{ __('やりたいこと') }}</h2>
    <div class="row">
        <div class="col-4 skill1">
          あ
        </div>
        <div class="col-4 skill2">
          い
        </div>
        <div class="col-4 skill1">
          う
        </div>
    </div>

</div>
@endsection
