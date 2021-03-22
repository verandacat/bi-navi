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
            食べすぎた！正月太りを速効で解消するダイエット法
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/column-hd-sp-07.png" alt="" width="100%">

            </div>

            <div class="txt-wrap">

                <p>
                    おせち料理やお雑煮やお餅など、おいしいごちそうがたくさん食卓に並び、親しい仲間が集まりのんびりと過ごすお正月は、どうしても食べ過ぎてしまいがちですよね。
                    <br><br>
                    お正月が過ぎて、現実に戻り増えすぎた体重に驚愕…という方も多くいらっしゃると思います。お正月に蓄えた脂肪がそのまま蓄積されると、どんどん太っていってしまいます。
                    今回はそんな正月太りを速効で解消するダイエット法についてお話ししたいと思います。

                </p>

                <h2 class="midashi-h2-02">▼正月太りはなぜ起こる</h2>

                <p>
                    忘年会シーズン、クリスマスから年末年始、お正月とおいしい食事や楽しい食事を摂る機会が多いですよね。
                    しかし、12月中にはそんなに増えなかったはずの体重が、お正月が明けてみるとびっくりするほど増えていた経験はありませんか。
                    <br><br>
                    その原因はずばり、消費エネルギーが減ったことにあります。忘年会での暴飲暴食、
                    クリスマスシーズンのチキンやケーキなどで摂取エネルギーは増えますが、12月中は割と忙しく活動的に過ごす人が多いと思います。
                    <br><br>
                    しかし、年末からお正月は実家に帰省したり自宅でのんびりしたりと、あまり活動的に過ごす人は少ないのではないでしょうか。
                    のんびり過ごすと当然ですが消費されるエネルギーは減り、摂ったエネルギーが消費されずに体内に蓄積します。それが、正月太りの原因になります。
                </p>

                <h2 class="midashi-h2-02">▼正月太りを速効で解消する方法</h2>


                <p class="bold">①しっかり寝る</p>
                <p>
                    正月の家族団らんの楽しいひと時に、ついつい夜更かしし寝不足になりがちではないでしょうか。就寝は立派なエネルギーを消費する活動です。
                    正月明けは特に、寝る直前は何も食べず、しっかりとまとまった時間の就寝をとるようにしてください。
                    そうすることで、就寝中の消費エネルギー量を上げることができます。就寝中に消化活動が行われないよう、夕食は就寝の2～3時間前には終わらせるようにしましょう。
                </p>

                <p class="bold">②夕食は質素に</p>
                <p>
                    朝食、昼食はしっかりと摂り、昼間の活動エネルギーにすることが必要ですが、良い就寝のためにも、摂取エネルギーを減らすためにも、
                    夕食は質素にした方が無難です。主食を減らし、揚げ物は避け、
                    野菜中心の食事にすることで、お正月に乱れた食生活を取り戻すことができます。夕食だけの食事制限ならストレスも少なく、
                    気軽に取り入れることができるのではないでしょうか。
                </p>


                <p class="bold">③しっかり動く</p>
                <p>
                    当たり前ですが、運動することで消費エネルギーは増えます。正月明けの忙しい毎日で、知らないうちに活動が増えている人はいいですが、
                    正月ボケ、正月疲れでのんびりとしてしまうと、お正月に蓄えた脂肪を燃焼させることが難しくなってしまいます。
                    お正月明けは、のんびりすごさず、てきぱきと動くように心がけましょう。
                    買い物にいつもより少し遠いスーパーまで出向いたり、通勤の際1駅余分に動いたりといった、ついで運動がおすすめです。
                </p>

                <p class="bold">・基礎代謝を上げる</p>

                <p>基礎代謝が上がると体重は落ちやすくなります。基礎代謝は筋肉の多い体で高く、脂肪の多い体で低くなります。
                    ですので、基礎代謝向上のためには筋肉量を増やすことが最も効果的です。
                    スクワットや腹筋などの筋トレ(無酸素運動)なら、寒い中外に出ることなく自宅で行えますし、基礎代謝向上のためにとても効果的です。
                    ぜひ、お正月明けにはしっかりと筋トレに取り組むようにしましょう。</p>



                <h2 class="midashi-h2-02">▼正月太りは速効で解消しよう</h2>

                <p>
                    お正月で増えた体重をそのまま見て見ぬふりをしてしまうと、どんどん体重は落ちにくくなり次のお正月までそのまま。
                    どんどん体重が増える。といった負のループにもなりかねません。増えてしまった体重は見て見ぬふりをせず速効で落としましょう。
                    増えてすぐなら体重は楽に落ちるはずです。
                </p>


            </div>

        </div>



        <?php include_once("footer.php"); ?>