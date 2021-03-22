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
            ダイエットに効果的な運動5選
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/column-hd-sp-08.png" alt="" width="100%">

            </div>

            <div class="txt-wrap">


                <h2 class="midashi-h2-02">ダイエットの基本</h2>

                <p>
                    ダイエットの基本は、摂取カロリーを消費カロリーより減らすことです。
                    食べる量を減らしたり、カロリーの低い食品を選んで、摂取カロリーを落とせば、体重は減ります。<br><br>
                    要するに、「食べなければ痩せる」わけですが、ここには大きな落とし穴があります。
                </p>

                <h2 class="midashi-h2-02">食事制限ダイエットの落とし穴</h2>

                <p>
                    食べなければ痩せるはずなのに、カロリー制限を続けると、なぜかある時からさっぱり体重が落ちなくなる、いわゆる「停滞期」がやって来ます。<br>
                    摂取カロリーの減少が続くと、体は「食べ物が入ってこないぞ。生命の危機だ。ヤバい！」と感じ、代謝を低下させて、消費カロリーを抑えようとするのです。
                    そのため、食べること我慢して、ひたすら低カロリーダイエットを続けると、むしろ痩せにくい体質になってしまうのです。<br>
                    だからこそ、摂取カロリーを減らすのではなく、消費カロリーをアップさせる、代謝をアップさせてメラメラ燃やす体質をゲットするライフスタイルが必要なのです。<br>
                    では何をすれば良いか。それはもちろん「運動」です。
                </p>




                <h2 class="midashi-h2-02">まずは日常を運動に変える</h2>

                <p>
                    特にこれまで運動習慣がなかった人の場合、新しく運動を始めるというのはちょっと大変かもしれません。<br>
                    何が自分にあっているかわからない、ジムに入会しても続くか心配という人は、日常生活を運動に変えるところから始めてみてはいかがでしょう。
                </p>

                <p class="bold">①街やオフィスを有酸素運動のフィールドに変える</p>
                <p>電車一駅分歩く、駅やオフィスでも階段を使う、いつもより大股早足を心がけてみる、こうした小さなことの積み重ねで、運動量はぐっと増えます。
                    歩くという動作は、立派な有酸素運動です。<br>
                    体についた中性脂肪をを燃やすためには、体内に酸素を取り込む必要があるので、筋トレなどの無酸素運動よりも、ウオーキングやジョギングなどの有酸素運動が効果的です。<br>
                    以前は、減量には20分以上の有酸素運動を継続しなければいけないと考えられていました。<br>
                    しかし近年の研究では、１日30分の運動を１回するのと、何回かに分けて運動を行うことの差はないことが判明しました。<br>
                    だから、駅まで10分歩く、オフィスの上の階まで階段を使う、タクシーは使わない、ランチの時間に公園を散歩する、こんな動作の積み重ねで、１日の有酸素運動量を稼いで行きましょう！
                </p>

                <p class="bold">②階段ワークアウトは痩せる・ヒップアップする</p>
                <p>階段を登るのが当然になったら、今度はもっと積極的に階段をワークアウト空間に変えてしまいましょう。<br>
                    階段は有酸素運動と筋トレをミックスできる最高のジム空間になります。<br>
                    つま先立ちで、かかとをつけずに登れば、ふくらはぎの筋肉に効いて、膝から下の引き締めができます。<br>
                    一方、かかとから着地する感じで、階段を登ると、太ももの裏側からヒッ　　
                    プに良く効きます。<br>
                    よりヒップアップを狙うなら、一段飛ばしで、かかとから着地するイメージで階段を登りましょう。<br>
                    飛び上がるのではなく、前の足・ヒップにしっかり体重を乗せながら登るのがポイントです。
                </p>

                <h2 class="midashi-h2-02">家でもできるワークアウト</h2>

                <p>
                    ダイエットのためには、大きな筋肉を持つ下半身をしっかりと刺激するのがポイントです。<br>
                    筋肉は、体の中でもっともエネルギーを消費する器官なので、筋肉量を増やすことで基礎代謝が高く、メラメラ燃える体質になります。<br>
                    また、ただ脂肪を落とすダイエットとは違い、メリハリボディを作ることができるというメリットも。<br>
                    筋肉量を増やすには、まず下半身のトレーニングから始めるのが近道です。
                </p>

                <p class="bold">③王道のスクワット</p>

                <p>
                    家でもできるオススメトレーニングは、「スクワット」です。<br>
                    スクワットは、足だけでなく体幹部もしっかり使うことができる全身運動なので、消費カロリーも多くダイエットに最適です。<br>
                    またスクワットはフォームを変えれば、ヒップに効かせたり、内腿に効かせたり、腿の前に効かせたりとアレンジ可能です。<br>
                    お悩み別にフォームを変えて見るのもいいですね。
                    <br><br>

                    いくつかのフォームを紹介した動画はこちら<br><br>

                    参考：「5つの正しいスクワットのやり方！腰・膝を痛めないやり方解説！」MuscleWatchingさん<br>
                    <a class="blue" href="https://www.youtube.com/watch?v=nVp0kbSPfNQ"
                        target="_blank">https://www.youtube.com/watch?v=nVp0kbSPfNQ</a>

                </p>

                <h2 class="midashi-h2-02">ちょっとハードに家トレーニング</h2>

                <p class="bold">④バーピー</p>

                <p>
                    全身筋トレと有酸素運動を組み合わせて、ちょっとハードに脂肪を燃焼させながら、筋肉量もアップしたいなら「バーピー」がオススメ。<br>
                    体の中の大きな筋肉（脚や大胸筋）を同時に鍛えることができます。<br>
                    その上、有酸素運動もできるので、時短で全身鍛えたいという方は、ちょっと頑張ってトライしてください。
                    <br><br>

                    バービーの参考動画はこちら<br><br>

                    参考：「お腹の脂肪を落とすならスクワットよりバーピーが効果的！」MuscleWatchingさん<br>
                    <a class="blue" href="https://www.youtube.com/watch?v=Y96i-xJwGII"
                        target="_blank">https://www.youtube.com/watch?v=Y96i-xJwGII</a>

                    <br><br>

                    スクワットもバーピーも、関節に過剰な負担がかかると怪我につながるので、痛みを感じた時は運動を中止して、フォームを再確認してください。

                </p>

                <h2 class="midashi-h2-02">伸ばして緩めて血流アップ</h2>

                <p class="bold">⑤ストレッチ&筋膜リリース</p>

                <p>
                    ストレッチは全身の血流アップに効果的です。<br>
                    オフィスや勉強、スマホの使いすぎで凝った筋肉をしっかりストレッチして、血流を改善することで、痩せやすい体質に導きます。
                    <br><br>

                    参考：「全身10分！ダイエットストレッ」All About 公式 YouTube チャンネルさん<br>
                    <a class="blue" href="https://www.youtube.com/watch?v=2itcilN7zRc"
                        target="_blank">https://www.youtube.com/watch?v=2itcilN7zRc</a>

                    <br><br>

                    話題の筋膜リリースもオススメです。
                    <br><br>
                    参考：「【竹井仁】疲れない体になるには筋膜をほぐしなさい【筋膜リリース動画】」SeibundoShinkoshaさん<br>
                    <a class="blue" href="https://www.youtube.com/watch?v=Z2GBGDIP_E4"
                        target="_blank">https://www.youtube.com/watch?v=Z2GBGDIP_E4</a>
                    <br><br>

                    参考：「体重の落とし方！自宅で簡単！筋膜リリースで脂肪と体重を落とすダイエット方法！」 MuscleWatchingさん<br>
                    <a class="blue" href="https://www.youtube.com/watch?v=AfiS__9G8Yk&t=2s"
                        target="_blank">https://www.youtube.com/watch?v=AfiS__9G8Yk&t=2s</a>
                    <br><br>
                    フォームローラーがなくても、テニスボールなどで代用もできます。
                    <br><br>

                    特別な道具を使わなくても、日常がジム空間に変わる運動で、スリムなボディを目指しましょう！
                </p>



            </div>

        </div>


        <?php include_once("footer.php"); ?>