<?php
include_once('./w/wp-load.php');
$query = "?" . $_SERVER['QUERY_STRING'];
print '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

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

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <title>美ナビ</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <link rel="stylesheet" href="./style.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style>
    .searchbox {
        width: 100% !important;
    }

    .accordion-page-item {
        display: none;
    }

    .selectbox select {
        margin-left: 20px !important;
    }

    .selectbox::after {
        right: -13px !important;
    }
    </style>

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T329LCK" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <?php //include_once('ham.php') 
  ?>


    <div id="wrapper">

        <header>

            <nav class="logoNav">
                <div class="logoBox">
                    <a href="./"><img src="./img/logo-bnavi.png" alt=""></a>
                </div>
            </nav>

            <div class="img-wrap">

                <?php if ($_GET['pat'] == "a") { ?>

                <img src="./img/top-banner-pc-new-bnavi.jpg" />

                <?php } elseif ($_GET['pat'] == "b") { ?>

                <img src="./img/top-banner-pc-new-bnavi-b.jpg" />

                <?php } elseif ($_GET['pat'] == "c") { ?>

                <img src="./img/top-banner-pc-new-bnavi-c.jpg" />

                <?php } elseif ($_GET['pat'] == "d") { ?>

                <img src="./img/top-banner-pc-new-bnavi-m.jpg" />

                <?php } elseif ($_GET['pat'] == "e") { ?>

                <img src="./img/top-banner-pc-new-bnavi-e.jpg" />

                <?php } elseif ($_GET['pat'] == "f") { ?>

                <img src="./img/top-banner-pc-new-bnavi-f.jpg" />

                <?php } elseif ($_GET['pat'] == "g") { ?>

                <img src="./img/top-banner-pc-new-bnavi-g.jpg" />

                <?php } elseif ($_GET['pat'] == "h") { ?>

                <img src="./img/top-banner-pc-new-bnavi-h.jpg" />

                <?php } else { ?>

                <img src="./img/top-banner-pc-new-bnavi.jpg" />

                <?php } ?>

            </div>

        </header>