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
            ダイエット中にお酒は飲んでもいいの？
        </h1>

        <div id="section-01">

            <div class="txt-wrap p10">

                <p class="p10">
                    お酒が大好き。でもダイエット中って飲んではダメなのかも・・と心配している方は多いのではないでしょうか。<br><br>
                    お酒というのはカロリーが高く、糖質が高いというイメージがあり、どうしてもダイエット中には飲んではいけないものと考えがちです。<br><br>
                    確かにお酒の中にはカロリー・糖質共に高いものも多く、お酒と一緒に食べるおつまみも美味しく、ついつい食べ過ぎてしまい、
                    気が付いたらかなりのカロリーを摂取してしまう場合があります。<br><br>
                    しかし、大好きなものをダメと我慢してしまってはストレスが溜まってしまい、その反動で飲みすぎたり、途中でダイエットが嫌になり断念してしまう危険性もあります。<br>
                    ダイエット中はお酒はたしなむ程度と決め、できるだけ糖質が少ないタイプのお酒を選ぶようにしましょう。<br><br>
                    糖質の多いお酒は発泡酒やビール、紹興酒や日本酒、梅酒などが挙げられます。<br><br>
                    糖質の低いお酒は糖質オフと記載されている発泡酒やウイスキー、ジン、ウォッカ、ワイン、焼酎など。<br><br>
                    糖質の多いお酒は乾杯の時だけにし、後は糖質の低いお酒にするなど自分自身で上手にコントロールして飲むようにすればダイエットに大きな影響が及ぶことはありません。<br><br>
                    また、ダイエット中のおつまみは揚げ物類やピザ、アヒージョなど高脂質・高糖質なものはできるだけ避け、浅漬けやサラダ、
                    焼き鳥や焼き魚、刺身類、生ハム、酢の物など低脂質で低糖質なものをできるだけ選ぶようにしましょう。
                </p>



            </div>


        </div>





        <?php include_once("footer.php"); ?>