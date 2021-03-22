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
            今話題！ケトジェニックダイエットとは？
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/column-hd-sp-06.png" alt="" width="100%">

            </div>

            <div class="txt-wrap">

                <p>

                    今話題のケトジェニックダイエットをご存知でしょうか？ケトジェニックダイエットとは、「食べて健康的に痩せる」ダイエットのことを言います。具体的に言えば「炭水化物」を制限し、他の栄養素からエネルギーを得て、体重を落とす方法のことです。
                    <br><br>
                    しかし、単なる炭水化物制限ダイエットとは異なり、少し画期的なダイエットです。
                    ケトジェニックダイエットの実践方法や効果のほどについて、今回はお伝えしていきます。

                </p>

                <h2 class="midashi-h2-02">▼ケトジェニックダイエットの基礎知識</h2>

                <p>人は食事の平均的なエネルギーのバランスは、炭水化物50～60％、脂質20～30％、たんぱく質12～18％の割合で成り立っています。
                    <br><br>
                    対してケトジェニックダイエットでは、脂肪を平均よりもたくさん摂り、炭水化物をぐっと減らします。ケトジェニックダイエットにおけるエネルギーのバランスは、およそ炭水化物5％、脂質80％、たんぱく質15％です。
                    <br><br>
                    炭水化物がいかに少なく、脂質がいかに多いかお分かり頂けるでしょうか？
                </p>

                <h2 class="midashi-h2-02">▼ケトジェニックダイエットの狙いは？</h2>

                <p>
                    ではなぜ、そこまで炭水化物を制限し、脂質を積極的に摂るのでしょうか。そうすることで体の中で起こりうる現象について解説いたします。
                    <br><br>
                    人の体は主にぶどう糖(炭水化物)をエネルギー源として活動しています。ぶどう糖が少なくなれば、次は脂質をエネルギー源として活動するため、脂肪の燃焼が始まります。
                    <br><br>
                    ケトジェニックダイエットでは、炭水化物を極端に制限しますので、ぶどう糖の枯渇状態が起きやすく、脂質がエネルギー源として積極的に使われるようになります。
                    脂質がエネルギー源として、体内で使われるときに生成される物質を「ケトン体」と呼び、ケトン体が体内に過剰にある状態のことを「ケトーシス」と言います。
                    <br><br>
                    ケトーシス状態になると、空腹を感じにくくなり、食後に眠くなることも少なくなります。
                    つまり、ケトジェニックダイエットの狙いは、脂質をエネルギー源として積極的に利用し、体をケトーシス状態にし、空腹を感じにくくすることにより、
                    脂肪と体重の減少を促進することなのです。
                </p>

                <h2 class="midashi-h2-02">▼ケトジェニックダイエットの実践方法</h2>

                <p>では、ケトジェニックダイエットはどのようにして実践するのでしょうか。細かく見ていきましょう。</p>

                <p class="bold">①炭水化物は厳しく制限する</p>
                <p>とにかく炭水化物は厳しい制限が必要です。ご飯やパン、麺などの主食はNG食品です。</p>

                <p class="bold">②たんぱく質も取りすぎに注意を</p>
                <p>炭水化物(主食)を制限することで、食事はおかず中心になると思いますが、肉や魚、卵や豆を主食の代わりにたくさん摂ると、
                    たんぱく質の摂取量が増えてしまいます。
                    たんぱく質の摂取量は普通食と変わりなく摂ることが理想的ですので、主菜の摂りすぎにも注意が必要だと言えます。</p>

                <p class="bold">③食物繊維はしっかり摂る</p>
                <p>野菜やキノコや海藻には食物繊維がたっぷりと含まれています。毎食、生野菜なら両手いっぱいぶん、
                    温野菜なら片手にいっぱいぶんは摂るように心がけましょう。
                    ただし野菜の仲間でも、芋やかぼちゃは炭水化物が多いので摂りすぎは禁物です。</p>



                <h2 class="midashi-h2-02">▼ケトジェニックダイエット実践中に選びたい食品・避けたい食品</h2>

                <p>
                    ケトジェニックダイエットは厳しい炭水化物制限ダイエットです。どのような食品を選び、どのような食品を避けるといいでしょうか。下記に一覧にしましたのでご覧ください。
                </p>

                <p>

                    ≪選びたい食品≫
                    <br><br>
                    ・肉魚豆卵などのたんぱく質の多い食品(ただし、普通食と同量がおすすめ) <br>
                    ・バター、植物油(オメガ3脂肪酸が多いココナッツオイルがおすすめ) <br>
                    ・ナッツ、チーズ、ビターチョコレート(カカオ99％など) <br>
                    ・糖質ゼロ食品 <br> <br>

                    ≪避けたい食品≫ <br> <br>

                    ・ご飯、パン、麺 <br>
                    ・お菓子類全般 <br>
                    ・ドライフルーツ <br>
                    ・ジュースや嗜好飲料 <br>
                </p>

                <h2 class="midashi-h2-02">▼ケトジェニックダイエット成功のために</h2>
                <p>
                    ケトジェニックダイエットは厳しい炭水化物制限の上で成り立っています。どうしても主食が食べたくなったり、
                    お菓子が食べたくなったりと誘惑や試練が数多く待ち構えているかもしれません。
                    <br><br>
                    しかし、体がケトーシス状態になってしまえば、空腹感も感じにくくなり、食事制限は楽になります。
                    まずは、1週間などの短期戦！と決めて、挑むとケトジェニックダイエット成功への近道かもしれません。
                </p>
            </div>


        </div>


        <?php include_once("footer.php"); ?>