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
            腸内フローラとは？腸内フローラを整える方法
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/column-hd-sp-16.png" alt="" width="100%">

            </div>

            <div class="txt-wrap">


                <p>
                    腸内フローラという言葉をテレビなどでよく聞くようになりました。しかし、よく聞くものの実際にどういうものなのかイメージできていない方は多いのではないでしょうか。
                    実は、腸内フローラは健康と大きな関係があるのです。
                    この記事では、腸内フローラが一体どのようなものなのか、腸内フローラの整え方、腸内フローラが整うとどのような効果があるのかについて詳しく解説していきます。
                </p>

                <h2 class="midashi-h2-02">1.腸内フローラとは</h2>
                <p>
                    腸内フローラとはひと言でいうと、腸に住んでいる細菌の様相のことです。人間の腸には100種類以上、約100兆個もの細菌が隙間なく埋め尽くすように生息しています。その様子が植物が群生しているお花畑(フローラ・flora)のようなところから、腸内フローラと呼ばれています。
                    <br><br>
                    腸内フローラに住む細菌は、人間の身体の中では大きく3つに分けることができます。1つは、ビフィズス菌や乳酸桿菌を代表とする善玉菌です。善玉菌は腸の働きを活発化させる菌で、腸内環境を整えるのに必要な菌といえます。2つ目は、ウェルシュ菌やブドウ球菌を代表とする悪玉菌です。
                    悪玉菌は腸内で有害物質を作って腸内環境を悪化させる作用があります。そして、3つ目は日和見菌です。日和見菌は善玉菌か悪玉菌の勢力が強い方に味方をする菌です。
                </p>

                <h2 class="midashi-h2-02">2.健康には腸内フローラのバランスがカギ</h2>

                <p>
                    腸内環境をよくするためには、善玉菌：悪玉菌：日和見菌の割合が2：1：7が理想的といわれています。善玉菌は腸を活発化させたり乳酸や酢酸などを作って腸内を弱酸性にしたりする働きがあります。
                    弱酸性とは悪玉菌はアルカリ性を好むため、悪玉菌が住みにくく活動しにくい環境です。つまり、腸内フローラを善玉菌が優性の環境にすることで、悪玉菌が増殖しにくくできるのです。
                    そうすることで、腸内環境は整って健康的な身体が作られやすくできます。
                    <br><br>
                    ちなみに、日和見菌は優勢な菌の味方をするので、善玉菌が優勢な状態を作ることが健康に欠かせません。
                </p>



                <h2 class="midashi-h2-02">3.腸内フローラを整えるには</h2>
                <p>
                    腸内環境を整えるポイントは、生活習慣にあります。例えば、食習慣が悪かったりストレスを溜め込んだりしていると、悪玉菌が増えやすくなるのです。
                    特にお肉は腸内に溜まると悪玉菌による腐敗を招いて、アンモニアやフェノールなどの有害な物質が増えるきっかけを作ってしまいます。これらの有害物質は腸で吸収されると身体中の内臓にダメージを与え、
                    老化を加速させる原因になるのです。
                    <br><br>
                    腸内環境を整えるためには食生活に気を配るのが効果的です。例えば、肉だけでなく野菜もしっかりと摂ることが大切といえます。特に食物繊維を含んだ野菜は重要です。
                    食物繊維は、腸で膨張することで排便を促します。この作用によって腐敗してしまう内容物が体外へ出ていくので、悪玉菌の増殖を防げます。
                    <br><br>
                    これに加えて、善玉菌が含まれた食品を積極的に口にするのも効果的です。例えばヨーグルトやチーズを食べることで腸内の善玉菌を増やすことができます。
                    また、乳酸菌やビフィズス菌を配合したサプリメントもおすすめです。
                </p>


                <h2 class="midashi-h2-02">4.腸内フローラが整うと健康でキレイになれる！</h2>
                <p>
                    腸内フローラが整うとは、腸内環境が良好で腸が本来の働きができる状態といえます。つまり、食べて補給された栄養をしっかりと吸収して、身体中の細胞に供給できる状態です。細胞に必要な栄養が供給できれば、肌バリアがしっかりと機能するので病原菌が体内に入るのを防げます。また、肌のみずみずしさを維持できるので、若々しい状態を保てるようになるのです。つまり、腸内フローラを整えるとは、健康と美容の維持に欠かせないことなのです。
                    <br><br>
                    ちなみに、腸内には免疫細胞の約6割が存在しているといわれています。つまり、腸内環境が整えば免疫力がアップするので、病気にもなりにくくなるのです。 </p>
            </div>






        </div>



        <?php include_once("footer.php"); ?>