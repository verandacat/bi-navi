<div class="tab_container">

    <!-- #tab1 総合ランキング-->
    <div id="tab1" class="tab_content">


        <?php wp_reset_postdata();
                
                $args = array(
                    'posts_per_page' => '3',
                    'category_name' => 'all',
                    'post_type' => 'post',
                    'meta_key' => 'allrank',
                    'orderby' => 'meta_value_num',
					          'order' => 'asc',
                );
               

                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $point= get_field('point');
                $content= get_field('content');
                $catch= get_field('catch');
                $amount= get_field('amount');
                $quantity= get_field('quantity');
                $regularly= get_field('regularly');
                $onedayprice= get_field('onedayprice');
                $jenre= get_field('jenre');
                $url= get_field('url');
                $spurl = get_field('s_link');
                $rnkprice = get_field('rnk-price') ;
                ?>



        <table class="r-table" cellspacing="0">

            <tbody>

                <tr>
                    <th class="r-title" colspan="2">
                        <div class="img-center badge" style="position: absolute; top:10px; left:10px;">
                            <img src="./img/n_img/badge_ranking_0<?php echo $i; ?>.png" width="100" />
                        </div>

                        <p>

                            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <span class="f-13"><?php the_title(); ?></span>
                            </a>
                        </p>　
                    </th>
                </tr>

                <tr>
                    <td class="r-img">

                        <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </td>

                </tr>

                <tr>

                    <td>

                        <ul class="r-list">

                            <?php echo $point; ?>

                        </ul>

                    </td>

                </tr>

            </tbody>
        </table>



        <div class="r-txtbox">

            <?php echo $content; ?>


            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <span class="link_txt"><?php echo $catch; ?><?php echo date("n"); ?>月の特別キャンペーンページはこちら</span>
            </a>


        </div>

        <table class="r-r-table" cellspacing="1">
            <tbody>
                <tr>
                    <th>価格</th>
                    <th>容量</th>
                    <th>ユーザー評価</th>
                </tr>
                <tr>
                    <td><?php echo $rnkprice; ?></td>
                    <td><?php echo $amount; ?></td>
                    <td>
                        <?php if($i === 1) : ?>
                        <img alt="" src="./img/review_5.gif" />
                        <?php elseif($i === 2) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 3) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php elseif($i === 4) : ?>
                        <img alt="" src="./img/review_35.gif" />
                        <?php else : ?>
                        <img alt="" src="./img/review_3.gif" />
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>サプリの種類</th>
                    <th>
                        配合成分
                    </th>
                    <th>
                        1日あたりの価格
                    </th>
                </tr>
                <tr>
                    <td><?php if (is_array($jenre) > count(1)) {
                                    foreach ($jenre as $value) {
                                        echo $value . ",";
                                    }
                                    } else {
                                      foreach ($jenre as $value) {
                                        echo $value;
                                    }
                                }
                            ?></td>
                    <td><?php echo $quantity; ?></td>
                    <td><?php echo $onedayprice; ?>円</td>
                </tr>

            </tbody>
        </table>
        <!--.r-r-table end-->



        <div class="img-btn">

            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
            </a>

        </div>


        <?php $i++; endwhile; endif; wp_reset_postdata(); ?>


    </div>



    <!-- #tab2 体内フローラランキング-->
    <div id="tab2" class="tab_content">

        <?php wp_reset_postdata();
                
                $args = array(
                    'posts_per_page' => '7',
                    'category_name' => 'flora',
                    'post_type' => 'post',
                    'meta_key' => 'frank',
                    'orderby' => 'meta_value_num',
					          'order' => 'asc',
                );
               

                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $point= get_field('point');
                $content= get_field('content');
                $catch= get_field('catch');
                $amount= get_field('amount');
                $quantity= get_field('quantity');
                $regularly= get_field('regularly');
                $onedayprice= get_field('onedayprice');
                $jenre= get_field('jenre');
                $url= get_field('url');
                $rnkprice = get_field('rnk-price') ;

                ?>



        <table class="r-table" cellspacing="0">

            <tbody>

                <tr>
                    <th class="r-title" colspan="2">
                        <div class="img-center badge" style="position: absolute; top:10px; left:10px;">

                            <img src="./img/n_img/badge_ranking_0<?php echo $i; ?>.png" width="100" />

                        </div>

                        <p>
                            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <span class="f-13"><?php the_title(); ?></span>
                            </a>
                        </p>　
                    </th>
                </tr>

                <tr>
                    <td class="r-img">

                        <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <?php the_post_thumbnail(); ?>
                        </a>

                    </td>

                </tr>

                <tr>

                    <td>

                        <ul class="r-list">

                            <?php echo $point; ?>

                        </ul>

                    </td>

                </tr>

            </tbody>
        </table>



        <div class="r-txtbox">

            <?php echo $content; ?>

            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <span class="link_txt"><?php echo $catch; ?><?php echo date("n"); ?>月の特別キャンペーンページはこちら</span>
            </a>

        </div>

        <table class="r-r-table" cellspacing="1">
            <tbody>
                <tr>
                    <th>価格</th>
                    <th>容量</th>
                    <th>ユーザー評価</th>
                </tr>
                <tr>
                    <td>
                        <?php echo $rnkprice; ?>
                    </td>
                    <td>

                        <?php echo $amount; ?></td>
                    <td>
                        <?php if($i === 1) : ?>
                        <img alt="" src="./img/review_5.gif" />
                        <?php elseif($i === 2) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 3) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php elseif($i === 4) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php elseif($i === 5) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php else : ?>
                        <img alt="" src="./img/review_3.gif" />
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>サプリの種類</th>
                    <th>
                        配合成分
                    </th>
                    <th>
                        <!-- 1日あたりの価格 -->
                    </th>
                </tr>
                <tr>
                    <td><?php if (is_array($jenre) > count(1)) {
                                    foreach ($jenre as $value) {
                                        echo $value . ",";
                                    }
                                    } else {
                                      foreach ($jenre as $value) {
                                        echo $value;
                                    }
                                }
                            ?></td>
                    <td><?php echo $quantity; ?></td>
                    <td>
                        <!--<?php //echo $onedayprice; ?>円-->
                    </td>
                </tr>

            </tbody>
        </table>
        <!--.r-r-table end-->



        <div class="img-btn">
            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
            </a>
        </div>


        <?php $i++; endwhile; endif; wp_reset_postdata(); ?>



    </div>
    <!--#tab2 end-->






    <!-- #tab3 燃焼ランキング -->
    <div id="tab3" class="tab_content">


        <?php wp_reset_postdata();
                
                $args = array(
                    'posts_per_page' => '5',
                    'category_name' => 'burning',
                    'post_type' => 'post',
                    'meta_key' => 'burnrank',
                    'orderby' => 'meta_value_num',
					          'order' => 'asc',
                );
               

                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $point= get_field('point');
                $content= get_field('content');
                $catch= get_field('catch');
                $amount= get_field('amount');
                $quantity= get_field('quantity');
                $regularly= get_field('regularly');
                $onedayprice= get_field('onedayprice');
                $jenre= get_field('jenre');
                $url= get_field('url');
                $rnkprice = get_field('rnk-price') ;

                ?>



        <table class="r-table" cellspacing="0">

            <tbody>

                <tr>
                    <th class="r-title" colspan="2">
                        <div class="img-center badge" style="position: absolute; top:10px; left:10px;">
                            <img src="./img/n_img/badge_ranking_0<?php echo $i; ?>.png" width="100" />
                        </div>

                        <p>
                            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <span class="f-13"><?php the_title(); ?></span>
                            </a>
                        </p>　
                    </th>
                </tr>

                <tr>
                    <td class="r-img">

                        <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <?php the_post_thumbnail(); ?>
                        </a>

                    </td>

                </tr>

                <tr>

                    <td>

                        <ul class="r-list">

                            <?php echo $point; ?>

                        </ul>

                    </td>

                </tr>

            </tbody>
        </table>



        <div class="r-txtbox">

            <?php echo $content; ?>


            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <span class="link_txt"><?php echo $catch; ?><?php echo date("n"); ?>月の特別キャンペーンページはこちら</span>
            </a>

        </div>

        <table class="r-r-table" cellspacing="1">
            <tbody>
                <tr>
                    <th>価格</th>
                    <th>容量</th>
                    <th>ユーザー評価</th>
                </tr>
                <tr>
                    <td>
                        <?php echo $rnkprice; ?>
                    </td>
                    <td><?php echo $amount; ?></td>
                    <td>
                        <?php if($i === 1) : ?>
                        <img alt="" src="./img/review_5.gif" />
                        <?php elseif($i === 2) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 3) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php elseif($i === 4) : ?>
                        <img alt="" src="./img/review_35.gif" />
                        <?php else : ?>
                        <img alt="" src="./img/review_3.gif" />
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>サプリの種類</th>
                    <th>
                        配合成分
                    </th>
                    <th>
                        1日あたりの価格
                    </th>
                </tr>
                <tr>
                    <td><?php if (is_array($jenre) > count(1)) {
                                    foreach ($jenre as $value) {
                                        echo $value . ",";
                                    }
                                    } else {
                                      foreach ($jenre as $value) {
                                        echo $value;
                                    }
                                }
                            ?></td>
                    <td><?php echo $quantity; ?></td>
                    <td><?php echo $onedayprice; ?>円</td>
                </tr>

            </tbody>
        </table>
        <!--.r-r-table end-->



        <div class="img-btn">
            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
            </a>
        </div>


        <?php $i++; endwhile; endif; wp_reset_postdata(); ?>


    </div>
    <!--#tab3 end-->






    <!-- #tab4 糖質ランキング -->
    <div id="tab4" class="tab_content">



        <?php wp_reset_postdata();
                
                $args = array(
                    'posts_per_page' => '5',
                    'category_name' => 'sugariness',
                    'post_type' => 'post',
                    'meta_key' => 'sugrank',
                    'orderby' => 'meta_value_num',
					'order' => 'asc',
                );
               

                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $point= get_field('point');
                $content= get_field('content');
                $catch= get_field('catch');
                $amount= get_field('amount');
                $quantity= get_field('quantity');
                $regularly= get_field('regularly');
                $onedayprice= get_field('onedayprice');
                $jenre= get_field('jenre');
                $url= get_field('url');
                $rnkprice = get_field('rnk-price') ;

                ?>



        <table class="r-table" cellspacing="0">

            <tbody>

                <tr>
                    <th class="r-title" colspan="2">
                        <div class="img-center badge" style="position: absolute; top:10px; left:10px;">
                            <img src="./img/n_img/badge_ranking_0<?php echo $i; ?>.png" width="100" />
                        </div>

                        <p>
                            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <span class="f-13"><?php the_title(); ?></span>
                            </a>
                        </p>　
                    </th>
                </tr>

                <tr>
                    <td class="r-img">

                        <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <?php the_post_thumbnail(); ?>
                        </a>

                    </td>

                </tr>

                <tr>

                    <td>

                        <ul class="r-list">

                            <?php if($i==1) : ?>
                            <li>トライアルパックが<span class="red bold">500円+税</span>で試しやすい！</li>

                            <li>サラシノールが<span class="bold">糖の吸収を抑える</span><sup>※1</sup></li>

                            <li>サラシノールの継続摂取により腸内環境を整える<sup>※1</sup></li>

                            <li>継続摂取により、BMIが高めの方の<span class="red bold">おなかの脂肪・体重を減らす</span><sup>※2</sup></li>
                            <?php else : ?>
                            <?php echo $point; ?>
                            <?php endif; ?>

                        </ul>

                    </td>

                </tr>

            </tbody>
        </table>



        <div class="r-txtbox">

            <?php if($i==1) : ?>
            <p>
                <span
                    class="bold">サラシノールが糖の吸収を抑える、サラシノールの継続摂取により腸内環境を整える、さらに、本品の継続摂取によりBMIが高めの方のおなかの脂肪・体重を減らす</span>という、３つの機能性を届出した
                <span class="bold red">機能性表示食品</span>！
                サラシア売上メーカーNo.1<sup>※3</sup>でシリーズ累計販売個数800万個突破<sup>※4</sup>
            </p>

            <p>
                <span class="bold">14日分トライアルパックがたったの500円+税</span>だから試しやすい！
                サラシア由来の「サラシノール」が<span class="bold">食事の糖の吸収を抑え</span>
                おなかの中のビフィズス菌を増やし、さらに本品の継続摂取により<span class="bold">BMIが高めの方のおなかの脂肪・体重を減らします！</span>
            </p>

            <p>
                食べながら健康を目指したい人にピッタリのサプリです！
            </p>
            <?php else : ?>
            <?php echo $content; ?>
            <?php endif; ?>


            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <span class="link_txt"><?php echo $catch; ?><?php echo date("n"); ?>月の特別キャンペーンページはこちら</span>
            </a>

        </div>

        <table class="r-r-table" cellspacing="1">
            <tbody>
                <tr>
                    <th>価格</th>
                    <th>容量</th>
                    <th>ユーザー評価</th>
                </tr>
                <tr>
                    <td>
                        <?php echo $rnkprice; ?>
                    </td>
                    <td><?php echo $amount; ?></td>
                    <td>
                        <?php if($i === 1) : ?>
                        <img alt="" src="./img/review_5.gif" />
                        <?php elseif($i === 2) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 3) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php elseif($i === 4) : ?>
                        <img alt="" src="./img/review_35.gif" />
                        <?php else : ?>
                        <img alt="" src="./img/review_3.gif" />
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>サプリの種類</th>
                    <th>
                        配合成分
                    </th>
                    <th>
                        1日あたりの価格
                    </th>
                </tr>
                <tr>
                    <td><?php if (is_array($jenre) > count(1)) {
                                    foreach ($jenre as $value) {
                                        echo $value . ",";
                                    }
                                    } else {
                                      foreach ($jenre as $value) {
                                        echo $value;
                                    }
                                }
                            ?></td>
                    <td><?php echo $quantity; ?></td>
                    <td><?php echo $onedayprice; ?>円</td>
                </tr>

            </tbody>
        </table>
        <!--.r-r-table end-->
        <?php if($i==1) : ?>
        <div class="meta-notes">

            <p>
                ※1 糖の吸収を抑える機能性と、継続摂取により腸内環境を整える（おなかの中のビフィズス菌を増やす）機能性は機能性関与成分サラシノールによる研究レビュー</p>
            <p>
                ※2 継続摂取によりBMIが高めの方のおなかの脂肪（体脂肪・内臓脂肪）・体重を減らすことで高めのBMIを改善する機能は、最終製品を用いた臨床試験
            </p>
            <p>
                ※3 出典：㈱富士経済 H･Bフーズマーケティング便覧2019 No.2 機能志向食品編(2018.12.25発行)サラシアを関与成分とする全てのカテゴリにおける2017年(実績)販売高の合計値
            </p>
            <p>
                ※4 2007年10月～2019年3月までのメタバリアシリーズの累計販売個数
            </p>

        </div>
        <?php endif; ?>

        <div class="img-btn">
            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
            </a>
        </div>


        <?php $i++; endwhile; endif; wp_reset_postdata(); ?>




    </div>
    <!--#tab4 end-->





    <!-- #tab5 酵素サプリランキング-->
    <div id="tab5" class="tab_content">

        <?php wp_reset_postdata();
                
                $args = array(
                    'posts_per_page' => '5',
                    'category_name' => 'enzyme',
                    'post_type' => 'post',
                    'meta_key' => 'enzymerank',
                    'orderby' => 'meta_value_num',
					          'order' => 'asc',
                );
               

                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $point= get_field('point');
                $content= get_field('content');
                $catch= get_field('catch');
                $amount= get_field('amount');
                $quantity= get_field('quantity');
                $regularly= get_field('regularly');
                $onedayprice= get_field('onedayprice');
                $jenre= get_field('jenre');
                $url= get_field('url');
                $rnkprice = get_field('rnk-price') ;

                ?>

        <table class="r-table" cellspacing="0">

            <tbody>

                <tr>
                    <th class="r-title" colspan="2">
                        <div class="img-center badge" style="position: absolute; top:10px; left:10px;">
                            <img src="./img/n_img/badge_ranking_0<?php echo $i; ?>.png" width="100" />
                        </div>

                        <p>
                            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <span class="f-13"><?php the_title(); ?></span>
                            </a>
                        </p>　
                    </th>
                </tr>

                <tr>
                    <td class="r-img">

                        <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <?php the_post_thumbnail(); ?>
                        </a>

                    </td>

                </tr>

                <tr>

                    <td>

                        <ul class="r-list">

                            <?php echo $point; ?>

                        </ul>

                    </td>

                </tr>

            </tbody>
        </table>



        <div class="r-txtbox">

            <?php echo $content; ?>


            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <span class="link_txt"><?php echo $catch; ?><?php echo date("n"); ?>月の特別キャンペーンページはこちら</span>
            </a>

        </div>

        <table class="r-r-table" cellspacing="1">
            <tbody>
                <tr>
                    <th>価格</th>
                    <th>容量</th>
                    <th>ユーザー評価</th>
                </tr>
                <tr>
                    <td><?php echo $rnkprice; ?></td>
                    <td><?php echo $amount; ?></td>
                    <td>
                        <?php if($i === 1) : ?>
                        <img alt="" src="./img/review_5.gif" />
                        <?php elseif($i === 2) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 3) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php elseif($i === 4) : ?>
                        <img alt="" src="./img/review_35.gif" />
                        <?php else : ?>
                        <img alt="" src="./img/review_3.gif" />
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>サプリの種類</th>
                    <th>
                        配合成分
                    </th>
                    <th>
                        1日あたりの価格
                    </th>
                </tr>
                <tr>
                    <td><?php if (is_array($jenre) > count(1)) {
                                    foreach ($jenre as $value) {
                                        echo $value . ",";
                                    }
                                    } else {
                                      foreach ($jenre as $value) {
                                        echo $value;
                                    }
                                }
                            ?></td>
                    <td><?php echo $quantity; ?></td>
                    <td><?php echo $onedayprice; ?>円</td>
                </tr>

            </tbody>
        </table>
        <!--.r-r-table end-->



        <div class="img-btn">
            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
            </a>
        </div>


        <?php $i++; endwhile; endif; wp_reset_postdata(); ?>



    </div>
    <!--#tab5 end-->





    <!-- #tab6 ドリンクランキング -->
    <div id="tab6" class="tab_content">

        <?php wp_reset_postdata();
                
                $args = array(
                    'posts_per_page' => '5',
                    'category_name' => 'enzymedrk',
                    'post_type' => 'post',
                    'meta_key' => 'drkrank',
                    'orderby' => 'meta_value_num',
                              'order' => 'asc',
                              
                );
               

                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $point= get_field('point');
                $content= get_field('content');
                $catch= get_field('catch');
                $amount= get_field('amount');
                $quantity= get_field('quantity');
                $regularly= get_field('regularly');
                $onedayprice= get_field('onedayprice');
                $jenre= get_field('jenre');
                $url= get_field('url');
                $rnkprice = get_field('rnk-price') ;

                ?>



        <table class="r-table" cellspacing="0">

            <tbody>

                <tr>
                    <th class="r-title" colspan="2">
                        <div class="img-center badge" style="position: absolute; top:10px; left:10px;">
                            <img src="./img/n_img/badge_ranking_0<?php echo $i; ?>.png" width="100" />
                        </div>

                        <p>
                            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <span class="f-13"><?php the_title(); ?></span>
                            </a>
                        </p>　
                    </th>
                </tr>

                <tr>
                    <td class="r-img">

                        <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <?php the_post_thumbnail(); ?>
                        </a>

                    </td>

                </tr>

                <tr>

                    <td>

                        <ul class="r-list">

                            <?php echo $point; ?>

                        </ul>

                    </td>

                </tr>

            </tbody>
        </table>



        <div class="r-txtbox">

            <?php echo $content; ?>


            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <span class="link_txt"><?php echo $catch; ?><?php echo date("n"); ?>月の特別キャンペーンページはこちら</span>
            </a>

        </div>

        <table class="r-r-table" cellspacing="1">
            <tbody>
                <tr>
                    <th>価格</th>
                    <th>容量</th>
                    <th>ユーザー評価</th>
                </tr>
                <tr>
                    <td>
                        <?php echo $rnkprice; ?>
                    </td>
                    <td><?php echo $amount; ?></td>
                    <td>
                        <?php if($i === 1) : ?>
                        <img alt="" src="./img/review_5.gif" />
                        <?php elseif($i === 2) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 3) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php elseif($i === 4) : ?>
                        <img alt="" src="./img/review_35.gif" />
                        <?php else : ?>
                        <img alt="" src="./img/review_3.gif" />
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>サプリの種類</th>
                    <th>
                        配合成分
                    </th>
                    <th>
                        1日あたりの価格
                    </th>
                </tr>
                <tr>
                    <td><?php if (is_array($jenre) > count(1)) {
                                    foreach ($jenre as $value) {
                                        echo $value . ",";
                                    }
                                    } else {
                                      foreach ($jenre as $value) {
                                        echo $value;
                                    }
                                }
                            ?></td>
                    <td><?php echo $quantity; ?></td>
                    <td><?php echo $onedayprice; ?>円</td>
                </tr>

            </tbody>
        </table>
        <!--.r-r-table end-->



        <div class="img-btn">
            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
            </a>
        </div>


        <?php $i++; endwhile; endif; wp_reset_postdata(); ?>


    </div>
    <!--#tab6 end-->




    <!-- #tab7 スムージランキング -->
    <div id="tab7" class="tab_content">

        <?php wp_reset_postdata();
                
                $args = array(
                    'posts_per_page' => '5',
                    'category_name' => 'smoothie',
                    'post_type' => 'post',
                    'meta_key' => 'smoothierank',
                    'orderby' => 'meta_value_num',
					          'order' => 'asc',
                );
               

                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $point= get_field('point');
                $content= get_field('content');
                $catch= get_field('catch');
                $amount= get_field('amount');
                $quantity= get_field('quantity');
                $regularly= get_field('regularly');
                $onedayprice= get_field('onedayprice');
                $jenre= get_field('jenre');
                $url= get_field('url');
                $rnkprice = get_field('rnk-price') ;

                ?>



        <table class="r-table" cellspacing="0">

            <tbody>

                <tr>
                    <th class="r-title" colspan="2">
                        <div class="img-center badge" style="position: absolute; top:10px; left:10px;">
                            <img src="./img/n_img/badge_ranking_0<?php echo $i; ?>.png" width="100" />
                        </div>

                        <p>
                            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <span class="f-13"><?php the_title(); ?></span>
                            </a>
                        </p>　
                    </th>
                </tr>

                <tr>
                    <td class="r-img">

                        <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <?php the_post_thumbnail(); ?>
                        </a>

                    </td>

                </tr>

                <tr>

                    <td>

                        <ul class="r-list">

                            <?php echo $point; ?>

                        </ul>

                    </td>

                </tr>

            </tbody>
        </table>



        <div class="r-txtbox">

            <?php echo $content; ?>


            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <span class="link_txt"><?php echo $catch; ?><?php echo date("n"); ?>月の特別キャンペーンページはこちら</span>
            </a>

        </div>

        <table class="r-r-table" cellspacing="1">
            <tbody>
                <tr>
                    <th>価格</th>
                    <th>容量</th>
                    <th>ユーザー評価</th>
                </tr>
                <tr>
                    <td>
                        <?php echo $rnkprice; ?>
                    </td>
                    <td><?php echo $amount; ?></td>
                    <td>
                        <?php if($i === 1) : ?>
                        <img alt="" src="./img/review_5.gif" />
                        <?php elseif($i === 2) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 3) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php else : ?>
                        <img alt="" src="./img/review_35.gif" />
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>サプリの種類</th>
                    <th>
                        配合成分
                    </th>
                    <th>
                        1日あたりの価格
                    </th>
                </tr>
                <tr>
                    <td><?php if (is_array($jenre) > count(1)) {
                                    foreach ($jenre as $value) {
                                        echo $value . ",";
                                    }
                                    } else {
                                      foreach ($jenre as $value) {
                                        echo $value;
                                    }
                                }
                            ?></td>
                    <td><?php echo $quantity; ?></td>
                    <td><?php echo $onedayprice; ?>円</td>
                </tr>

            </tbody>
        </table>
        <!--.r-r-table end-->



        <div class="img-btn">
            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
            </a>
        </div>


        <?php $i++; endwhile; endif; wp_reset_postdata(); ?>


    </div>
    <!--#tab7 end-->



    <!-- #tab8 防風通聖散ランキング -->
    <div id="tab8" class="tab_content">

        <?php wp_reset_postdata();
                
                $args = array(
                    'posts_per_page' => '3',
                    'category_name' => 'medi',
                    'post_type' => 'post',
                    'meta_key' => 'medirank',
                    'orderby' => 'meta_value_num',
					'order' => 'asc',
                );
               

                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $point= get_field('point');
                $content= get_field('content');
                $catch= get_field('catch');
                $amount= get_field('amount');
                $quantity= get_field('quantity');
                $regularly= get_field('regularly');
                $onedayprice= get_field('onedayprice');
                $jenre= get_field('jenre');
                $url= get_field('url');
                $rnkprice = get_field('rnk-price') ;

                ?>



        <table class="r-table" cellspacing="0">

            <tbody>

                <tr>
                    <th class="r-title" colspan="2">
                        <div class="img-center badge" style="position: absolute; top:10px; left:10px;">
                            <img src="./img/n_img/badge_ranking_0<?php echo $i; ?>.png" width="100" />
                        </div>

                        <p>
                            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <span class="f-13"><?php the_title(); ?></span>
                            </a>
                        </p>　
                    </th>
                </tr>

                <tr>
                    <td class="r-img">

                        <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <?php the_post_thumbnail(); ?>
                        </a>

                    </td>

                </tr>
                <?php if ($i === 3) : ?>
                <?php else : ?>
                <tr>

                    <td>

                        <ul class="r-list">

                            <?php echo $point; ?>

                        </ul>

                    </td>

                </tr>
                <?php endif; ?>
            </tbody>
        </table>



        <div class="r-txtbox">

            <?php echo $content; ?>
            <?php if ($i === 1) : ?>
            <div class="coupon-box">
                <div style="text-align: left"><span class="rred tenmetsu f-13">速報！！</span></div>
                <div>
                    <a href="./links/bouhu.php<?php echo "?" . $_SERVER['QUERY_STRING'] ?>" target="_blank">
                        <img src="./img/coupon.jpg">
                    </a>
                </div>
                <div class="coupon-text">
                    <div style="text-align: left"><span class="bold f-13">公式サイト限定！</span></div>
                    <div><span class="rred">＼更に1000円OFFクーポンをプレゼント／</span></div>
                </div>
                ※上記、クーポンコードを購入確認画面でご入力ください。
            </div>
            <?php endif; ?>

            <?php if ($i === 3) : ?>
            <?php elseif($i === 1) : ?>
            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <span class="link_txt">クーポン付きキャンペーンページはこちら</span>
            </a>
            <?php else : ?>
            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <span class="link_txt"><?php echo $catch; ?><?php echo date("n"); ?>月の特別キャンペーンページはこちら</span>
            </a>
            <?php endif; ?>

        </div>

        <table class="r-r-table" cellspacing="1">
            <tbody>
                <tr>
                    <th>価格</th>
                    <th>容量</th>
                    <th>ユーザー評価</th>
                </tr>
                <tr>
                    <td>
                        <?php echo $rnkprice; ?>
                    </td>
                    <td><?php echo $amount; ?></td>
                    <td>
                        <?php if($i === 1) : ?>
                        <img alt="" src="./img/review_5.gif" />
                        <?php elseif($i === 2) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 3) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php else : ?>
                        <img alt="" src="./img/review_35.gif" />
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>サプリの種類</th>
                    <th>
                        配合成分
                    </th>
                    <th>
                        1日あたりの価格
                    </th>
                </tr>
                <tr>
                    <td><?php if (is_array($jenre) > count(1)) {
                                    foreach ($jenre as $value) {
                                        echo $value . ",";
                                    }
                                    } else {
                                      foreach ($jenre as $value) {
                                        echo $value;
                                    }
                                }
                            ?></td>
                    <td><?php echo $quantity; ?></td>
                    <td><?php echo $onedayprice; ?>円 <?php if($i==1) : ?>(税込)<?php endif; ?>
                </td>
                </tr>

            </tbody>
        </table>
        <!--.r-r-table end-->



        <div class="img-btn">
            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
            </a>
        </div>


        <?php $i++; endwhile; endif; wp_reset_postdata(); ?>


    </div>
    <!--#tab8 end-->


</div>
<!-- .tab_container -->