<?php 
$query = "?".$_SERVER['QUERY_STRING'];
$search = array('&f=index.php&','&f=index.php');
$query2 = str_replace($search, '', $query);

wp_reset_query();
$args = array(
   'posts_per_page'=>'1',
     'meta_query' => array(
       array(	
        'key'=>'pickup',
        'value'=>'1',
        'compare'=>'=',
       ),
     ),
);
$query = new WP_Query($args);
?>
<div class="pickupbox">
  <div class="sortname">オススメ！</div>
  <div id="sort1" class="sortrate">評価<br>ランキング</div>
  <div id="sort2" class="sortprice">初回価格<br>(税込)</div>
  <div id="sort6" class="sortreguprice">定期価格<br>(税込)</div>
  <div id="sort3" class="sortspecialprice">1日あたりの価格(税込)</div>
  <div id="sort4" class="sortonday">実感できるまで</div>
  <div id="sort5" class="sortvolume">サプリタイプ</div>
 <div style="clear:both"></div>
</div>

  <?php $i = 0;if($query->have_posts()): ?>
  <?php while ($query->have_posts()) : $query->the_post(); $i++;
  $image_id = get_post_thumbnail_id ();
  $image_url = wp_get_attachment_image_src ($image_id, true);
  $price = number_format((int)get_field('price'));
  $regularly = number_format((int)get_field('regularly'));
  $onedayprice = number_format((int)get_field('onedayprice'));
  $contv = get_field('contv');
  $copy = get_field('copy');
  $jenre = get_field('jenre');
  $coolingoff = get_field('coolingoff');
  $url = get_field('url');
  $ex = get_field('ex');
   ?>


<div class="detailbox pickico">
  <div class="sp detailnamesp"><a href="http://xn--ecki4eozm7d.net<?php echo $url; ?><?php echo $query2; ?>" target="_blank"><span><?php the_title(); ?></span></a></div>
  <div class="detailimg"><img src="<?php echo $image_url[0]; ?>" width="100%"><br class="pc"><a class="pc" target="_blank" href="http://xn--ecki4eozm7d.net/<?php echo $url; ?><?php echo $query2; ?>"><?php the_title(); ?></a></div>
  <div class="sp detailnameex">
    <div class="detailrate"><p class="rankno<?php echo $i; ?>"><span><?php echo $i; ?></span>位</p><p class="ratesp<?php echo $i; ?> marbo0"><span></span></p><p style="color:#000;font-style:normal;font-weight:normal;">(<?php echo $ex; ?> / 5.0)</p></div>
  </div>
  <div class="sp" style="clear:both"></div>
    <div class="detail">
      <div class="detailrate pc"><p class="rankno<?php echo $i; ?>"><span><?php echo $i; ?></span>位</p><p class="ratesp<?php echo $i; ?>"><span></span></p><p style="color:#000;font-style:normal;font-weight:normal;">(<?php echo $ex; ?> / 5.0)</p></div>
      <div class="detailprice"><div class="sp dtitle">初回価格</div>￥<?php echo $price; ?></div>
      <div class="detailreguprice"><div class="sp dtitle">定期価格</div>￥<?php echo $regularly; ?></div>
      <div class="detailonedayprice"><div class="sp dtitle">1日あたりの価格(税込)</div>￥<?php echo $onedayprice; ?></div>
      <div class="detailspecialprice"><div class="sp dtitle">実感できるまで</div><?php echo number_unit($contv); ?></div>
      <div class="detailvolume"><div class="sp dtitle">サプリタイプ</div><?php if(is_array($jenre)){
          foreach($jenre as $value){
          echo $value.",";
          } 
      }else{ 
      echo $jenre;
      } ?></div>
      <div class="detailurl pc"><a href="http://xn--ecki4eozm7d.net<?php echo $url; ?><?php echo $query2; ?>" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/pickuplinkbutton.png" width="100%"></a></div>
     <p style="clear:both"></p>
      <div class="detailcomment"><p style="border-bottom:1px solid #ccc;padding:0 0 5px;margin:0 0 5px;"><?php echo $copy; ?></p><?php the_content(); ?></div>
      <div class="detailurl sp"><a href="http://xn--ecki4eozm7d.net<?php echo $url; ?><?php echo $query2; ?>" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sppickuplinkbutton.png" width="100%"></a></div>
    </div><!--detail-->

 <p style="clear:both"></p>
</div><!--detailbox-->

<style>
.ratesp<?php echo $i; ?>{
padding:0 !important;
width:86px;
height:19px;
margin:0px auto 0;
background:url(<?php print get_template_directory_uri(); ?>/img/off.png) no-repeat;
background-size:contain;
}
.ratesp<?php echo $i; ?> span{
display:block;
width:<?php echo $ex*20; ?>%;
height:19px;
background:url(<?php print get_template_directory_uri(); ?>/img/on.png) no-repeat;
}
</style>


  <?php endwhile; endif; wp_reset_query(); ?>
