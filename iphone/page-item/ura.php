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
            <img src="../img/sub-header-01-sp.png" alt="" width="100%">
        </a>

        <div class="sub-header">

            <div class="top_link_sub">
                <a href="../">&lt; TOPに戻る</a>
            </div>

        </div>

        <h1 class="midashi-01">
            うらら酵素のおすすめポイント
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/ura.jpg" alt="">

            </div>

            <div class="txt-wrap">

                <p>
                    うらら酵素は、普段の食生活だけではなかなか摂取をすることの出来ない酵素を気軽に摂取することの出来るサプリメントとなっています。管理栄養士も驚くほどの優秀なサプリメントです。
                    <br><br>
                    酵素は熱に弱く、48度以上の熱を与えてしまうと死滅してしまいますが、うらら酵素では加熱をしていない生酵素である穀物麹を使用していることから、よりよい酵素の力を得ることが出来るようになっています。
                </p>

                <p class="bold">・ダイエット効果を期待することが出来る</p>

                <p>
                    前文でもご紹介をした通り、うらら酵素にはたっぷりの食物酵素が含まれています。
                    これは、ダイエットをサポートするのにおいて欠かせない成分となっています。
                    <br><br>
                    これらを摂取することによって、通常食べ物の消化で消費がされてしまう酵素を外側からしっかりと補うことが出来るので、
                    体内中の酵素量を増加させてダイエットのサポートをしてくれるので、より効率よくダイエットをすることができます。
                </p>

                <p class="bold">・栄養を満遍なく摂取することが出来る</p>

                <p>うらら酵素には、栄養バランスに優れた9種類もの厳選穀物が配合されている他、273種類の植物発酵エキスや、
                    30種類以上もの麹酵素が配合されていたり、その他にも様々な栄養素が配合されているということから、
                    痩せながらも栄養を満遍なく摂取することが出来るので、健康体を目指すことが出来ます。
                </p>


            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">うらら酵素の飲み方</h2>

                <p class="bold">・1日2粒</p>

                <p>うらら酵素の飲み方ですが、1度に沢山飲むのではなく、継続して飲み続けるということが大切です。
                    飲む時間帯は決まっておらず好きな時に飲むことができ、摂取量は基本的に1日2粒程度となっています。
                    お水またはぬるま湯で飲むことが好ましいです。薬ではないので他の飲み物と飲んでも心配入りません。
                </p>

            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">うらら酵素のキャンペーン</h2>


                <p>
                    うらら酵素のキャンペーンですが、通常購入よりも初回限定300円（税抜）コースのほうがお得です。通常購入だと、6980円のところが、初回限定300円（税抜）コースだと初回のみ300円（税抜）にて購入することが出来て送料無料です。
                    <br><br>
                    また、2回目以降も6980円から約57%OFFの2980円にて購入をすることが出来るので、大変お得なのではないのでしょうか。(※2回目以降は680円の送料がかかります)4回まで継続購入が必須となり、5回目以降から一時休止や再開や解約を行うことができます。
                    <br><br>
                    30日間定期解約保証もありますので、継続して購入をしたいと思っている方におすすめのキャンペーンです。

                </p>


                <div class="img-btn">
                    <a target="_blank" href="https://bi-navi.com/links/urara.php<?php echo "?".$query2; ?>"
                        target="_blank">
                        <img alt="" src="../img/n_img/btn_site_go_01.png" / width="100%">
                    </a>
                </div>

            </div>


        </div>




        <?php include_once("footer.php"); ?>