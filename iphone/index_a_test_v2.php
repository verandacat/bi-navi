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
    <title>įžãã</title>
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

        <h1 class="left"><span class="red">ãããŖã¨ãšãĒã ãĢãĒãããīŧã<br>ããšãã­ãĒįžäēēãĢãĒãããīŧã</span></h1>

        <h1 class="right">ã¨ãæŠãŋãŽæšã¸</span></h1><br>

        <h1>æŦåŊãĢããããīŧ<br>åŗé¸ãã¤ã¨ããŋãŧãĩããŧã<br>ãĩããĒãŠãŗã­ãŗã°<br>ããšãīŧãå¤§åŦéīŧ</span></h1>

    </div>
    <!--.title-wrap end-->

    <div class="txt-wrap">

        <p>åŊãĩã¤ãã§ã¯æ°å¤ããŽãã¤ã¨ããŋãŧãĩããŧããĩããĒãŽæåãåŠį¨čãŽåŖãŗããåžšåēčĒŋæģīŧ</p><br>

        <p><span class="bold bg-y">ãå¤ąæããĒããã¤ã¨ããŋãŧãĩããŧããĩããĒãŽæ­Ŗããé¸ãŗæšã</span>ã¨<span
                class="bold bg-y">ãåŗé¸īŧãããããŽãĸã¤ãã ã</span>ããį´šäģããžãã
        </p><br>

        <p>ãæŦæ°ã§ãã¤ã¨ããŋãŧãĩããŧããĩããĒãææĻããããã¨ãčããŽæšã¯æ¯éåčãĢããĻãŋãĻãã ããã</p><br>

        <p>æŠéãä¸é¨ãæ¯čŧčĄ¨ã§ãį´šäģããžãã</p>
        ãããããããããããã
    </div>
    <!--.txt-wrap end-->

</section>
<!--#section-01 end-->






