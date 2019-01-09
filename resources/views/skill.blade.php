@php
    $title = ('スキル');
@endphp

@extends('layouts.my')
@section('title', 'demo-laravel-crud')
@section('content')

<div class="container">
    <h1>{{ $title }}</h1>

  <div class="row mb-4">
    <div class="skill col-12">
    ☆：少し触ったことがあるレベル<br>
    ☆☆：基本的なことは大丈夫と言える<br>
    ☆☆☆：業務として問題ないと自信を持って言える<br>
    ☆☆☆☆：思うがままに作成や進行ができる<br>
    </div>
  </div>

    <h2>{{ __('スキルのグラフ') }}</h2>
    <div class="row skill">
      <div class="col-md-5">
        <canvas id="graph" class="mt-4"></canvas>
        <script>
        var drawGraph = function(data){
            var ctx = document.getElementById('graph').getContext('2d');
            ctx.canvas.height = 150;
          // データ1
            var data1 = {
                label:'☆',
                data:data[1],
                backgroundColor: "rgba(0,50,38, 0.8)",
                // borderColor: "rgba(0, 50, 150, 0.3)",
                pointHoverBackgroundColor: "rgba(0,0,101, 0.6)",
                pointHoverBorderColor: "rgba(0,0,101, 0.6)",
            };
          // ラベル(横軸)
            var label = data[0];

          // データの設定
            var config = {
                type: 'radar', // グラフの種類（レーダーチャートを指定）
                data: { labels: label, datasets: [data1]},

                // オプション設定
                options: {
                  responsive: true,
                  legend: {
                    display: false
                  },
                    //スケールの設定
                  scale: {
                    ticks: {
                            // 目盛り値のカスタマイズ
                            stepSize: 1,
                            // 最小値の値を0指定
                            beginAtZero:true,
                            max: 4,
                            min: 0
                    }
                  }
                }
            }

          var myChartGraph = new Chart(ctx, config);
        };

        // ラベルの設定
        var data = [['HTML', 'CSS', 'Ruby','Rails', 'PHP', 'Laravel',"MySQL","リスクマネジメント","チームマネジメント","スケジュール管理","コミュニケーション"],
                    [2, 2, 1, 1, 2, 2, 2, 3, 3, 3, 3]]
        drawGraph(data);
        </script>
      </div>
      <div class="col-md-3">
  HTML：☆☆<br>
  CSS：☆☆<br>
  Ruby：☆<br>
  Rails：☆<br>
  PHP：☆☆<br>
  Laravel：☆<br>
  MySQL：☆☆<br>
  <br>
  リスクマネジメント：☆☆☆<br>
  チームマネジメント：☆☆☆<br>
  スケジュール管理：☆☆☆<br>
  コミュニケーション：☆☆☆
      </div>
      <div class="col-md-4">
        その他
        Photoshop(CS3)：☆☆<br>
        Illustrator：☆<br>
        Unity：☆<br>
        Javascript：☆<br>
        Excel：☆☆☆<br>
        PowerPoint：☆☆☆<br>

      </div>
    </div>

    <h2 class="mt-4">{{ __('その他のスキル・経験') }}</h2>
    <div class="row">
      <div class="col-2 offset-md-1 skill1">
        コンシューマー
        <img src="img/game.png" class="skill-img">
      </div>
      <div class="col-2 skill2">
        モバイルアプリ
        <img src="img/mobile.png" class="skill-img">
      </div>
      <div class="col-2 skill1">
        アーケード
        <img src="img/racegame.png" class="skill-img">
      </div>
      <div class="col-2 skill2">
        VR
        <img src="img/vr.png" class="skill-img">
      </div>
      <div class="col-2 skill1">
        Webサイト
        <img src="img/website.png" class="skill-img">
      </div>
      <p class="mt-3 offset-md-1">上記のような分野で、ゲームやWebサイト等のプロダクトに対する品質管理を担ってきました。</p>
    </div>


    <h2 class="mt-4">{{ __('これから手に入れたいスキル') }}</h2>
    <div class="row">
      <div class="col-6 skill1">
        HTML・CSS・PHP・Laravel・MySQLを☆☆☆にする
      </div>
      <div class="col-6 skill2">
        Illustrator、Photoshop等のデザインスキルを得たい
      </div>
      <div class="col-6 skill2">
        AWSを用いた構築スキルを得たい
      </div>
      <div class="col-6 skill1">
        自身のアイデアでサービスを作って公開したい
      </div>
    </div>
</div>


</div>

@endsection
