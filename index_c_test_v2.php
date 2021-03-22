<?php
include_once('./w/wp-load.php');
$query = "?" . $_SERVER['QUERY_STRING'];
print '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

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

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <title>美ナビ</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <link rel="stylesheet" href="./style.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style>
    .searchbox {
        width: 100% !important;
    }

    .accordion-page-item {
        display: none;
    }

    .selectbox select {
        margin-left: 20px !important;
    }

    .selectbox::after {
        right: -13px !important;
    }
    </style>

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T329LCK" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <?php //include_once('ham.php') 
  ?>


    <div id="wrapper">

        <header>

            <nav class="logoNav">
                <div class="logoBox">
                    <a href="./"><img src="./img/logo-bnavi.png" alt=""></a>
                </div>
            </nav>

            <div class="img-wrap">
                <img src="./img/top-banner-pc-new-bnavi-c_test.jpg" />
            </div>

        </header>


<div style="padding:50px 0 0;">
    <?php get_search_form(); ?>
</div>



<section id="section-01">

    <div class="title-wrap">

        <h1 class="left">「もっとスリムになりたい！」<br>「燃焼サプリで効率的にスッキリしたい！」</span></h1>

        <h1 class="right">とお悩みの方へ</span></h1>

        <h1 class="center">本当におすすめ！<br>厳選ダイエッターサポートサプリランキング<br>ベスト３を大公開！</span></h1>

    </div>
    <!--.title-wrap end-->

    <div class="txt-wrap">

        <p>当サイトでは数多くのダイエッターサポートサプリの成分や利用者の口コミを徹底調査！</p><br>

        <p><span class="bold bg-y">【失敗しないダイエッターサポートサプリの正しい選び方】</span>と<br>
        <span class="bold bg-y">【厳選！おすすめのアイテム】</span>をご紹介します。
        </p><br>

        <p>「本気でダイエッターサポートサプリを挑戦したい」とお考えの方は是非参考にしてみてください。</p><br>

        <p>早速、一部を比較表でご紹介します。</p>
        　　　　　　　　　　　　
    </div>
    <!--.txt-wrap end-->

</section>
<!--#section-01 end-->