<section id="section-02">

    <!--æ¯čŧčĄ¨START-->

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


            <!-- 1čĄįŽ ååå-->

            <tr>
                <th class="table-title width">
                    <h6>ååå</h6>
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
                                href="./links/sibo.php<?php echo "?" . $query2; ?>">ãˇãããŧãĢ</a>
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
                                href="./links/meta.php<?php echo "?" . $query2; ?>">ãĄãŋããĒãĸEX</a>
                        </span>
                    </p>
                </th>


                <th>
                    <p>
                        <a class="link-img" target="_blank"
                            href="./links/bise.php<?php echo "?" . $query2; ?>">
                            <img src="./img/bise.jpg" alt="" />
                        </a>
                    </p>
                    <p>
                        <span class="lbg">
                            <a target="_blank"
                                href="./links/bise.php<?php echo "?" . $query2; ?>">ããģãŠ</a>
                        </span>
                    </p>
                </th>


            </tr>


            <!-- 2čĄįŽ -->

            <tr>
                <td class="table-title width">
                    <h6>ãåŽæããīŧã<br>ãĻãŧãļãŧčŠäžĄ</h6>

                </td>

                <td>
                    <p>
                        <img src="./img/review_5.gif" alt="" />
                    </p>
                    <p class="f-13">4.9/5.0</p>
                </td>


                <td>
                    <p>
                        <img src="./img/review_45.gif" alt="" />
                    </p>
                    <p class="f-13">4.6/5.0</p>
                </td>

                <td>
                    <p>
                        <img src="./img/review_4.gif" alt="" />
                    </p>
                    <p class="f-13">4.5/5.0</p>
                </td>

            </tr>




            <!-- 3čĄįŽ -->

            <tr>
                <td class="table-title width">
                    <h6>ãĩããĒãŋã¤ã</h6>
                </td>

                <td>
                    <p>įįŧãģãĢããįŗģ</p>
                </td>

                <td>
                    <p>įįŧãģãĢããįŗģ</p>
                </td>

                <td>
                    <p>äŊåãã­ãŧãŠįŗģ</p>
                </td>

            </tr>



            <!-- 4čĄįŽ -->

            <tr>

                <td class="table-title width">
                    <h6>éåæå</h6>
                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_01.png" alt="" />
                    <p>čãŽčąįąæĨãŽã¤ãŊããŠããŗéå
                    </p>
                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_01.png" alt="" />
                    <p>
                    ãĩãŠãˇããŧãĢ
                    </p>
                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_02.png" alt="" />
                    <p>į­éččĒé¸ãģãŠã¯ãĒãščãģEC-12ãģããäšŗé¸č</p>
                </td>





            </tr>



            <!-- 5čĄįŽ -->

            <tr>

                <td class="table-title width">
                    <h6>åŗåšæ§</h6>
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

            <!-- 6čĄįŽ -->

            <tr>

                <td class="table-title width">
                    <h6>ãããĒäēēãĢ<br>ãããã</h6>
                </td>


                <td style="width:27%">
                    <p>ãģččĒãæ¸ãããã<br>ãģãã¤ã¨ããŋãŧãĩããŧããĩããĒãæčģŊãĢčŠĻããã<br>ãģæŠčŊæ§čĄ¨į¤ēéŖåãčŠĻããã</p>
                </td>


                <td>
                    <p>
                    ãģãĩãŠãˇããŧãĢãįŗãŽå¸åãæãã<br>ãģãĩãŠãˇããŧãĢãŽįļįļæåãĢããč¸åį°åĸãæ´ãã<sup>īŧâģ1īŧ</sup><br>ãģįļįļæåãĢããéĢããŽBMIãæšåãã<sup>īŧâģ2īŧ</sup>
                    </p>
                </td>

                <td>
                    <p style="text-align: left">ãģæãããĒäžĄæ ŧã§äŊåãã­ãŧãŠãĩããĒãčŠĻããã<br>ãģį­éččĒé¸ããã¤ãŦã¯ããĢæããã</p>
                </td>

            </tr>


            <!-- 7čĄįŽ -->

            <tr>

                <td class="table-title">
                    <h6>éå¸¸äžĄæ ŧ</h6>
                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_01.png" alt="" />
                    <p>2,808åīŧåŽæīŧ</p>
                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_02.png" alt="" />
                    <p>30æĨå 4,570å</p>
                </td>


                <td>
                    <img class="small" src="./img/n_img/r_check_02.png" alt="" />
                    <p>3,980åīŧåŽæīŧ</p>
                </td>



            </tr>


            <!-- 8čĄįŽ -->

            <tr>

                <td class="table-title">
                    <h6>ã­ãŖãŗããŧãŗ</h6>
                </td>


                <td>
                    <img class="small" src="./img/n_img/r_check_01.png" alt="" />
                    <p>åå980å</p>
                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_01.png" alt="" />
                    <p>14æĨå(ååéåŽãģãä¸äēēæ§1å1åéã) 500å+į¨</p>

                </td>

                <td>
                    <img class="small" src="./img/n_img/r_check_01.png" alt="" />
                    <p>åå500å</p>
                </td>







            </tr>


            <!-- 9čĄįŽ -->

            <tr class="btn" style="height: 50px;">

                <td class="table-title">
                    <h6>åŦåŧãĩã¤ã</h6>
                </td>

                <td>
                    <a target="_blank" href="./links/sibo.php<?php echo "?" . $query2; ?>">
                        <img src="./img/n_img/btn_site_go_s.png" width="100%">
                    </a>
                </td>


                <td>
                    <a target="_blank" href="./links/meta.php<?php echo "?" . $query2; ?>">
                        <img src="./img/n_img/btn_site_go_s.png" width="100%">
                    </a>
                </td>


                <td>
                    <a target="_blank" href="./links/bise.php<?php echo "?" . $query2; ?>">
                        <img src="./img/n_img/btn_site_go_s.png" width="100%">
                    </a>
                </td>


            </tr>

        </tbody>

    </table>


    <div class="meta-notes">
    <span class="grad-trigger"></span>
    <div class="grad-item">
        <p>
        âģ1 įŗãŽå¸åãæããæŠčŊæ§ã¨ãįļįļæåãĢããč¸åį°åĸãæ´ãã(ããĒããŽä¸­ãŽãããŖãēãščãåĸãã)æŠčŊæ§ã¯æŠčŊæ§éĸä¸æåãĩãŠãˇããŧãĢãĢããį įŠļãŦããĨãŧ<br>
        2019åš´4æ æļč˛ģčåēåąåēæå ą é å¤åãĩããĒãĄãŗããŽå¤åŊĸã§äģĨä¸ãŽ3ã¤ãŽæŠčŊæ§ãåąåēããæŠčŊæ§čĄ¨į¤ēéŖåã¯æĨæŦåãåŊį¤žčĒŋãšã
        </p>
        <p>
        âģ2 â æŦåãŽįļįļæåãĢãã BMI ãéĢããŽæšãŽããĒããŽččĒ(äŊččĒãģåčččĒ)ãģäŊéãæ¸ãããã¨ã§éĢããŽ BMI ãæšåãã
            âĄæŠčŊæ§éĸä¸æåãĩãŠãˇããŧãĢãéŖäēããæåããįŗãŽå¸åãæãã
            âĸæŠčŊæ§éĸä¸æåãĩãŠãˇããŧãĢãŽįļįļæåãĢããč¸åį°åĸãæ´ãã(ããĒããŽä¸­ãŽãããŖãēãščãåĸãã)
        </p>
        <p>
        âģ3 įļįļæåãĢãã BMIãéĢããŽæšãŽããĒããŽččĒ(äŊččĒãģåčččĒ)ãģäŊéãæ¸ãããã¨ã§éĢããŽBMIãæšåããæŠčŊã¯ãæįĩčŖŊåãį¨ããč¨åēčŠĻčŖ
        </p>
    </div>

    <!--æ¯čŧčĄ¨END-->

