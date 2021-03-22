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
            美味しく取り組める！アイスダイエットとは？
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/column-hd-sp-21.png" alt="" width="100%">

            </div>

            <div class="txt-wrap">

                <p>
                    みなさんは、「アイス」にどのようなイメージをお持ちでしょうか。「おいしい」「毎日食べたい」けれども、「食べると太る」「ダイエットの天敵」「糖分と脂肪分が多い」と、
                    ダイエットを志す人にとってはあまり良いイメージはないのではないでしょうか。しかし、最近では「アイスダイエット」というダイエット法があるのをご存知でしょうか。
                    <br><br>
                    今回はそんなアイスダイエットに取り組むためにおすすめのアイスと、気になるアイスダイエットのやり方について詳しく解説していきます。
                </p>


                <h2 class="midashi-h2-02">アイスダイエットとは？</h2>

                <p>
                    アイスクリームはダイエット中であれば、控えている人が多いですよね。しかし、このアイスダイエットでは、ダイエット中の食事制限による栄養バランスの乱れをアイスで整えて、
                    ダイエットによるストレスを軽減させ、ダイエット効果を促進させるという画期的なダイエット法です。
                    <br>
                </p>

                <h2 class="midashi-h2-02">アイスダイエットにおすすめのアイス</h2>

                <p>
                    アイスダイエットにおすすめのアイスはバニラ味の高脂肪のアイスです。その理由ですが、バニラアイスに含まれるバニラビーンズにはバニリンという成分が含まれています。
                    バニリンには、食欲抑制作用やリラックス作用がありますので、ダイエットのストレスを和らげ、ストレス発散のためのドカ食いも防いでくれる効果がありそうです。
                    <br><br>
                    また、本来のダイエット中であれば脂肪分の低いアイスを選びがちですが、アイスダイエットでは高脂肪のアイスがおすすめです。
                    その理由は、高脂肪のアイスには本来体に必要な栄養素が多く含まれており、少量でバランスよく栄養補給を行うことができるからです。
                    <br><br>
                    カロリーや糖質、脂質を制限したダイエットでは本来体に必要な栄養素を十分に摂ることができず、代謝が悪くなり省エネ体質の体になり、
                    ダイエット効率も悪くなってしまうことが多々あります。アイスダイエットでは、栄養バランスの崩壊によるダイエット効率の悪化を防ぎ、
                    効率よくダイエットを促進させ、ストレスをためないで済むように考慮されたダイエット法なのです。
                    <br><br>
                    アイスには「アイスクリーム」「アイスミルク」「ラクトアイス」「氷菓」の4種類がありますが、なかでも最も脂肪分が多いのは「アイスクリーム」です。
                    店頭で選ぶ時にはぜひ、アイスクリームを選ぶようにしてみてください。
                    <br>
                </p>

                <h2 class="midashi-h2-02">1日に1食はアイスに置き換え</h2>

                <p>
                    1日の食事のうち、1食だけをアイスに置き換えるともっともアイスダイエットの効果を効率的に得ることができます。
                    特に朝、昼、夕食のうちでは、朝食をアイスに置き換えることでバニリンの効果で心穏やかに1日の始まりを迎えることができます。
                    <br><br>
                    また、朝食でしっかりと糖分を補給することにより、脳にエネルギーをいきわたらせることができ、頭をすっきりと目覚めさせることができます。
                    <br>
                </p>


                <h2 class="midashi-h2-03">まとめ</h2>

                <p>
                    アイスダイエットについて詳しく解説してみましたが、いかがでしたでしょうか。
                    普通、ダイエットに取り組む人が避けているであろうアイスを食べてもいいという画期的なダイエットだったのではないでしょうか。
                    ダイエットにはつらい運動や厳しい食事制限がつきものです。つらい運動や厳しい食事制限を続けるとストレスを感じ、ダイエットの中断や挫折へのプロローグとあってしまうこともよくあります。
                    <br><br>
                    バニラアイスに含まれるバニラビーンズのバニリンには、ストレス軽減作用もありますし、何よりダイエット中にアイスを食べてもいいということ自体が、
                    ダイエットによるストレスを少し軽減してくれるのではないでしょうか。
                    <br><br>
                    アイスダイエットは、ダイエットによるストレスが原因でダイエットを中断したり挫折した経験のある人におすすめのダイエット法と言えそうです。
                    <br>
                </p>

            </div>


        </div>



        <?php include_once("footer.php"); ?>