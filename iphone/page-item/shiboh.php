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
            シボヘールのおすすめポイント
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/shiboh.jpg" alt="">

            </div>

            <div class="txt-wrap">

                <p>
                    シボヘールはお腹の脂肪を減らすのを助けてくれる「葛の花由来イソフラボン」配合の機能性表示食品です。
                    体重が増えるとすぐお腹周りがプヨプヨしてしまう。年齢とともにウエストがどんどん太くなってきてしまった。そんな悩みを抱える人は少なくありません。
                    <br><br>

                    しかもお腹の中には皮下脂肪だけでなく、内臓そのものについてしまう内臓脂肪もあります。
                    当然体重そのものも増えやすくなりますが、思ったように減らすのはとても大変ですよね。減らしたいけど減らない、シボヘールはそんな悩みの解決を手助けしてくれます。
                </p>

                <p class="bold">・お腹がスッキリする成分に注目</p>

                <p>シボヘールには「葛の花由来イソフラボン」という成分が配合されています。
                    葛の花は日本でもなじみ深いものですが、実はこの葛の花由来イソフラボンには脂肪と戦う力が秘められているそうなのです。</p>

                <p class="bold">・葛の花由来イソフラボンの力</p>

                <p>その力とは、まず中性脂肪の合成を抑制する働きをサポート、そしてすでに蓄えられた脂肪の分解をサポート、
                    さらに脂肪の燃焼をサポート、と3つの力があります。まさにダイエットをしたい人にとって、夢のような成分ですよね。</p>

            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">シボヘールの飲み方</h2>

                <p class="bold">・1日4粒</p>

                <p>シボヘールは実際に臨床実験を行った際にも、しっかりと効果を発揮したという結果が出ています。
                    もちろん人によって差はありますが、1日たった4粒飲むだけなのでまずは試してみても損はしないでしょう。</p>

            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">シボヘールのキャンペーン</h2>

                <p class="bold">・お得な初回限定購入</p>

                <p>
                    シボヘールを効果的に活用するためには、3か月程度継続して飲むことをおすすめしています。
                    通常1袋120粒入りで3,218円（税込）ですが、WEB限定のらくらく定期便を利用すれば1袋あたり2,808円（税込）ととってもお得です。
                    しかも初めて購入する方なら、初回限定でなんと980円（税込）になるというから驚きですね。2回目以降は2,808円（税込）となりますが、それでもぜひ利用したいところです。
                </p>

                <p class="bold">・契約のしばりがない</p>

                <p>
                    またサプリメントの定期便ですと「必ず〇回は受け取らないと解約や変更ができない」という縛りがあるものが多いですが、
                    シボヘールは2回目以降であればいつでも内容の変更や停止を行うことができます。何かあれば次回のお届け予定日10日前までに、WEBか電話で相談してくださいね。
                    <br><br>
                    らくらく定期便を実施中の今が始めるチャンスなので、ぜひお得なうちに試してみましょう。
                </p>

                <div class="img-btn">
                    <a target="_blank" href="https://bi-navi.com/links/sibo.php<?php echo "?".$query2; ?>"
                        target="_blank">
                        <img alt="" src="../img/n_img/btn_site_go_01.png" / width="100%">
                    </a>
                </div>

            </div>


        </div>


        <?php include_once("footer.php"); ?>