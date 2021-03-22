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
            優光泉のおすすめポイント
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/yuko.jpg" alt="">

            </div>

            <div class="txt-wrap">

                <p>
                    優光泉は、九州産の野菜にこだわっている完全無添加の混じりっけ無しの本物の酵素ドリンクです。
                    <br><br>
                    そのため、原材料として書かれているものは、かなり珍しい野菜だけとなっています。また、酵母菌は熱に強いものにしており、そのおかげでいきたままの酵母菌を体内に取り入れることが出来るのです。
                </p>

                <p class="bold">・冷え対策</p>

                <p>
                    優光泉は、冷え対策にもおすすめです。食材には、陰の性質を持っている身体を冷やす作用を持つもの、そして陽の性質を持っている身体を温める作用を持つものの2つに分けられます。
                    <br><br>
                    優光泉では、その食材の性質を考えた上で、身体を冷やさないバランスで野菜を配合しています。
                </p>

                <p class="bold">・すっきりする</p>

                <p>
                    優光泉は、五臓六腑の関係性をスムーズに調整をしてくれるような食材が沢山配合されています。
                    特に代表的なものとなると、大根やキャベツや人参などいったものです。これらは、他の野菜に比べるとかなり多く入っています。
                    <br><br>
                    また、体内にある毒などのいらない老廃物を解毒しようと外へ排出していくような食材も多く配合されています。
                    <br><br>
                    代表的なものでは、生姜やトマトなどが入っています。
                </p>


            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">優光泉の飲み方</h2>

                <p>
                    優光泉の飲み方ですが、酵素20ccに対して水4〜6倍にて薄めて(薄め方はお好みで大丈夫です)飲むだけ。これを起きて直ぐに1杯と昼食前に1杯飲むだけで良いです。
                    一日に酵素を40cc飲むだけで、継続をしていけば良い結果を期待することが出来ます。この時、昼食は体を温めてくれるお蕎麦などがおすすめとなっています。
                </p>

            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">優光泉のキャンペーン</h2>

                <p>
                    優光泉のキャンペーンですが、通常購入よりも定期購入セットの方がかなりお得に購入することが出来ます。定期購入セットですと、
                    スタンダード味と梅味の中からお好みで2本選べて、
                    初回限定のみ30%OFFの6372円（税込）で購入することが出来ます。
                    <br><br>
                    また、2回目以降も1728円OFFで購入をすることができます。送料や代引き手数料も毎回無料で、
                    Wポイントも毎回還元され、いつでもお休みや変更も可能で、蛍の郷の天然水やオリジナルデザインリユースボトルも貰えるなど、
                    かなり良い特典がついていることから、購入するのであれば定期購入セットがかなりお得となっています。
                </p>

                <div class="img-btn">
                    <a target="_blank" href="https://bi-navi.com/links/yuu.php<?php echo "?".$query2; ?>"
                        target="_blank">
                        <img alt="" src="../img/n_img/btn_site_go_01.png" / width="100%">
                    </a>
                </div>

            </div>


        </div>



        <?php include_once("footer.php"); ?>