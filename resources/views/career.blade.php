@php
    $title = env('APP_NAME');
@endphp

@extends('layouts.my')
@section('title', 'demo-laravel-crud')
@section('content')

<div class="container">
    <h1>経歴</h1>

    <h2>{{ __('学歴') }}</h2>
    <div class="row mt-1">
        <div class="col-2 skill1">
          期間
        </div>
        <div class="col-2 skill2">
          在籍校
        </div>
        <div class="col-8 skill1">
          概略
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-2 skill2">
          2004年4月<br>～2007年3月
        </div>
        <div class="col-2 skill1">
          山形県立米沢興譲館高校<br>
          普通科
        </div>
        <div class="col-8 skill2">
          山形県米沢市にある公立高校<br>
          部活は中学からやっていた軟式テニスを継続<br>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-2 skill2">
          2007年4月<br>～2012年3月
        </div>
        <div class="col-2 skill1">
          東北芸術工科大学<br>
          デザイン工学部<br>
          建築・環境デザイン学科
        </div>
        <div class="col-8 skill2">
          内装デザインに憧れがあり入学。<br>
          できるだけ色々な経験を得ようと学科を超えた交流や単位の取得に尽力するも、もともとやりたかった内装デザインからは遠ざかる。
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-2 skill2">
          2012年4月<br>～2014年3月
        </div>
        <div class="col-2 skill1">
          東北電子専門学校<br>
          アドバンス・システムエンジニア科
        </div>
        <div class="col-8 skill2">
          建築に限らず、ものを作りたいというふんわりとした意思があり、プログラミングを学べる方向で学び直すことを選択。<br>
          主にC+について教わりながら、資格の取得として基本情報技術者を取得
        </div>
    </div>
    <h2 class="mt-4">{{ __('職歴') }}</h2>
      <div class="row mt-1">
          <div class="col-2 skill1">
            期間
          </div>
          <div class="col-2 skill2">
            会社名
          </div>
          <div class="col-2 skill1">
            職種
          </div>
          <div class="col-6 skill2">
            概略
          </div>
      </div>
      <div class="row mt-1">
          <div class="col-2 skill2">
            2014年4月<br>
            ～2014年10月
          </div>
          <div class="col-2 skill1">
            明光ネットワークジャパン 東仙台教室
          </div>
          <div class="col-2 skill2">
            学習塾<br>
            講師
          </div>
          <div class="col-6 skill1">
            塾講師として小学1年～高校3年の国、数、理、英についてを担当。約半年間で担当した生徒の人数は13名ほど。
          </div>
      </div>
      <div class="row mt-1">
          <div class="col-2 skill2">
            2014年11月<br>～現在
          </div>
          <div class="col-2 skill1">
            株式会社デジタルハーツ<br>
            仙台Lab.
          </div>
          <div class="col-2 skill2">
            業務部<br>
            クライアントマネージャ<br>
            タイトルリーダー
          </div>
          <div class="col-6 skill1">
            仙台拠点立ち上げスタッフとして15名採用<br>
            案件リーダーとして、コンシューマーゲーム、モバイルゲーム、アーケードゲーム、ウェブサイトやPCソフトの検証など、幅広い分野でのリーダー業務を経験<br>
            中でも最大規模のものは、コンシューマーゲームソフトのリーダーで、拠点分割を行った上で最大52名のチームを統括するリーダーを担当。クライアントへの進捗の報告やスケジュールの相談、現場指揮などを中心に行った。
          </div>
      </div>


    <h2 class="mt-4">{{ __('現職職歴詳細') }}</h2>
    <div class="row mt-1">
        <div class="col-2 skill1">
          期間
        </div>
        <div class="col-2 skill2">
          職務
        </div>
        <div class="col-8 skill1">
          詳細
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-2 skill2">
          2014年11月～2016年6月
        </div>
        <div class="col-2 skill1">
          案件チームリーダー
        </div>
        <div class="col-8 skill2">
          CS：家庭用ゲーム機のソフトウェアの検証<br>
          MS：モバイルアプリ及びブラウザアプリの検証<br>
          BS：その他WebサイトやPCソフトウェアの検証<br>
<br>
          上記各分野において、検証対象のチェック方針のすりあわせや、スケジュールの調整、進捗管理、検証チームに対する指示出し、検証方法指導等を担当<br>
          また、テスト設計、テストレビュー、レポートの作成についても対応していました。
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-2 skill2">
          2016年7月～現在
        </div>
        <div class="col-2 skill1">
          マネージャ業務
        </div>
        <div class="col-8 skill2">
          検証チームリーダーの管理・監督を行うクライアントマネージャを担当<br>
          案件受注時の要件定義、作業スコープのすり合わせ、作業見積もり作成、提案<br>
          また、担当している案件の各リーダーに対して、進行状況の確認や、問題・トラブルの解消、OJTでのリーダー指導を行っています。<br>
          担当案件の状況が芳しく無ければ、チームの人員調整や、作業見通しの出し直しによる追加コストの相談等を行っています。<br>
          OJT以外にも、研修資料作成や資料を用いての研修の実施、リーダー候補の指導や面接を担当しました。
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-2 skill2">
          2017年5月～
        </div>
        <div class="col-2 skill1">
          社内改善提案
        </div>
        <div class="col-8 skill2">
          社内の情報共有や、膨大なデータの取り扱いに関して、毎日の作業で発生しているロスに着目し、そのロスを解消するための相談や提案を行いました。<br>
          最終的に、情報システム部門のCEOへの提案を行い、全国の拠点にそれぞれファイルサーバーを設置する運びとなり、毎日の業務で平均一人あたり1.5時間分のロスを解消することができました。<br>
          また、社内での情報の共有やタスクの管理が各人でバラバラで、情報伝達齟齬によるトラブルが発生していたため、Redmineを利用したタスク管理を実施。現在でも継続して利用しており、担当人員が休んだ場合でも問題なく業務を遂行できる下地をつくりました。
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-2 skill2">
          2017年7月～8月 10月
        </div>
        <div class="col-2 skill1">
          IgA腎症治療のため休職
        </div>
        <div class="col-8 skill2">
          健康診断の結果、精密検査を受けたところIgA腎症と診断。指定難病であることが判明。<br>
          今すぐになにかあるわけではないが、放って置くと10～20年で腎臓の機能が不全になっていく病気。<br>
          原因は扁桃腺から発生するIgA抗体というものが悪影響を及ぼしているもの。<br>
          そのため、扁桃腺摘出手術、及びステロイドパルス療法のため入院が必要となり、合計3ヶ月の休職。<br>
<br>
          現在は寛解に向かっており、月に1度の通院での状況確認以外に関しては、一般的な生活を行うのに問題がない状態。<br>
          2017年11月の復帰以降、通院を覗いては1日8時間の通常勤務を休むことなく継続しています。
        </div>
    </div>
</div>
@endsection
