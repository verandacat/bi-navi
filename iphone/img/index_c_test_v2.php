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
    <link rel="stylesheet" href="style.css?ver=1" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://bi-navi.com/w/wp-content/themes/nyusan/style.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>美ナビ</title>
    <style>
    .searchbox {
        text-align: left !important;
    }

    #c1 input[type="checkbox"],
    #c3 input[type="checkbox"] {
        margin-left: 12px !important;
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


    <?php //include_once("ham.php"); ?>


    <div id="wrapper">

        <header>

            <nav class="logoNav">
                <div class="logoBox">
                    <a href="./"><img src="./img/logo-bnavi.png" alt=""></a>
                </div>
            </nav>

            <div class="img-wrap">
                <img src="./img/top-banner-sp-new-bnavi_test.jpg" />
            </div>

        </header>


<div style="padding:10px 0 0;">
    <?php get_search_form(); ?>
</div>



<section id="section-01">

    <div class="title-wrap center">

        <h1 class="left"><span class="red">「もっとスリムになりたい！」<br>「燃焼サプリで効率的にスッキリしたい！」</span></h1>

        <h1 class="right">とお悩みの方へ</span></h1><br>

        <h1>本当におすすめ！<br>厳選ダイエッターサポートサプリランキング<br>ベスト５を大公開！</span></h1>

    </div>
    <!--.title-wrap end-->

    <div class="txt-wrap">

        <p>当サイトでは数多くのダイエッターサポートサプリの成分や利用者の口コミを徹底調査！</p><br>

        <p><span class="bold bg-y">【失敗しないダイエッターサポートサプリの正しい選び方】</span>と<span
                class="bold bg-y">【厳選！おすすめのダイエッターサポートサプリ】</span>をご紹介します。
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
                        <img src="./img/n_img/crown_icon_01.png" width="80" alt="" />
                    </p>

                </th>

                <th class="crown">
                    <p>
                        <img src="./img/n_img/crown_icon_02.png" width="80" alt="" />
                    </p>
                </th>

                <th class="crown">
                    <p>
                        <img src="./img/n_img/crown_icon_03.png" width="80" alt="" />
                    </p>
                </th>


            </tr>


            <!-- 1行目 商品名-->

            <tr>
                <th class="table-title width">
                    <h6>商品名</h6>
                    </p>
                </th>

                <th>

                    <p>
                        <a class="link-img" target="_blank"
                            href="./links/sibo.php<?php echo "?" . $query2; ?>">
                            <img src="./img/shiboh.jpg" alt="" />
                        </a>
                    </p>

                    <p>
                        <span class="lbg">
                            <a target="_blank"
                                href="./links/sibo.php<?php echo "?" . $query2; ?>">シボヘール</a>
                        </span>
                    </p>

                </th>



                <th>
                    <p>
                        <a class="link-img" target="_blank"
                            href="./links/meta.php<?php echo "?" . $query2; ?>">
                            <img src="./img/meta.jpg" alt="" />
                        </a>
                    </p>
                    <p>
                        <span class="lbg">
                            <a target="_blank"
                                href="./links/meta.php<?php echo "?" . $query2; ?>">メタバリアEX</a>
                        </span>
                    </p>
                </th>


                <th>
                    <p>
                        <a class="link-img" target="_blank"
                            href="./links/slilin.php<?php echo "?" . $query2; ?>">
                            <img src="./img/slilin.jpg" alt="" />
                        </a>
                    </p>
                    <p>
                        <span class="lbg">
                            <a target="_blank"
                                href="./links/slilin.php<?php echo "?" . $query2; ?>">スリリンW</a>
                        </span>
                    </p>
                </th>


            </tr>



            <!-- 2行目 -->

            <tr>
                <td class="table-title width">
                    <h6>「実感した！」<br>ユーザー評価</h6>

                </td>

                <td>
                    <p>
                        <img src="./img/review_5.gif" alt="" />
                    </p>

                    <p class="f-13">4.8/5.0</p>

                </td>


                <td>
                    <p>
                        <img src="./img/review_45.gif" alt="" />
                    </p>

                    <p class="f-13">4.5/5.0</p>

                </td>

                <td style="width:27%">
                    <p>
                        <img src="./img/review_45.gif" alt="" />
                    </p>

                    <p class="f-13">4.4/5.0</p>

                </td>

            </tr>



            <!-- 4行目 -->

            <tr>

                <td class="table-title width">
                    <h6>配合成分</h6>
                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_01.png" alt="" />
                    <p style="text-align: left">葛の花由来イソフラボン</p>
                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_01.png" alt="" />
                    <p>
                    サラシノール
                    </p>
                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_02.png" alt="" />
                    <p style="text-align: left">ターミナリアベリリカ由来没食子酸・乳酸菌１億個・活性炭</p>
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
                    <p style="text-align: left">・脂肪を減らしたい<br>・ダイエッターサポートサプリを手軽に試したい<br>・機能性表示食品を試したい</p>
                </td>

                <td>
                    <p style="text-align: left;">
                    ・サラシノールが糖の吸収を抑える<br>・サラシノールの継続摂取により腸内環境を整える<sup>（※1）</sup><br>・継続摂取により高めのBMIを改善する<sup>（※2）</sup>
                    </p>
                </td>

                <td>
                    <p style="text-align: left">・手ごろな価格で体内フローラサプリを試したい<br>・食べる前に２粒ダケ！脂肪や糖の吸収も抑えたい</p>
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
                    <h6>公式サイト</h6>
                </td>

                <td style="width:27%;">
                    <a target="_blank" href="./links/sibo.php<?php echo "?" . $query2; ?>">
                        <img src="./img/n_img/btn_site_go_s.png" width="100%">
                    </a>
                </td>

                <td style="width:27%;">
                    <a target="_blank" href="./links/meta.php<?php echo "?" . $query2; ?>">
                        <img src="./img/n_img/btn_site_go_s.png" width="100%">
                    </a>
                </td>

                <td style="width:27%;">
                    <a target="_blank" href="./links/slilin.php<?php echo "?" . $query2; ?>">
                        <img src="./img/n_img/btn_site_go_s.png" width="100%">
                    </a>
                </td>


            </tr>

        </tbody>

    </table>

    <!--比較表END-->

