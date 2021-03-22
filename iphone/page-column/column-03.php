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
            ダイエットでリバウンド王になるのを防ぐ方法
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/column-hd-sp-03.png" alt="" width="100%">

            </div>

            <div class="txt-wrap">

                <p>

                    厳しい食事療法や、毎日のジョギングや筋トレなどの運動により、せっかくダイエットに成功したのに、
                    ふと気づくと「リバウンド」していることありますよね。ある統計によると、ダイエットを試みた人のうち、約６割もの人がリバウンドを経験しているとあります。
                    今回はダイエットをしたい人にとっての大敵の、リバウンドの原因とリバウンドを防ぐ方法について、お教えいたします。

                </p>

                <h2 class="midashi-h2-02">▼リバウンドの原因</h2>

                <p>憎きリバウンド現象はなぜ起こってしまうのでしょうか。その原因について一つずつ見ていきましょう。</p>

                <p class="bold">①リポスターシス(脂肪定常現象)</p>

                <p>人の体は実によくできています。人の体は自分の普段の体重(脂肪量)を記憶していて、極端な体重(脂肪量)の増減を防御し一定に保とうと働きます。
                    つまり、なるべく体重(脂肪量)を現状維持しようとします。
                    極端なダイエットをして体重が落ちるとこの現象により、元の体重(脂肪量)に戻そうとする力が加わり、リバウンドしてしまうことがあります。</p>

                <p class="bold">②短期間に一気に体重を落とす</p>

                <p>人の体は１か月に5％、６か月に10％の体重が落ちることにより、栄養失調・栄養不足の飢餓状態になります。極端なダイエットをして、
                    短期間に急激に体重が落ちると、体は「これから十分な栄養が摂れないかもしれない」と察知し、基礎代謝が下がり摂った食事からの栄養吸収率はアップしてしまいます。
                    つまり少ないエネルギー消費で活動する、省エネ体質になってしまい、リバウンドの原因になることがあります。</p>


                <p class="bold">③運動なしの食事制限だけのダイエット</p>

                <p>食べる量を減らせば体重を落とすことができます。運動が苦手な方にとってみれば、毎日運動することよりも、食べる量を減らすことの方が簡単な場合があり、
                    食べる量を減らすダイエットをしている人も多いのではないでしょうか。
                    運動をしない食べる量を減らすだけのダイエットでは、筋肉が衰えてしまいます。筋肉が減ってしまうと基礎代謝は落ち込み、痩せにくく太りやすい、
                    つまりリバウンドしやすい体に変化してしまいます。</p>

                <h2 class="midashi-h2-02">▼リバウンドを防ぐ方法</h2>

                <p>自らの体を飢餓状態や急激な体重減少から守るために、リバウンド現象が起こることがわかりました。
                    では、リバウンドを防ぎ、ダイエットを成功させるにはどのような方法があるのでしょうか。細かく見ていきましょう。</p>

                <p class="bold">①緩やかなダイエットを目指す</p>

                <p>人の体は１か月に5％、６か月に10％の体重が落ちることにより、栄養失調・栄養不足の飢餓状態になることがわかりました。
                    飢餓状態になれば、自分の体を守るためリバウンド現象が起きますので、ダイエットの体重減少の目標は１か月に3％、6か月に8％程度が理想です。
                    例えば60㎏の人なら、１か月に1.8㎏以内、６か月に4.8㎏以内です。短期間で体重が減少すると達成感がありますが、その先にはリバウンドが待ち構えていることもあります。
                    できるだけ長期戦で行きましょう。</p>


                <p class="bold">②運動は必須</p>

                <p>食事制限だけのダイエットでも体重は減少しますが、筋肉も落ち基礎代謝も落ち、結果的に痩せにくく太りやすい体ができてしまいます。
                    運動により筋肉量を維持することは必須です。
                    週に４日以上、20分以上の継続した運動を行うことが理想ですが、仕事や勉強で忙しくなかなか時間が作れなかったり、そもそも運動が苦手だったりする方も多いと思います。
                    自宅でスクワットやストレッチなどの軽い運動でも構いませんので、意識して体を動かしましょう。</p>

                <h2 class="midashi-h2-02">▼長期戦のダイエットでリバウンド知らず</h2>

                <p>短期間で痩せると、周囲の人にも気づいてもらいやすく、達成感も感じやすく喜びに直結します。
                    しかし、短期間のダイエットの先にはリバウンドが待っていることがお分かりいただけたでしょうか。
                    ダイエットは１か月に3％、6か月に8％程度の体重減少を目標に、運動習慣をつけて続けられる食事療法を長期戦で臨むと、リバウンド王になることを防ぐことができます。
                    ぜひ試してみてください。</p>

            </div>



        </div>



        <?php include_once("footer.php"); ?>