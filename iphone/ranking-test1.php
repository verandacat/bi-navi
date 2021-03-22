<div class="swiper-container-2">

    <div class="swiper-wrapper">


        <!-- #tab1 総合ランキング-->
        <div id="tab1" class="swiper-slide">


            <?php wp_reset_postdata();

            $args = array(
                'posts_per_page' => '5',
                'category_name' => 'all-test',
                'post_type' => 'post',
                'meta_key' => 'allrank_test',
                'orderby' => 'meta_value_num',
                'order' => 'asc',
            );


            $the_query = new WP_Query($args);
            $i = 1;
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                    $point = get_field('point');
                    $content = get_field('content');
                    $catch = get_field('catch');
                    $amount = get_field('amount');
                    $quantity = get_field('quantity');
                    $regularly = get_field('regularly');
                    $onedayprice = get_field('onedayprice');
                    $jenre = get_field('jenre');
                    $url = get_field('url');
                    $spurl = get_field('s_link');

                    $rnkprice = get_field('rnk-price') ;

            ?>



            <table class="r-table" cellspacing="0">

                <tbody>

                    <tr>
                        <th class="r-title" colspan="2">
                            <div class="img-center badge" style="position: absolute; top:10px; left:10px;">
                                <img src="./img/n_img/badge_ranking_0<?php echo $i; ?>.png" width="70" />
                            </div>

                            <p>
                                
                                    <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>"
                                        target="_blank">
                                        <?php if($i === 3) : ?>
                                        <span class="f-13">ワイルド<br>マンゴーの力粒</span>
                                        <?php else : ?>
                                        <span class="f-13"><?php the_title(); ?></span>
                                        <?php endif; ?>
                                    </a>
                            </p>　
                        </th>
                    </tr>

                    <tr>
                        <td class="r-img">
                                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>"
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


            <?php if($i==2) : ?>
            <div class="meta-notes">
                <span class="grad-trigger"></span>
                <div class="grad-item">
                    <p>
                        ※1 糖の吸収を抑える機能性と、継続摂取により腸内環境を整える（おなかの中のビフィズス菌を増やす）機能性は機能性関与成分サラシノールによる研究レビュー</p>
                    <p>
                        ※2 継続摂取によりBMIが高めの方のおなかの脂肪（体脂肪・内臓脂肪）・体重を減らすことで高めのBMIを改善する機能は、最終製品を用いた臨床試験
                    </p>
                    <p>
                        ※3 出典：㈱富士経済 H･Bフーズマーケティング便覧2019 No.2
                        機能志向食品編(2018.12.25発行)サラシアを関与成分とする全てのカテゴリにおける2017年(実績)販売高の合計値
                    </p>
                    <p>
                        ※4 2007年10月～2019年3月までのメタバリアシリーズの累計販売個数
                    </p>
                </div>


            </div>
            <?php endif; ?>

            <div class="r-txtbox">

                <?php echo $content; ?>

                
                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>" target="_blank">
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
                            <?php if ($i === 1) : ?>
                            <img alt="" src="./img/review_5.gif" />
                            <?php elseif ($i === 2) : ?>
                            <img alt="" src="./img/review_45.gif" />
                            <?php elseif ($i === 3) : ?>
                            <img alt="" src="./img/review_4.gif" />
                            <?php elseif ($i === 4) : ?>
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
                        <td>
                        <?php if($i === 4) : ?>
                              消費・分解サプリ
                            <?php else : ?>
                        <?php if (is_array($jenre) > count(1)) {
                                        foreach ($jenre as $value) {
                                            echo $value . ",";
                                        }
                                    } else {
                                        foreach ($jenre as $value) {
                                            echo $value;
                                        }
                                    }
                                    ?>
                        <?php endif; ?>
                                    </td>
                        <td><?php echo $quantity; ?></td>
                        <td><?php echo $onedayprice; ?>円</td>
                    </tr>

                </tbody>
            </table>
            <!--.r-r-table end-->

            <div class="img-btn">
                
                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>" target="_blank">
                    <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
                </a>
              
            </div>


            <?php $i++;
                endwhile;
                endif;
                wp_reset_postdata(); ?>


        </div>



        <!-- #tab2 体内フローラランキング-->
        <div id="tab2" class="swiper-slide">

            <?php wp_reset_postdata();

            $args = array(
                'posts_per_page' => '4',
                'category_name' => 'flora-test',
                'post_type' => 'post',
                'meta_key' => 'frank_test',
                'orderby' => 'meta_value_num',
                'order' => 'asc',
            );


            $the_query = new WP_Query($args);
            $i = 1;
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                    $point = get_field('point');
                    $content = get_field('content');
                    $catch = get_field('catch');
                    $amount = get_field('amount');
                    $quantity = get_field('quantity');
                    $regularly = get_field('regularly');
                    $onedayprice = get_field('onedayprice');
                    $jenre = get_field('jenre');
                    $url = get_field('url');
                    $rnkprice = get_field('rnk-price') ;
            ?>



            <table class="r-table" cellspacing="0">

                <tbody>

                    <tr>
                        <th class="r-title" colspan="2">
                            <div class="img-center badge" style="position: absolute; top:10px; left:10px;">
                                <img src="./img/n_img/badge_ranking_0<?php echo $i; ?>.png" width="70" />
                            </div>

                            <p>
                                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>"
                                    target="_blank">
                                    <span class="f-13"><?php the_title(); ?></span>
                                </a>
                            </p>　
                        </th>
                    </tr>

                    <tr>
                        <td class="r-img">

                            <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>" target="_blank">
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

                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>" target="_blank">
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

                            <?php echo $amount; ?>
                        </td>
                        <td>
                            <?php if ($i === 1) : ?>
                            <img alt="" src="./img/review_5.gif" />
                            <?php elseif ($i === 2) : ?>
                            <img alt="" src="./img/review_45.gif" />
                            <?php elseif ($i === 3) : ?>
                            <img alt="" src="./img/review_4.gif" />
                            <?php elseif ($i === 4) : ?>
                            <img alt="" src="./img/review_4.gif" />
                            <?php elseif ($i === 5) : ?>
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
                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>" target="_blank">
                    <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
                </a>
            </div>

            <?php if($i===2) : ?>
                      <div class="meta-notes">
                      <span class="grad-trigger"></span>
                          <div class="grad-item">
                            <p>
                            ※1 糖の吸収を抑える機能性と、継続摂取により腸内環境を整える(おなかの中のビフィズス菌を増やす)機能性は機能性関与成分サラシノールによる研究レビュー<br>
                            2019年4月 消費者庁届出情報 錠剤型サプリメントの剤形で以下の3つの機能性を届出した機能性表示食品は日本初。当社調べ。
                            </p>
                            <p>
                            ※2 ①本品の継続摂取により BMI が高めの方のおなかの脂肪(体脂肪・内臓脂肪)・体重を減らすことで高めの BMI を改善する
                                ②機能性関与成分サラシノールが食事から摂取した糖の吸収を抑える
                                ③機能性関与成分サラシノールの継続摂取により腸内環境を整える(おなかの中のビフィズス菌を増やす)
                            </p>
                            <p>
                            ※3 継続摂取により BMIが高めの方のおなかの脂肪(体脂肪・内臓脂肪)・体重を減らすことで高めのBMIを改善する機能は、最終製品を用いた臨床試裝
                            </p>
                          </div>
                      </div>
                    <?php endif; ?>


            <?php $i++;
                endwhile;
            endif;
            wp_reset_postdata(); ?>



        </div>
        <!--#tab2 end-->






        <!-- #tab3 燃焼ランキング -->
        <div id="tab3" class="swiper-slide">


            <?php wp_reset_postdata();

            $args = array(
                'posts_per_page' => '5',
                'category_name' => 'burning',
                'post_type' => 'post',
                'meta_key' => 'burnrank',
                'orderby' => 'meta_value_num',
                'order' => 'asc',
            );


            $the_query = new WP_Query($args);
            $i = 1;
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                    $point = get_field('point');
                    $content = get_field('content');
                    $catch = get_field('catch');
                    $amount = get_field('amount');
                    $quantity = get_field('quantity');
                    $regularly = get_field('regularly');
                    $onedayprice = get_field('onedayprice');
                    $jenre = get_field('jenre');
                    $url = get_field('url');
                    $rnkprice = get_field('rnk-price') ;
            ?>



            <table class="r-table" cellspacing="0">

                <tbody>

                    <tr>
                        <th class="r-title" colspan="2">
                            <div class="img-center badge" style="position: absolute; top:10px; left:10px;">
                                <img src="./img/n_img/badge_ranking_0<?php echo $i; ?>.png" width="70" />
                            </div>

                            <p>
                                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>"
                                    target="_blank">
                                    <?php if($i === 3) : ?>
                                    <span class="f-13">ワイルド<br>マンゴーの力粒</span>
                                    <?php else : ?>
                                    <span class="f-13"><?php the_title(); ?></span>
                                    <?php endif; ?>
                                </a>
                            </p>　
                        </th>
                    </tr>

                    <tr>
                        <td class="r-img">

                            <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>" target="_blank">
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
            <?php if($i==2) : ?>
            <div class="meta-notes">
                <span class="grad-trigger"></span>
                <div class="grad-item">
                    <p>
                        ※1 糖の吸収を抑える機能性と、継続摂取により腸内環境を整える（おなかの中のビフィズス菌を増やす）機能性は機能性関与成分サラシノールによる研究レビュー</p>
                    <p>
                        ※2 継続摂取によりBMIが高めの方のおなかの脂肪（体脂肪・内臓脂肪）・体重を減らすことで高めのBMIを改善する機能は、最終製品を用いた臨床試験
                    </p>
                    <p>
                        ※3 出典：㈱富士経済 H･Bフーズマーケティング便覧2019 No.2
                        機能志向食品編(2018.12.25発行)サラシアを関与成分とする全てのカテゴリにおける2017年(実績)販売高の合計値
                    </p>
                    <p>
                        ※4 2007年10月～2019年3月までのメタバリアシリーズの累計販売個数
                    </p>
                </div>


            </div>
            <?php endif; ?>


            <div class="r-txtbox">

                <?php echo $content; ?>


                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>" target="_blank">
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
                            <?php if ($i === 1) : ?>
                            <img alt="" src="./img/review_5.gif" />
                            <?php elseif ($i === 2) : ?>
                            <img alt="" src="./img/review_45.gif" />
                            <?php elseif ($i === 3) : ?>
                            <img alt="" src="./img/review_4.gif" />
                            <?php elseif ($i === 4) : ?>
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
                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>" target="_blank">
                    <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
                </a>
            </div>


            <?php $i++;
                endwhile;
            endif;
            wp_reset_postdata(); ?>


        </div>
        <!--#tab3 end-->






        <!-- #tab4 糖質ランキング -->
        <div id="tab4" class="swiper-slide">



            <?php include('ranking-meta.php'); ?>



        </div>
        <!--#tab4 end-->





        <!-- #tab5 酵素サプリランキング-->
        <div id="tab5" class="swiper-slide">

            <?php wp_reset_postdata();

            $args = array(
                'posts_per_page' => '3',
                'category_name' => 'enzyme',
                'post_type' => 'post',
                'meta_key' => 'enzymerank',
                'orderby' => 'meta_value_num',
                'order' => 'asc',
            );


            $the_query = new WP_Query($args);
            $i = 1;
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                    $point = get_field('point');
                    $content = get_field('content');
                    $catch = get_field('catch');
                    $amount = get_field('amount');
                    $quantity = get_field('quantity');
                    $regularly = get_field('regularly');
                    $onedayprice = get_field('onedayprice');
                    $jenre = get_field('jenre');
                    $url = get_field('url');
                    $rnkprice = get_field('rnk-price') ;
            ?>

            <table class="r-table" cellspacing="0">

                <tbody>

                    <tr>
                        <th class="r-title" colspan="2">
                            <div class="img-center badge" style="position: absolute; top:10px; left:10px;">
                                <img src="./img/n_img/badge_ranking_0<?php echo $i; ?>.png" width="70" />
                            </div>

                            <p>
                                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>"
                                    target="_blank">
                                    <span class="f-13"><?php the_title(); ?></span>
                                </a>
                            </p>　
                        </th>
                    </tr>

                    <tr>
                        <td class="r-img">

                            <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>" target="_blank">
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


                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>" target="_blank">
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
                            <?php if ($i === 1) : ?>
                            <img alt="" src="./img/review_5.gif" />
                            <?php elseif ($i === 2) : ?>
                            <img alt="" src="./img/review_45.gif" />
                            <?php elseif ($i === 3) : ?>
                            <img alt="" src="./img/review_4.gif" />
                            <?php elseif ($i === 4) : ?>
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
                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>" target="_blank">
                    <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
                </a>
            </div>


            <?php $i++;
                endwhile;
            endif;
            wp_reset_postdata(); ?>



        </div>
        <!--#tab5 end-->





        <!-- #tab6 ドリンクランキング -->
        <div id="tab6" class="swiper-slide">

            <?php wp_reset_postdata();

            $args = array(
                'posts_per_page' => '5',
                'category_name' => 'enzymedrk',
                'post_type' => 'post',
                'meta_key' => 'drkrank',
                'orderby' => 'meta_value_num',
                'order' => 'asc',
            );


            $the_query = new WP_Query($args);
            $i = 1;
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                    $point = get_field('point');
                    $content = get_field('content');
                    $catch = get_field('catch');
                    $amount = get_field('amount');
                    $quantity = get_field('quantity');
                    $regularly = get_field('regularly');
                    $onedayprice = get_field('onedayprice');
                    $jenre = get_field('jenre');
                    $url = get_field('url');
                    $rnkprice = get_field('rnk-price') ;
            ?>



            <table class="r-table" cellspacing="0">

                <tbody>

                    <tr>
                        <th class="r-title" colspan="2">
                            <div class="img-center badge" style="position: absolute; top:10px; left:10px;">
                                <img src="./img/n_img/badge_ranking_0<?php echo $i; ?>.png" width="70" />
                            </div>

                            <p>
                                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>"
                                    target="_blank">
                                    <span class="f-13"><?php the_title(); ?></span>
                                </a>
                            </p>　
                        </th>
                    </tr>

                    <tr>
                        <td class="r-img">

                            <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>" target="_blank">
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


                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>" target="_blank">
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
                            <?php if ($i === 1) : ?>
                            <img alt="" src="./img/review_5.gif" />
                            <?php elseif ($i === 2) : ?>
                            <img alt="" src="./img/review_45.gif" />
                            <?php elseif ($i === 3) : ?>
                            <img alt="" src="./img/review_4.gif" />
                            <?php elseif ($i === 4) : ?>
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
                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>" target="_blank">
                    <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
                </a>
            </div>


            <?php $i++;
                endwhile;
            endif;
            wp_reset_postdata(); ?>


        </div>
        <!--#tab6 end-->




        <!-- #tab7 ドリンクランキング -->
        <div id="tab7" class="swiper-slide">

            <?php wp_reset_postdata();

            $args = array(
                'posts_per_page' => '3',
                'category_name' => 'smoothie',
                'post_type' => 'post',
                'meta_key' => 'smoothierank',
                'orderby' => 'meta_value_num',
                'order' => 'asc',
            );


            $the_query = new WP_Query($args);
            $i = 1;
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                    $point = get_field('point');
                    $content = get_field('content');
                    $catch = get_field('catch');
                    $amount = get_field('amount');
                    $quantity = get_field('quantity');
                    $regularly = get_field('regularly');
                    $onedayprice = get_field('onedayprice');
                    $jenre = get_field('jenre');
                    $url = get_field('url');
                    $rnkprice = get_field('rnk-price') ;
            ?>



            <table class="r-table" cellspacing="0">

                <tbody>

                    <tr>
                        <th class="r-title" colspan="2">
                            <div class="img-center badge" style="position: absolute; top:10px; left:10px;">
                                <img src="./img/n_img/badge_ranking_0<?php echo $i; ?>.png" width="70" />
                            </div>

                            <p>
                                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>"
                                    target="_blank">
                                    <span class="f-13">
                                        <?php if ($i === 1) : ?>
                                        シボヘール<br>GOLDスムージー
                                        <?php elseif ($i === 2) : ?>
                                        イージー<br>スムージーグリーン
                                        <?php elseif ($i === 3) : ?>
                                        わたしと<br>よりそうスムージー
                                        <?php else : ?>
                                        <?php endif; ?>
                                    </span>
                                </a>
                            </p>　
                        </th>
                    </tr>

                    <tr>
                        <td class="r-img">

                            <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>" target="_blank">
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


                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>" target="_blank">
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
                            <?php if ($i === 1) : ?>
                            <img alt="" src="./img/review_5.gif" />
                            <?php elseif ($i === 2) : ?>
                            <img alt="" src="./img/review_45.gif" />
                            <?php elseif ($i === 3) : ?>
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
                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>" target="_blank">
                    <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
                </a>
            </div>


            <?php $i++;
                endwhile;
            endif;
            wp_reset_postdata(); ?>


        </div>
        <!--#tab7 end-->




        <!-- #tab8  -->
        <div id="tab8" class="swiper-slide">

            <?php wp_reset_postdata();

            $args = array(
                'posts_per_page' => '3',
                'category_name' => 'medi',
                'post_type' => 'post',
                'meta_key' => 'medirank',
                'orderby' => 'meta_value_num',
                'order' => 'asc',
            );


            $the_query = new WP_Query($args);
            $i = 1;
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                    $point = get_field('point');
                    $content = get_field('content');
                    $catch = get_field('catch');
                    $amount = get_field('amount');
                    $quantity = get_field('quantity');
                    $regularly = get_field('regularly');
                    $onedayprice = get_field('onedayprice');
                    $jenre = get_field('jenre');
                    $url = get_field('url');
                    $rnkprice = get_field('rnk-price') ;
            ?>



            <table class="r-table" cellspacing="0">

                <tbody>

                    <tr>
                        <th class="r-title" colspan="2">
                            <div class="img-center badge" style="position: absolute; top:10px; left:10px;">
                                <img src="./img/n_img/badge_ranking_0<?php echo $i; ?>.png" width="70" />
                            </div>

                            <p>
                                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>"
                                    target="_blank">
                                    <span class="f-13">
                                        <?php the_title(); ?>
                                    </span>
                                </a>
                            </p>　
                        </th>
                    </tr>

                    <tr>
                        <td class="r-img">

                            <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>" target="_blank">
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
                        <a href="./links/bouhu.php<?php echo "?" . $query2; ?>" target="_blank">
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
                <?php else : ?>
                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>" target="_blank">
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
                            <?php if ($i === 1) : ?>
                            <img alt="" src="./img/review_5.gif" />
                            <?php elseif ($i === 2) : ?>
                            <img alt="" src="./img/review_45.gif" />
                            <?php elseif ($i === 3) : ?>
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
                <a target="_blank" href="<?php echo $url; ?><?php echo "?" . $query2; ?>" target="_blank">
                    <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
                </a>
            </div>


            <?php $i++;
                endwhile;
            endif;
            wp_reset_postdata(); ?>


        </div>
        <!--#tab8 end-->


    </div>
    <!-- .swiper-wrapper end-->








</div>
<!-- .tab_container -->