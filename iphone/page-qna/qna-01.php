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
            ダイエットサプリは飲むだけで痩せられるのですか？
        </h1>

        <div id="section-01">

            <div class="txt-wrap p10">

                <p class="p10">
                    ダイエットサプリを飲めば痩せられるのか？多くの方が疑問に思う事だと思います。<br>
                    答えはサプリを上手に活用して痩せることは可能ですが、ただダイエットサプリを飲むだけではスムーズに痩せることはできません。<br><br>
                    ダイエットサプリメントは薬ではなく、栄養補助食品・健康補助食品と言われる栄養成分がギュッと凝縮された食品です。<br><br>
                    ダイエット効果が期待できる成分を効率よく身体に取り込みやすい形に加工したものなので即効性はなく、
                    毎日適度な運動や栄養バランスの取れた食事、規則正しい生活などを心掛けながら気長に続けることに徐々に変化があらわれてきます。<br><br>
                    ダイエットサプリは健康的に無理なく美しく痩せたいという人に最適。<br>
                    一気に無理をして痩せると健康的にも不安があり、我慢していた反動でリバウンドしてしまう可能性も高いですが、
                    ダイエットサプリメントと運動を上手に組み合わせた無理のないダイエットであれば、リバウンドの心配も無く、徐々に変化していく過程を楽しみながら美しく痩せることが可能です。<br><br>
                    一度に沢山飲んだからと言って痩せられるわけではないので自分の体質に合うサプリメントを正しい用量を守ることも大切です。<br>
                    身体に良い運動と食事・生活習慣を意識し、まずは1～2か月を目安にダイエットサプリを継続してみましょう。


                </p>


            </div>



        </div>





        <?php include_once("footer.php"); ?>