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
            ダイエットに失敗するのは脳にあった？脳から痩せるダイエット
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/column-hd-sp-13.png" alt="" width="100%">

            </div>

            <div class="txt-wrap">


                <p>
                    ダイエットを始めても失敗ばかり、成功してもすぐにリバウンド。そんなことを繰り返してダイエットジプシーになっている人は少なくありません。
                    ダイエット成功の鍵は脳をうまくコントロールすること。ダイエットが成功しないのは怠惰な性格のせいではなく、自分に甘いからでもなく、脳のシステムに原因があるのです。
                    脳の仕組みを知れば、どのような人でもダイエットが長続きして痩せることが出来ます。
                    <br><br>
                    人間は本来、太りもせず痩せもしないくらいの適量の食事で満足するように調節できる脳を持っています。どうしてその機能が狂い、太ってしまうのでしょうか。
                    一つは習慣にあります。朝昼夕の食事に加え、人によっては休憩の時間におやつを食べたり晩酌もあるでしょう。この時、本当に空腹でなくても昼だから昼食をとる、なんとなく3時だからおやつ、
                    など毎日の習慣として定着しているために、無意識に食べていることがとても多いのです。ただその時間になったからお腹が空いた気になっているのです。結果、食べ過ぎて太ってしまうというわけです。
                    もう一つはストレスによる食べ過ぎ。現代人は忙しく、自然とストレスも溜まりやすくなっています。ストレスの解消に手っ取り早いのが食べるという行為です。
                    美味しいものを食べると脳が喜び、確かにストレス軽減になります。しかしそれで太ってしまっては新たなストレスを生み出してしまいます。
                    <br><br>
                    このようなムダ食いをなくすにはどうしたらいいでしょうか。次の５つのポイントを押さえて、
                    この太る脳を一旦リセットし、痩せる脳に変えることで食欲をコントロールしてムダ食いをなくすことが出来ます。
                    <br><br>
                    まず、本当に食べたいのか確認。時間になったから食べる、ということを止めましょう。
                    規則正しい生活は大事ですが、内臓を休ませることも大切です。特におやつや晩酌はよく考えて、
                    身体が本当に欲しているのか自分自身に問いかけてからにしましょう。毎日の習慣だったことが実は必要のない習慣なのかもしれません。
                    次に、身体に良いものを選んで食べること。ファストフード、ジャンクフードが身体に良くないことはご存じの通りです。
                    シンプルでバランスの良い食事を続けていると、メンタルに変化が起き、自然と食欲のむらがなくなって痩せやすい心と身体になっていきます。
                    また、食べること以外で楽しみを見つける・ストレス発散をすることも大事です。週に1度の食事会を楽しみにしている、でも構いませんが、
                    それ以外でも趣味や何か熱中できることを探しましょう。
                    そして、周りに合わせて食べるのをやめること。みんなが食べているから、残すのはもったいないと満腹でも食べ続けることは肥満につながります。
                    自分のペースで、自分の適量を見つけましょう。ゆっくり食べることで満腹中枢が正常に働き、自分の適量がわかりやすくなります。
                    最後に、何より楽しく食べることが大切です。食べるものを厳選し食事を心から楽しむこと。一食をしっかり味わい、食欲を満たすためだけではなく、
                    心と身体のために食事をいただくという気持ちで食べましょう。
                    <br><br>
                    以上のことを意識してダイエットをすると、脳のクセがだんだんと取れてきて自然と痩せやすく健康的な身体に変化していきます。
                    食事を大切にすることを繰り返すうちに、脳内で習慣が書き換わり、新しい習慣としてインプットされていきます。
                    ダイエットは痩せたら元の生活に戻すような一過性のものではなく、
                    一生続けていける食生活に変えるものです。習慣は一度身に着いたら継続するのは難しいことではありません。痩せる脳に変えて、
                    ムダ食いをなくしダイエットを成功させましょう。
                </p>

            </div>






        </div>



        <?php include_once("footer.php"); ?>