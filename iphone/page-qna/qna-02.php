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
            <img src="../img/sub-header-03-sp.png" alt="" width="100%">
        </a>

        <div class="sub-header">

            <div class="top_link_sub">
                <a href="../">&lt; TOPに戻る</a>
            </div>

        </div>



        <h1 class="midashi-03">
            ダイエットサプリの正しい選び方を教えてください。
        </h1>

        <div id="section-01">

            <div class="txt-wrap p10">

                <p class="p10">

                    ダイエットサプリを活用して今度こそダイエットを成功させたいという方にとって重要なのは正しいダイエットサプリを選ぶこと。<br><br>
                    ダイエットサプリには様々なタイプがあるので自分に合うタイプのものを選ぶのが長く続けられ、スムーズに痩せられる一番のポイントとなります。<br><br>
                    まずは自分の体質や目的に合ったダイエットサプリメントは何なのかを慌てずじっくりと比較検討することが重要です。<br><br>
                    ダイエットには燃焼をサポートするタイプのもの、摂取した食事の糖質や脂質をカットするタイプのもの、体内環境を整え、
                    身体の毒素や老廃物をすっきりと排出するのを助けてくれる体内改善に役立つタイプのもの、食欲を抑えてくれるタイプのものなど大きく分けて4つのタイプがあります。<br><br>
                    自分の体重オーバーの原因となっているものは何なのか、どのタイプのダイエットサプリを使用すればその原因を改善できるのかを考え、一番当てはまるものを選びましょう。
                    また、安全性や品質、成分量を確認することも大切です。<br><br>
                    添加物の多いもの、成分量が少ない物、安全基準を満たしているかどうかがわからないものは避けたほうが良いでしょう。<br><br>
                    最後に自分で飲みやすい形状のものを選ぶこと。粉末タイプや錠剤、カプセル、リキッドなど色々なものがありますが、自分にとって飲みやすく、摂取しやすいものを選びましょう。


                </p>


            </div>


        </div>




        <?php include_once("footer.php"); ?>