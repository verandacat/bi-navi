<?php 
include_once('../w/wp-load.php');
$query = "?".$_SERVER['QUERY_STRING'];
// $search = array('?a=index.php&','?a=index.php');
$query2 = str_replace($search, '', $query);
print '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html>
<html lang="ja">

<head>


    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T329LCK');
    </script>
    <!-- End Google Tag Manager -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="../style.css?ver=1" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://bi-navi.com/w/wp-content/themes/nyusan/style.css" rel="stylesheet">
    <title>ダイエット成功ガイド</title>
    <style>
    .searchbox {
        text-align: left !important;
    }

    .tabs>li {
        width: 30%;
    }

    .tabs>li>a {
        color: #666;
        padding: 0;
        display: block;
        text-align: center;
        text-decoration: none;
        font-size: 15px;
        line-height: 20px;
        border-bottom: 2px solid transparent;
        -webkit-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
    }

    .tabs>li.active>a {
        color: #fff;
    }

    .swiper-container-2 {
        padding: 30px 0;
        overflow: hidden;
    }

    .swiper-container-2 .swiper-slide {
        background: #fff;
        border: 1px dashed #ccc;
        padding: 0;
        box-sizing: border-box;
    }

    .swiper-pagination {
        width: 100%;
    }

    .swiper-pagination-clickable .swiper-pagination-bullet {
        margin-right: 10px;
    }

    .swiper-pagination-bullet-active {
        opacity: 1;
        background: orange;
    }

    .accordion-page-item {
        display: none;
    }
    </style>
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T329LCK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->


    <?php //include "ham.php" ?>


    <div id="wrapper">
        <?php include "logo.php" ?>
        <a href="../">
            <img src="../img/sub-header-02-sp.png" alt="" width="100%">
        </a>

        <div class="sub-header">

            <div class="top_link_sub">
                <a href="../">&lt; TOPに戻る</a>
            </div>

        </div>

        <h1 class="midashi-02">
            寝ないと太る？<br>ダイエットと睡眠の関係性
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/column-hd-sp-01.png" alt="" width="100%">

            </div>

            <div class="txt-wrap">

                <p>
                    ダイエットと聞くと、厳しい食事制限や激しい運動をすることを連想される方が多いのではないでしょうか。<br><br>

                    そういった厳しい食事制限や激しい運動により、一時期はダイエットに成功することができますが、やめてしまうとすぐにリバウンド…といった経験がある方も多いと思います。
                    <br><br>
                    そんな経験からダイエットは大変だと思う方が多いと思いますが、ダイエットは実は誰もが行う睡眠と大きく関係しています。睡眠時間が長い人より短い人のほうが太っているという研究結果も報告されているほどです。
                    <br><br>
                    今回はダイエットと睡眠の切っても切れない関係性と、睡眠によりダイエットの成功へ導く方法についてお教えいたします。
                </p>

                <h2 class="midashi-h2-02">▼寝るだけダイエット？ダイエットと睡眠の切っても切れない関係性ポート</h2>

                <p>
                    寝ているだけで痩せるなんて信じられない方が多いですよね。しかし、ダイエットと睡眠には実は密接な関係性があります。
                </p>

                <h2 class="midashi-h2-02">▽睡眠時エネルギー消費</h2>

                <p>人はエネルギーを消費することで体重が減少します。
                    活動しているときにエネルギーを消費していることはみなさんご存知だと思いますが、寝ている間にもエネルギーの消費をしていることをご存知でしょうか？
                    <br><br>
                    体重1㎏が1分間に消費するエネルギーは0.017kcalです。睡眠時のエネルギー消費量は「体重(㎏)×睡眠時間(分)×0.017×年齢別の補正係数」で求められます。
                    <br><br>
                    ※年齢別の補正係数とは<br>
                    男性：20代(1.00)、30代(0.96)、40代(0.94)<br>
                    女性：20代(0.95)、30代(0.87)、40代(0.85)<br><br>
                    例えば、体重65㎏の35歳の男性が8時間眠った場合であれば「体重(65㎏)×睡眠時間480(分)×0.017×年齢別の補正係数0.96」＝509kcalのエネルギーを消費しています。
                    65㎏の男性が500kcalを消費する運動は、ランニングやサイクリングなら約1時間分ですのでかなりの消費エネルギーではないでしょうか。
                </p>


                <h2 class="midashi-h2-02">▽睡眠時には痩せホルモンがたくさん分泌される！</h2>

                <p>睡眠時にはダイエットのために欠かせない、成長ホルモン・コルチゾール・レプチン・グレリン・セロトニンなどの痩せホルモンがたくさん分泌されます。
                    睡眠時間が短くなると、これらのホルモンの分泌量も減ってしまいますので、睡眠時間はしっかり確保したいものです。
                </p>


                <h2 class="midashi-h2-02">▼睡眠の質を上げダイエット成功へ！</h2>

                <p>ダイエットと睡眠に深い関係性があることについてはお分かりいただけたと思いますが、では睡眠の質を上げ、
                    ダイエットを成功させるために必要なことは何でしょうか。詳しく解説いたします。
                </p>

                <h2 class="midashi-h2-02">▽睡眠の質の向上のために</h2>

                <p class="bold">・睡眠前にリラックス</p>

                <p>睡眠前には、家族団らんをしたりアロマを炊いて趣味を満喫したり暖かい飲み物を摂ったりして、リラックスするように心がけましょう。
                </p>

                <p class="bold">・入浴と食事は早めに済ませる</p>

                <p>寝る直前に入浴する方も多いと思いますが睡眠の質を上げるためには、体温が一度下がることが必要です。
                    入浴は睡眠の1時間前には済ませるようにしましょう。
                    寝る直前に食事をすると睡眠中に体内で盛んに消化活動が行われるため、体はゆっくり眠れません。食事は睡眠の2～3時間前には済ませましょう。
                </p>


                <p class="bold">・適度に運動し心地良い疲労感を</p>

                <p>毎日適度に運動することで、心地良い疲労感を覚え、睡眠の質を上げることができます。
                </p>


                <h2 class="midashi-h2-02">▽睡眠の質の低下につながること</h2>

                <p class="bold">・ブルーライト</p>

                <p>寝る前に布団の中でスマホを見たり寝る直前までテレビを見たりする方も多いと思いますが、
                    それらから浴びるブルーライトにより体内時計が乱れ睡眠の質は低下します。
                </p>

                <p class="bold">・カフェイン</p>

                <p>カフェインには覚醒効果があるため、寝る前に摂ることはおすすめできません。寝る前の飲み物はコーヒーや緑茶は避け、ホットミルクなどにしましょう。
                </p>


                <p class="bold">・アルコール</p>

                <p>寝る前にアルコールを摂ると、睡眠中もアルコールを分解するために体が活動的になり、しっかり眠ることができなくなってしまいます。
                    上記のことを実践し、質の良い睡眠が得られたら、心地良い目覚めを迎えられることでしょう。
                </p>


                <h2 class="midashi-h2-02">▼睡眠はダイエット成功へのカギ</h2>

                <p>ダイエットと睡眠に密接な関係性があることについてお分かりいただけたでしょうか。質の良い睡眠をしっかり摂る習慣をつけ、リバウンドしにくいダイエットに活かしてくださいね。</p>


            </div>





        </div>




        <?php include_once("footer.php"); ?>