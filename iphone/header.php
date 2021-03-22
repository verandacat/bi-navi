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
<script language="javascript">
    (function() {
        var _lgy = document.createElement('script');
        var _lgy_adv = 8219;
        window._lgy_advs = window._lgy_advs || {};
        window._lgy_advs[_lgy_adv] = false;
        window._lgy_options = window._lgy_options || {};
        window._lgy_options[_lgy_adv] = {};
        _lgy.async = true;
        _lgy.src = 'https://dsp.logly.co.jp/seg.js';
        var _lgy0 = document.getElementsByTagName('script')[0];
        _lgy0.parentNode.insertBefore(_lgy, _lgy0);
    })();
    </script>

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
    <link rel="stylesheet" href="style.css?ver=1" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link href="https://bi-navi.com/w/wp-content/themes/nyusan/style.css" rel="stylesheet">
    
    <title>美ナビ</title>
    <style>
    .searchbox {
        text-align: left !important;
    }

    #c1 input[type="checkbox"],
    #c3 input[type="checkbox"] {
        margin-left: 12px !important;
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


    <?php //include_once("ham.php"); ?>


    <div id="wrapper">

        <header>

            <nav class="logoNav">
                <div class="logoBox">
                    <a href="./"><img src="./img/logo-bnavi.png" alt=""></a>
                </div>
            </nav>

            <div class="img-wrap">

                <?php if($_GET['pat'] == "a") { ?>

                <img src="./img/top-banner-sp-new-bnavi.jpg" />

                <?php } elseif($_GET['pat'] == "b") { ?>

                <img src="./img/top-banner-sp-new-bnavi-b.jpg" />

                <?php } elseif($_GET['pat'] == "c") { ?>

                <img src="./img/top-banner-sp-new-bnavi-c.jpg" />

                <?php } elseif($_GET['pat'] == "d") { ?>

                <img src="./img/top-banner-sp-new-bnavi-m.jpg" />

                <?php } elseif($_GET['pat'] == "e") { ?>

                <img src="./img/top-banner-sp-new-bnavi-e.jpg" />

                <?php } elseif($_GET['pat'] == "f") { ?>

                <img src="./img/top-banner-sp-new-bnavi-f.jpg" />

                <?php } elseif($_GET['pat'] == "h") { ?>

                <img src="./img/top-banner-sp-new-bnavi-h.jpg" />

                <?php } elseif($_GET['pat'] == "g") { ?>

                <img src="./img/top-banner-sp-new-bnavi-g.jpg" />


                <?php } else { ?>

                <img src="./img/top-banner-sp-new-bnavi.jpg" />

                <?php } ?>

            </div>

        </header>