</section>
<!--#section-02 end-->




<section id="section-03">


    <h1 class="midashi">ダイエッターサポートサプリ選びで<br>失敗しないための５つのポイント</h1>

    <?php include('point.php'); ?>

</section>
<!--#section-03 end-->



<div class="img-wrap">
    <img id="rank_bn" src="./img/n_img/ranking-banner-sp-c_test.png" />
</div>

<!----------------------------RANKING-------------------------->

<section id="section-04">

    <div class="swiper-container">
        <ul class="swiper-wrapper tabs">
            <li class="tab1 swiper-slide"><a href="#tab1"
                    onclick="rank_bn.src='./img/n_img/ranking-banner-sp.png'">ダイエッター<br>サポートサプリ<br>総合ランキング</a></li>
            <li class="tab2 swiper-slide"><a href="#tab2"
                    onclick="rank_bn.src='./img/n_img/ranking-banner-sp-b.png'">体内フローラ<br>サプリ</a></li>
            <li class="tab3 swiper-slide active"><a href="#tab3"
                    onclick="rank_bn.src='./img/n_img/ranking-banner-sp-c.png'">燃焼<br>サプリ</a></li>
            <li class="tab4 swiper-slide"><a href="#tab4"
                    onclick="rank_bn.src='./img/n_img/ranking-banner-sp-m.png'">糖質ケア<br>サプリ</a></li>
            <li class="tab5 swiper-slide"><a href="#tab5"
                    onclick="rank_bn.src='./img/n_img/ranking-banner-sp-d.png'">酵素<br>サプリ</a></li>
            <li class="tab6 swiper-slide"><a href="#tab6"
                    onclick="rank_bn.src='./img/n_img/ranking-banner-sp-e.png'">酵素<br>ドリンク</a></li>
            <li class="tab7 swiper-slide"><a href="#tab7"
                    onclick="rank_bn.src='./img/n_img/ranking-banner-sp-g.png'">ダイエット<br>スムージー</a></li>
        </ul>
    </div>
    <div class="swiper-pagination"></div>

    <?php include('ranking.php'); ?>



