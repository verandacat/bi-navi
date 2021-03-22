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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

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
            <img src="../img/sub-header-03-sp.png" alt="" width="100%">
        </a>

        <div class="sub-header">

            <div class="top_link_sub">
                <a href="../">&lt; TOPに戻る</a>
            </div>

        </div>


        <h1 class="midashi-03">
            ダイエットサプリで部分痩せは出来ますか？
        </h1>

        <div id="section-01">

            <div class="txt-wrap">

                <p class="p10">
                    下半身が太いので下半身を集中して痩せたい、ポッコリお腹なのですっきりしたお腹を目指したいなどただ体重を減らすだけではなく、
                    部分痩せを願う方にとってもダイエットサプリは気になる存在。<br><br>
                    出来ればきちんと食事をし、適度な運動とサプリメントで無理なく痩せられたら嬉しいですよね。<br><br>
                    しかしサプリメントで部分痩せなんて出来るのか、そんなサプリメント自体があるのかと不安でなかなかその一歩が踏み出せないでいる方もいます。<br><br>
                    ダイエットサプリでの部分痩せができるのかというと気になる下半身やポッコリお腹の部分に役立つ成分の入っているサプリメントがいくつも販売されています。<br><br>
                    下半身太りには血行を良くする成分の含まれているサプリメントやむくみの改善をサポートする成分の含まれているサプリメントを続けることにより、
                    下半身痩せが期待でき、ポッコリお腹には体内環境に役立つ成分の入ったサプリメントや燃焼を強化する成分の入ったサプリメントを続けることで効率よくすっきりとしたお腹へと近づけることが期待できます。
                    勿論、ただサプリメントを飲むだけではなく、外側からのケアも同時に行うことが大切。<br><br>
                    適度な運動とバランスの取れた食生活、規則正しい生活習慣などを意識するなど内側と外側のケアを続けることでより一層ダイエットの効果を高めることができます。<br><br>
                    ダイエットサプリを選ぶ際には自分の痩せたい部分に着目したサプリメント選びを行うようにするのがおすすめです。<br>
                </p>


            </div>


        </div>



        <?php include_once("footer.php"); ?>