<section id="section-02">

    <!--比較表START-->

    <table class="table-01" cellspacing="1">

        <tbody>

            <tr>

                <th class="crown">

                </th>

                <th class="crown">
                    <p>
                        <img src="./img/n_img/crown_icon_01.png" width="100" alt="" />
                    </p>

                </th>

                <th class="crown">
                    <p>
                        <img src="./img/n_img/crown_icon_02.png" width="100" alt="" />
                    </p>
                </th>

                <th class="crown">
                    <p>
                        <img src="./img/n_img/crown_icon_03.png" width="100" alt="" />
                    </p>
                </th>


            </tr>


            <!-- 1行目 商品名-->

            <tr>
                <th class="table-title">
                    <h6>商品名</h6>
                    </p>
                </th>

                <th>

                    <p>
                        <a class="link-img" target="_blank"
                            href="./links/sibo.php<?php echo "?" . $_SERVER['QUERY_STRING'] ?>">
                            <img src="./img/shiboh.jpg" alt="" />
                        </a>
                    </p>

                    <p>
                        <span class="lbg">
                            <a target="_blank"
                                href="./links/sibo.php<?php echo "?" . $_SERVER['QUERY_STRING'] ?>">シボヘール</a>
                        </span>
                    </p>

                </th>



                <th>
                    <p>
                        <a class="link-img" target="_blank"
                            href="./links/meta.php<?php echo "?" . $_SERVER['QUERY_STRING'] ?>">
                            <img src="./img/meta.jpg" alt="" />
                        </a>
                    </p>
                    <p>
                        <span class="lbg">
                            <a target="_blank"
                                href="./links/meta.php<?php echo "?" . $_SERVER['QUERY_STRING'] ?>">メタバリアEX</a>
                        </span>
                    </p>
                </th>

                <th>
                    <p>
                        <a class="link-img" target="_blank"
                            href="./links/slilin.php<?php echo "?" . $_SERVER['QUERY_STRING'] ?>">
                            <img src="./img/slilin.jpg" alt="" />
                        </a>
                    </p>
                    <p>
                        <span class="lbg">
                            <a target="_blank"
                                href="./links/slilin.php<?php echo "?" . $_SERVER['QUERY_STRING'] ?>">スリリンW</a>
                        </span>
                    </p>
                </th>




                <!-- 2行目 -->

            <tr>
                <td class="table-title">
                    <h6>「実感した！」<br>ユーザー評価</h6>

                </td>

                <td>
                    <p>
                        <img src="./img/review_5.gif" alt="" />
                    </p>

                    <p class="f-15">4.8/5.0</p>

                </td>


                <td>
                    <p>
                        <img src="./img/review_45.gif" alt="" />
                    </p>

                    <p class="f-15">4.5/5.0</p>

                </td>

                <td>
                    <p>
                        <img src="./img/review_45.gif" alt="" />
                    </p>

                    <p class="f-15">4.4/5.0</p>

                </td>



            </tr>



            <!-- 3行目 -->




            <!-- 4行目 -->

            <tr>

                <td class="table-title width">
                    <h6>配合成分</h6>
                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_01.png" alt="" />
                    <p>葛の花由来イソフラボン</p>
                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_01.png" alt="" />
                    <p>サラシノール</p>
                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_02.png" alt="" />
                    <p>ターミナリアベリリカ由来没食子酸・乳酸菌１億個・活性炭</p>
                </td>


            </tr>



            <!-- 5行目 -->

            <tr>

                <td class="table-title width">
                    <h6>即効性</h6>
                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_01.png" alt="" />

                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_01.png" alt="" />
                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_02.png" alt="" />
                </td>

            </tr>



            <!-- 6行目 -->

            <tr>

                <td class="table-title width">
                    <h6>こんな人に<br>おすすめ</h6>
                </td>

                <td>
                    <p>・脂肪を燃焼させたい<br>・ダイエッターサポートサプリを手軽に試したい<br>・安心の機能性表示食品を試したい</p>
                </td>

                <td>
                    <p>
                    ・サラシノールが糖の吸収を抑える<br>・サラシノールの継続摂取により腸内環境を整える<sup>（※1）</sup><br>・継続摂取により高めのBMIを改善する<sup>（※2）</sup>
                    </p>
                </td>

                <td>
                    <p>・手ごろな価格で体内フローラサプリを試したい<br>・食べる前に２粒ダケ！脂肪や糖の吸収も抑えたい</p>
                </td>

            </tr>



            <!-- 7行目 -->

            <tr>

                <td class="table-title">
                    <h6>通常価格</h6>
                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_01.png" alt="" />
                    <p>2,808円</p>

                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_02.png" alt="" />
                    <p>30日分 4,570円</p>
                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_02.png" alt="" />
                    <p>3,225円（定期）</p>
                </td>




            </tr>


            <!-- 8行目 -->

            <tr>

                <td class="table-title">
                    <h6>キャンペーン</h6>
                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_01.png" alt="" />
                    <p>初回980円</p>

                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_01.png" alt="" />
                    <p>14日分(初回限定・お一人様1回1個限り) 500円+税</p>
                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_02.png" alt="" />
                    <p>初回1480円</p>
                </td>



            </tr>


            <!-- 9行目 -->

            <tr class="btn" style="height: 50px;">

                <td class="table-title">
                    <h6 class="table-title">公式サイト</h6>
                </td>

                <td>
                    <a target="_blank"
                        href="./links/sibo.php<?php echo "?" . $_SERVER['QUERY_STRING'] ?>">
                        <img src="./img/n_img/btn_site_go_s.png" width="100%">
                    </a>
                </td>

                <td>
                    <a target="_blank"
                        href="./links/meta.php<?php echo "?" . $_SERVER['QUERY_STRING'] ?>">
                        <img src="./img/n_img/btn_site_go_s.png" width="100%">
                    </a>
                </td>

                <td>
                    <a target="_blank"
                        href="./links/slilin.php<?php echo "?" . $_SERVER['QUERY_STRING'] ?>">
                        <img src="./img/n_img/btn_site_go_s.png" width="100%">
                    </a>
                </td>




            </tr>

        </tbody>

    </table>

    <div class="meta-notes">