</section>
<!--#section-02 end-->




<section id="section-03">

    <h1 class="midashi">ãã¤ã¨ããŋãŧãĩããŧããĩããĒé¸ãŗã§<br>å¤ąæããĒããããŽīŧã¤ãŽãã¤ãŗã</h1>

    <?php include('point.php'); ?>

</section>
<!--#section-03 end-->



<div class="img-wrap">
    <img id="rank_bn" src="./img/n_img/ranking-banner-sp_test.png" />
</div>

<!----------------------------RANKING-------------------------->

<section id="section-04">

    <div class="swiper-container">
        <ul class="swiper-wrapper tabs">
            <li class="tab1 swiper-slide active"><a href="#tab1"
                    onclick="rank_bn.src='./img/n_img/ranking-banner-sp.png'">ãã¤ã¨ããŋãŧ<br>ãĩããŧããĩããĒ<br>įˇåãŠãŗã­ãŗã°</a></li>
            <li class="tab2 swiper-slide"><a href="#tab2"
                    onclick="rank_bn.src='./img/n_img/ranking-banner-sp-b.png'">äŊåãã­ãŧãŠ<br>ãĩããĒ</a></li>
            <li class="tab3 swiper-slide"><a href="#tab3"
                    onclick="rank_bn.src='./img/n_img/ranking-banner-sp-c.png'">įįŧ<br>ãĩããĒ</a></li>
            <li class="tab4 swiper-slide"><a href="#tab4"
                    onclick="rank_bn.src='./img/n_img/ranking-banner-sp-m.png'">įŗčŗĒãąãĸ<br>ãĩããĒ</a></li>
            <li class="tab5 swiper-slide"><a href="#tab5"
                    onclick="rank_bn.src='./img/n_img/ranking-banner-sp-d.png'">éĩį´ <br>ãĩããĒ</a></li>
            <li class="tab6 swiper-slide"><a href="#tab6"
                    onclick="rank_bn.src='./img/n_img/ranking-banner-sp-e.png'">éĩį´ <br>ããĒãŗã¯</a></li>
            <li class="tab7 swiper-slide"><a href="#tab7"
                    onclick="rank_bn.src='./img/n_img/ranking-banner-sp-g.png'">ãã¤ã¨ãã<br>ãšã ãŧã¸ãŧ</a></li>

        </ul>
    </div>
    <div class="swiper-pagination"></div>

    <?php include('ranking.php'); ?>


