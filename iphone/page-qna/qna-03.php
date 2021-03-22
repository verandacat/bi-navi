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
            ダイエットサプリはどのような成分が入ってるの？
        </h1>

        <div id="section-01">

            <div class="txt-wrap p10">

                <p class="p10">

                    これからダイエットをしたいと考えている方にとってダイエット方法選びは最も重要。<br><br>
                    数あるダイエット方法の中で続けることで無理のないダイエットが期待できると注目されているのがダイエットサプリです。<br><br>
                    ダイエットサプリとはダイエットに役立つ特定の栄養成分を抽出し、錠剤やカプセル・タブレット凝縮した健康・栄養補助食品。<br><br><br>
                    医薬品では無く食品である為即効性は期待できませんが気長に継続し、規則正しい生活や無理のない運動などと併用することでダイエット効果を高めることが期待できます。<br><br>
                    ダイエットサプリは目的によって入っている成分が違いますが、主なダイエット成分には糖の吸収を抑制するギムネマやサラシア、
                    脂肪を溶かすキトサン、燃焼を促進する葛の花由来イソフラボン、
                    カルニチン、カテキン、カプサイシン、α―リボ酸、ラクトフェリン、体内環境改善に役立つ食物繊維や乳酸菌、オリゴ糖、難消化性デキストリン、センナ茎、酵素などが挙げられます。<br><br>
                    食べ過ぎてしまいがちな方はカロリーをカットする成分が強化されたサプリメント、運動のダイエット効率を良くしたい方は燃焼を促進する成分が強化されたサプリメント、
                    詰まりやすく、肌荒れやポッコリが気になる方は体内環境改善の成分が強化されたサプリメントと
                    自分の目的に合う成分の入ったサプリメントを選ぶのがダイエット成功の近道であり、成功のカギとなります。

                </p>


            </div>


        </div>



        <?php include_once("footer.php"); ?>