<p>
 ※1 糖の吸収を抑える機能性と、継続摂取により腸内環境を整える(おなかの中のビフィズス菌を増やす)機能性は機能性関与成分サラシノールによる研究レビュー<br>
 </p>
 <p>
 ※2 継続摂取によりBMIが高めの方のおなかの脂肪（体脂肪・内臓脂肪）・体重を減らすことで高めのBMIを改善する機能は、最終製品を用いた臨床試験
 </p>



</div>

    <!--比較表END-->

</section>
<!--#section-02 end-->




<section id="section-03">


    <h1 class="midashi">ダイエッターサポートサプリ選びで失敗しないための５つのポイント</h1>

    <?php include('point.php');  ?>


</section>
<!--#section-03 end-->


<div class="img-wrap">
    <img id="rank_bn" src="./img/n_img/ranking-banner-pc-c_test.png" />
</div>




<!----------------------------RANKING-------------------------->

<section id="section-04">

    <ul class="tabs">
        <li rel="tab1" onclick="rank_bn.src='./img/n_img/ranking-banner-pc.png'">総合<br>ランキング</li>
        <li rel="tab2" onclick="rank_bn.src='./img/n_img/ranking-banner-pc-b.png'">体内フローラ<br>サプリ</li>
        <li class="active" rel="tab3" onclick="rank_bn.src='./img/n_img/ranking-banner-pc-c.png'">燃焼<br>サプリ</li>
        <li rel="tab4" onclick="rank_bn.src='./img/n_img/ranking-banner-pc-m.png'">糖質ケア<br>サプリ</li>
        <li rel="tab5" onclick="rank_bn.src='./img/n_img/ranking-banner-pc-d.png'">酵素<br>サプリ</li>
        <li rel="tab6" onclick="rank_bn.src='./img/n_img/ranking-banner-pc-e.png'">酵素<br>ドリンク</li>
        <li rel="tab7" onclick="rank_bn.src='./img/n_img/ranking-banner-pc-g.png'">ダイエット<br>スムージー</li>
    </ul>

    <?php include 'ranking.php'; ?>




</section>
<!--#section-04 end-->

<!----------------------------RANKING-------------------------->




<section id="section-05">


    <img src="./img/n_img/last_banner.png" alt="" width="100%">


    <div class="last-container">


        <div class="last-txt bg-wh border-r">


            <p>当サイトでご紹介しているダイエッターサポートサプリは、効果はもちろんですが、

                <span class="bold">できるかぎり多くの「スリムになりたい」とお悩みの方に試していただきたい</span>という気持ちから、

                <span class="bold red">お得に試せるかどうか</span>、という点も重要視して選ばせていただきました。</p><br>

            <p>総合人気ランキング第１位の<span class="bold">シボヘール</span>は今なら <span class="bold blue">初回980円モニター募集中！</span>
                なんと、 <span class="bold red">１日わずか３２円 </span>で試すことが出来ちゃいます。</p><br>

            <p>しかも、契約の回数しばりなどはなく、<span class="bold">１回きりでの購入でも大丈夫</span>なんです！</p><br>

            <p>このめっちゃお得なキャンペーンは、 <span class="bold">今だけのキャンペーンなのですぐに募集が終了してしまう可能性が高い</span>です。</p><br>

            <p>試してみようとお考えの方は、<span class="bold red"> お得なキャンペーンが終了する前に手に入れてくださいね！</span></p>

            <div class="center">
                <img src="./img/n_img/item-a.png" width="350">
            </div>

            <a target="_blank" href="./links/sibo.php<?php echo "?" . $_SERVER['QUERY_STRING'] ?>"
                target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_last_s.png" width="100%" />
            </a>


        </div>

    </div>



</section>



<!----------------------------SEARCH-------------------------->


<!----------------------------SEARCH-------------------------->


<script>
$(function() {

    $(".tab_content").hide();
    $(".tab_content:nth-of-type(3)").show();

    $("ul.tabs li").click(function() {
        $("ul.tabs li").removeClass("active").css("color", "#333");
        //$(this).addClass("active").css({"color": "darkred","font-weight": "bolder"});
        $(this).addClass("active").css("color", "white");
        $(".tab_content").hide()
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).fadeIn()
    });
});
</script>

<?php include('footer_test_v2.php'); ?>