</section>
<!--#section-04 end-->

<!----------------------------RANKING-------------------------->



<!-- <section id="section-05">


  <img src="./img/n_img/last_banner.png" alt="" width="100%">


  <div class="last-container">


    <div class="last-txt bg-wh border-r">

      <p>åŊãĩã¤ãã§ãį´šäģããĻãããã¤ã¨ããŋãŧãĩããŧããĩããĒã¯ãåšæã¯ããĄããã§ããã
        <span class="bold">ã§ãããããå¤ããŽããšãĒã ãĢãĒãããããæ¯æããŖããããããã¨ãæŠãŋãŽæšãĢčŠĻããĻããã ããã</span>ã¨ããæ°æãĄããã
        <span class="bold red">ãåžãĢčŠĻããããŠãã</span>ãã¨ããįšãéčĻčĻããĻé¸ã°ããĻããã ããžããã</p><br>

      <p>äŊåãã­ãŧãŠãĩããĒãŠãŗã­ãŗã°įŦŦīŧäŊãŽ<span class="bold">Lakubi</span>ã¯äģãĒã
        <span class="bold blue">ååīŧīŧīŧåãĸããŋãŧåéä¸­īŧ</span>ãĒãã¨ã īŧæĨãããīŧīŧå ã§čŠĻããã¨ãåēæĨãĄãããžãã</p><br>

      <p>ããŽããŖãĄããåžãĒã­ãŖãŗããŧãŗã¯ã <span class="bold">äģã ããŽã­ãŖãŗããŧãŗãĒãŽã§ãããĢåéãįĩäēããĻããžãå¯čŊæ§ãéĢã</span>ã§ãã</p><br>

      <p>ãããĢã<span class="bold red">äģã ãAmazonãŽããå¸īŧīŧīŧīŧååīŧåŋåå¸äģãīŧ</span> čŠĻããĻãŋããã¨ãčããŽæšã¯ã
        <span class="bold red">ãåžãĒã­ãŖãŗããŧãŗãįĩäēããåãĢæãĢåĨããĻãã ããã­īŧ</span></p><br>

      <div class="center">
        <img src="./img/l-laku.png" width="350">
      </div>

      <a target="_blank" href="./links/laku.php<?php echo "?" . $query2; ?>" target="_blank">
        <img alt="" src="./img/n_img/btn_site_go_last_l.png" width="100%" />
      </a>

    </div>

  </div>

</section> -->





<!-- Swiper JS -->
<!-- <script src="https://code.jquery.com/jquery-1.11.3.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>


<script>
$(function() {

    $(".tab_content").hide();
    $(".tab_content:first").show();

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

<!-- Swiper JS -->
<!-- <script src="https://code.jquery.com/jquery-1.11.3.js"></script> -->
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
    pagination: { // íė´ė§ ė¤ė 
        el: '.swiper-pagination',
        clickable: true, // íė´ė§ė í´ëĻ­íëŠ´ í´ëš ėė­ėŧëĄ ė´ë, íėė ė§ė í´ ė¤ėŧ ę¸°ëĨ ėë
    },
});

$('.tabs > li > a').on('click', function(e) {
    $(this).parent().addClass('active').siblings().removeClass('active');
    var tabIdx = $(this).parent().index();
    swiper_2.slideTo(tabIdx + 1, 300);
    e.preventDefault();
});

var tabLen = $('.tabs > li').length;

/* 2016-05-13 ėė  */
var swiper_2 = new Swiper('.swiper-container-2', {
    initialSlide: 0,
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
/* //2016-05-13 ėė  */
</script>



<?php include('footer_test_v2.php'); ?>