</section>
<!--#section-04 end-->

<!----------------------------RANKING-------------------------->



<section id="section-05">


    <img src="./img/n_img/last_banner.png" alt="" width="100%">


    <div class="last-container">


        <div class="last-txt bg-wh border-r">

            <p>当サイトでご紹介しているダイエッターサポートサプリは、効果はもちろんですが、

                <span class="bold">できるかぎり多くの「ダイエットしたい」とお悩みの方に試していただきたい</span>という気持ちから、

                <span class="bold red">お得に試せるかどうか</span>、という点も重要視して選ばせていただきました。</p><br>

            <p>総合人気ランキング第１位の<span class="bold">シボヘール</span>は今なら <span class="bold blue">初回980円モニター募集中！</span>
                なんと、 <span class="bold red">１日わずか３２円 </span>で試すことが出来ちゃいます。</p><br>

            <p>しかも、契約の回数しばりなどはなく、<span class="bold">１回きりでの購入でも大丈夫</span>なんです！</p><br>

            <p>このめっちゃお得なキャンペーンは、 <span class="bold">今だけのキャンペーンなのですぐに募集が終了してしまう可能性が高い</span>です。</p><br>

            <p>試してみようとお考えの方は、<span class="bold red"> お得なキャンペーンが終了する前に手に入れてくださいね！</span></p>


            <div class="img-wrap-last">

                <img src="./img/n_img/item-a.png" width="350">

            </div>

            <a target="_blank" href="./links/sibo.php<?php echo "?" . $query2; ?>" target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_last_s.png" width="100%" />
            </a>


        </div>

    </div>

</section>



<script>
$(function() {

    $(".tab_content").hide();
    $(".tab_content:nth-of-type(3)").show();

    $("ul.tabs li").click(function() {
        $("ul.tabs li").removeClass("active").css("color", "#333");
        //$(this).addClass("active").css({"color": "darkred","font-weight": "bold"});
        $(this).addClass("active").css("color", "white");
        $(".tab_content").hide()
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).fadeIn()
    });
});
</script>


<!-- Swiper JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
var swiper_1 = new Swiper('.swiper-container', {

    pagination: '.swiper-pagination',
    slidesPerView: 3,
    paginationClickable: true,
    spaceBetween: 0,
    freeMode: true,
    pagination: { // 페이징 설정
        el: '.swiper-pagination',
        clickable: true, // 페이징을 클릭하면 해당 영역으로 이동, 필요시 지정해 줘야 기능 작동
    },
});

$('.tabs > li > a').on('click', function(e) {
    $(this).parent().addClass('active').siblings().removeClass('active');
    var tabIdx = $(this).parent().index();
    swiper_2.slideTo(tabIdx + 1, 300);
    e.preventDefault();
});

var tabLen = $('.tabs > li').length;

/* 2016-05-13 수정 */
var swiper_2 = new Swiper('.swiper-container-2', {
    initialSlide: 2,
    autoHeight: true,
    slidesPerView: 1,
    spaceBetween: 0,
    pagination: true,
    loop: true,
    noSwiping: true,
    noSwipingClass: '.swiper-wrapper',
    onInit: function(swiper) {

    },
    onSlideChangeStart: function(swiper) {
        var idx = swiper.activeIndex - 1;
        if (idx < 0) {
            idx = tabLen - 1;
        } else if (idx == tabLen) {
            idx = 0;
        }
        $('.tabs > li').removeClass('active').eq(idx).addClass('active');
        if (idx < tabLen) {
            swiper_1.slideTo(idx - 1, 300);
        }
    }
});
/* //2016-05-13 수정 */
</script>



<?php include('footer.php'); ?>