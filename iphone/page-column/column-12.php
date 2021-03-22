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
            ダイエットを成功させる8の秘訣
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/column-hd-sp-12.png" alt="" width="100%">

            </div>

            <div class="txt-wrap">


                <p>
                    ダイエットに必要なのは食生活改善や運動ですが、実はそれを継続させることが大変で、精神力が試されます。
                    ダイエットのモチベーションは、始めたころが一番高い位置にあり、段々下がってきて停滞期には完全に無くなってしまうことも。
                    ここでダイエットをやめてしまい元通りになる人がとても多いです。この停滞期を乗り越えることで目標の体重やサイズになることができるのです。
                    今回はダイエットを成功させる秘訣を紹介します。
                </p>

                <h2 class="midashi-h2-02">１：意識を変える。</h2>

                <p>まず、絶対に痩せるという強い気持ちをしっかり頭に叩き込みます。
                    今までの自分の生活を断ち切って新しい自分になるんだという強い意識を持ちます。気負いすぎなくても良いですが、軽い気持ちではダイエットは成功しません。
                </p>

                <h2 class="midashi-h2-02">２：周りの人にダイエット宣言をする</h2>

                <p>周囲の人、家族や友達など身近にいる人に宣言します。ダイエットを応援してくれて、時には厳しいことを言ってくれる人は有難い存在です。
                    ただし、もう何度もダイエット宣言をしては失敗を繰り返していると、あまり本気にしてもらえない可能性もあるので、そういう時は今まで宣言したことがない人を選びます。
                </p>

                <h2 class="midashi-h2-02">３：目標を明確にする</h2>

                <p>ただ漠然と痩せたい・・とかウエストがもう少し・・などでは目標があいまいなのでどこがゴールかわかりません。
                    目標は数値でしっかり明確にしておきましょう。どれくらいの期間で体重マイナス何㎏、BMIをこの範囲に収める、などです。ボディサイズはウエスト、
                    ヒップ、太もも、ふくらはぎなど色々な部分を計測し記録しておきます。ダイエット前、中、後でサイズ変化を見るのも楽しみの一つになります。あまり自分では計らないところでは、
                    首（手首、足首も含め）も意外と結果が出やすいので、計測しておくと面白いかもしれません。サイズ目標はなかなか細かい設定が難しいので、
                    ウエストとヒップくらいを決めれば十分です。
                </p>

                <h2 class="midashi-h2-02">４：小さな目標を設定する</h2>

                <p>最終目標を決めたら、目先の小さな目標も設定します。体重やサイズでもいいですが、結婚式出席があるので、それまでに1サイズ下のフォーマルドレスが着られるようになる、
                    子供の入学式までにこのスーツをゆとりをもって着られるようになる、などファッションに関して目標を持つとモチベーションが続きやすいです。
                </p>

                <h2 class="midashi-h2-02">５：ストレス解消する</h2>

                <p>ダイエットには我慢がつきものです。今までの生活を変えることになるので多かれ少なかれストレスが生じます。
                    食べることへの欲求が抑えられない時もあるかもしれません。一度暴食してしまってズルズルと自暴自棄になりダイエット終了、
                    なんてことにならないよう自分なりのストレス解消法を見つけてください。スポーツ、趣味、旅行など何でも良いです。
                    飲み会がストレス発散という人も多く、ダイエット中は避けがちですがたまになら飲みに行くのも大丈夫です。
                    お酒はハイボールなどの糖質・カロリーの低いものを選び、おつまみもヘルシーなものを食べれば、お酒の席でも太りにくくなります。
                    我慢も必要ですが、ストレスはちょこちょこ発散して、溜めすぎないことがポイントです。</p>

                <h2 class="midashi-h2-02">６：姿勢をよくする</h2>

                <p>余計な脂肪がついている人は姿勢の悪い人が多いです。姿勢が悪いと肩こり腰痛になり、そこに脂肪が溜まりやすくなります。
                    猫背の人はお腹に脂肪が付き、首から肩の周りがたくましくなる傾向があります。背筋を伸ばす、足をきちんといつも揃えるなど日常生活で常に意識しておきたいことですね。
                </p>

                <h2 class="midashi-h2-02">７：ご褒美を決める</h2>

                <p>短期目標達成時や、ダイエット1か月継続記録などで自分に対してのご褒美を決めておくと良いでしょう。
                    高級スイーツを食べる、欲しかったアクセサリーを買う、など無理のない範囲で小さなことで構いません。ただし、
                    バイキングに行く・焼肉に行くなど「たくさん食べる系」は止めておいた方が無難です。
                    ダイエット中なのでどうしてもカロリー等を気にしながら食べることになり、体重が増えたら増えたで自己嫌悪に陥り、ご褒美の意味がなくなるからです。
                </p>


                <h2 class="midashi-h2-02">８：停滞期は必ず来る</h2>

                <p>ダイエットをしていると必ず体重が落ちなくなる停滞期が訪れます。体重が減り始めて2週間から1か月頃が一番多いです。
                    これはダイエットが順調だという証拠でもあります。体重減少が停滞している時はサイズ変化を見てみてください。開始時と比較すると、
                    きっとサイズダウンしているのでダイエットに対するモチベーションが復活します。停滞期はエクササイズなどでウエストを重点的に絞ってみる、
                    ヨガなどを行って心身ともに落ち着く、などで乗り越えましょう。停滞期を乗り越えると、また体重が少しずつ落ちてきます。
                    <br><br>
                    以上、ダイエットを成功させる秘訣でした。メンタル面がやはり重要になってくるので、
                    自分の弱みを知ることも大切です。自分に合ったダイエット法を見つけることも長続きの秘訣です。
                    ダイエットを通して身体が痩せるだけでなく、精神的にも強くなれたら良いですね。
                </p>

            </div>





        </div>


        <?php include_once("footer.php"); ?>