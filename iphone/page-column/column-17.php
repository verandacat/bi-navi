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
            乳酸菌とは？ビフィズス菌との違いは？
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/column-hd-sp-17.png" alt="" width="100%">

            </div>

            <div class="txt-wrap">


                <p>
                    乳酸菌とビフィズス菌は、同じ細菌に類する微生物です。今回は、乳酸菌とビフィズス菌のよくある誤解や特徴の差、分類の仕方、見分け方などについての複数視点から違いを解説します。
                </p>

                <h2 class="midashi-h2-02">乳酸菌の特徴と歴史</h2>
                <p>
                    乳酸菌の歴史は古く、1900年代にはすでにヨーグルトから摂取できる健康な食品として知られていたことでしょう。口内・歯の研究において、ミュータンス菌が発見される前は、
                    虫歯（う蝕）は乳酸菌が原因であるという発表もなされています。
                    実際、歯のエナメル質を溶かす乳酸を生成するので、名前も「乳酸菌」とその特徴を良くあらわしています。しかし、菌が歯には定着しにくい環境であることなどから乳酸菌虫歯説は否定されるようになります。
                </p>

                <h2 class="midashi-h2-02">乳酸菌の種類と学名</h2>
                <p>
                    乳酸菌と一括りにされている菌には、
                    200種類を超えるため、菌の個々の特徴を捉えるにはラクトバチルス・カゼイのように菌属や菌種で分類して学名を付けるのが一般的です。
                    ブルガリクスなどヨーグルトで有名な乳酸菌などあります。
                </p>

                <h2 class="midashi-h2-02">ビフィズス菌の特徴</h2>
                <p>
                    ビフィズス菌は人の腸の中に住んでいて、老廃物を食べたりオリゴ糖などを食べて栄養を生み出したりしています。ビタミンを精製することは有名です。体内で身体によい働きや優れた機能を持つものは、善玉菌と呼ばれます。善玉菌に分類されるのは、このビフィズス菌と先に挙げた乳酸菌の2種類が有名です。
                    <br><br>
                    ビフィズス菌にしかない特徴としては、抗炎症・酸化作用をもつ酢酸を乳酸と共に精製することです。
                    <br><br>
                    反対に、体内環境を悪化させる菌を悪玉菌と呼びます。主な菌は大腸菌、ウェルシュ菌などです。バランスが崩れて悪玉菌が増殖すると悪臭を発生させたり、免疫力の低下を引き起こします。
                </p>

                <h2 class="midashi-h2-02">乳酸菌が含まれる商品</h2>
                <p>
                    ビフィズス菌に対して乳酸菌は、チーズや漬物などの発酵食品に含まれる細菌です。プロバイオティクスのヨーグルトなどが販売されているのは、この乳酸菌が生きたまま含まれていることです。
                    ヨーグルトなどを摂取することで、生きた状態の乳酸菌を摂取できます。しかし、胃の中は強酸性で、菌がほとんど死んでしまいます。最近は、菌を死なないように腸まで届ける腸溶性の製品も登場しています。
                    もちろん、乳酸菌を含む食品を食べて、たとえ胃の中で菌が死んでしまっても腸には良い栄養源となります。死んだ乳酸菌（善玉菌）を腸内で生きている善玉菌が食べてその数を増やしたりするからです。
                </p>

                <h2 class="midashi-h2-02">ビフィズス菌を摂取する方法</h2>
                <p>
                    ヨーグルトなどには基本的にビフィズス菌は含まれていません。理由は、嫌気の性質を持つため、菌が死なないように酸素を含まずに食品を加工する技術が必要であるからです。
                    医薬品や厚生労働省の特定保健用食品である資格を取得したものに多いでしょう。
                </p>

                <h2 class="midashi-h2-02">乳酸菌とビフィズス菌の分岐による区別</h2>
                <p>
                    また、違いを専門的な部分に言及すれば、腸内細菌学会の定義では、菌状の形状がばらばらで分岐の配列あることが違いでしょう。顕微鏡でしか見えませんが、
                    確認すると形が分岐しているかどうかで見分けられます。桿菌と呼ばれる形状が異なる点を除けば身体に良い特徴を持つということで、
                    まとめて善玉菌と呼ばれることも多いでしょう。
                </p>

                <h2 class="midashi-h2-02">体内の健康を維持するだけではない</h2>
                <p>
                    乳酸菌やビフィズス菌は、体内の健康をサポートすることで有名です。特にビフィズス菌入りの乳酸菌食品は体内フローラに大きく影響します。フローラが善玉菌の割合が高く保たれるようにすれば、
                    健康の様々な面において良い効果が期待できます。大腸内の菌の数は50数兆以上といわれます。乳酸菌を少し摂取したからといってフローラが劇的に改善する訳ではないことには注意が必要です。
                    <br><br>
                    乳酸菌研究は進んでいて、脂質異常症を改善するには食物性ではなく動物（乳）性の乳酸菌が良いことや痛風の原因とされるプリン体を食べる菌の発見など。
                    フローラを良好に維持することはつまりや代謝にも影響するので、
                    ダイエットをしている人にはどちらも欠かせない善玉菌です。
                </p>
            </div>






        </div>



        <?php include_once("footer.php"); ?>