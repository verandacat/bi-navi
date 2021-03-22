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
            糖質制限で痩せる？糖質制限ダイエットのやり方
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/column-hd-sp-05.png" alt="" width="100%">

            </div>

            <div class="txt-wrap">

                <p>

                    「糖質制限ダイエット」という言葉を耳にしない日がないほど、糖質制限ダイエットは一般的になりつつあります。
                    <br><br>
                    糖質制限ダイエットって本当に痩せるの？正しい糖質制限ダイエットのやり方は？
                    <br><br>
                    今回は、糖質制限ダイエットの正しい方法など、糖質制限ダイエットの本質についてお話します。

                </p>

                <h2 class="midashi-h2-02">▼そもそも糖質を摂ると太るの？</h2>

                <p>糖質は、ご飯やパンや麺、甘いお菓子などに多く含まれる栄養素で、体の中では主にブドウ糖として存在しています。ブドウ糖とは人が活動する上でのエネルギー源になる物質です。適量の糖質の摂取で太ることはありませんが、過剰に摂取すると糖質が余ってしまいます。
                    <br><br>
                    体の中でエネルギー源として消費されずに余った糖質は、インスリンというホルモンの働きにより脂肪となり、体内に蓄積されます。脂肪が多くなると、インスリンの働きが悪くなり、結果として脂肪の多い体になる(太る)ということになります。
                    <br><br>
                    糖質を過剰に摂取すると脂肪が増えて太ってしまうことがおわかりいただけたでしょうか。
                </p>

                <h2 class="midashi-h2-02">▼糖質制限ダイエットの正しい方法</h2>

                <p>
                    糖質は、摂りすぎると太ってしまいます。では糖質を制限する「糖質制限ダイエット」ではどのような食材をどのくらい制限すればいいのでしょうか。
                    糖質制限ダイエットの正しい方法について詳しく見てみましょう。
                    <br><br>
                    糖質制限ダイエットの中には糖質の摂取を限りなくゼロに近づけるものもありますが、あまりに厳しい食事内容にほとんどの人が挫折してしまいます。
                    緩やかな糖質制限を長期間続けることでも十分なダイエットになりますので、できる範囲での制限が理想的です。
                    <br><br>
                    では、具体的にどのような食品を制限すればいいのでしょうか。緩やかな糖質制限ダイエットにおいて、
                    制限する食品は「主食(ご飯・パン・麺)」と「スイーツ」と「果物」です。これらは糖質を主に構成されている食品ですので、
                    できるだけ控える方が良いでしょう。その代り、おかずはおなか一杯になるまで食べてください。それが糖質制限ダイエットです。
                </p>

                <h2 class="midashi-h2-02">▼挫折しそうな時の工夫</h2>

                <p>
                    「主食・スイーツ・果物を控える」とわかってはいても、どうしても主食を食べたいときやどうしても間食が欲しいときがありますよね。
                    そんなときにも挫折せずに乗り越えられる工夫についてお話します。
                    <br><br>
                    ・主食は嵩増しする…いつもは制限しているご飯を、今日はたくさん食べたい！そんな時が来たら、ご飯に混ぜ物をして嵩増ししてみてください。
                    炊き込みご飯などにすると、加えた具材の分たくさん食べることができます。
                    <br><br>
                    ・間食は糖質ゼロを選ぶ…甘いデザートが食べたい時や、甘いジュースを飲みたい時もありますよね。そんな時は「糖質ゼロ」の製品を選ぶようにしてください。
                    ゼリーや炭酸飲料、清涼飲料水などにも糖質ゼロの商品がたくさんあります。そのようなものなら、糖質制限ダイエット中でも安心して食べることができます。
                    <br><br>
                    ・毎日の補食は糖質が少ないものに…たまにじゃなくて毎日間食を摂りたい！そんな人もいますよね。その場合は、糖質の少ないナッツやチーズ、小魚を間食にすれば安心です。
                    不足しがちなカルシウムも多く摂れますので、健康のためにもぜひとりいれてみてくださいね。
                </p>


                <h2 class="midashi-h2-02">▼緩やかな糖質制限でダイエット成功へ！</h2>

                <p>
                    厳しすぎるダイエットに打ち勝てる人はそう多くはありません。自分にもこの程度ならできるかもしれない。
                    これくらいなら我慢できそうだ。という、緩やかな糖質制限を長く続けることが、健康的な糖質制限ダイエットを成功へと導くカギになります。
                    <br><br>
                    短期間でストンと体重が落ちると嬉しいですが、リバウンドしてしまうと元も子もありません。続けられる糖質制限ダイエットで、健康体系を維持しましょう。

            </div>



        </div>



        <?php include_once("footer.php"); ?>