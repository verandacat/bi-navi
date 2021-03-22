<?php
/*
Template Name: item-template
*/
get_header('test'); 
?>



<div id="wrapper">

<a href="">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sub-header-01.png" alt="" width="100%">
    </a>

    <div class="sub-header">
    
      <div class="top_link_sub">
        <a href="https://bi-navi.com/">&lt; TOPに戻る</a>
      </div>
      
    </div>

    <h1 class="midashi-01">
    <?php the_title(); ?> 
    </h1>

    <div id="section-01">


        <div class="center">

            <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/lakubi-d.jpg" alt=""> -->
            <!-- <img src="<?php echo get_the_post_thumbnail() ?>" alt=""> -->
            <?php the_post_thumbnail('medium'); ?>

        </div>

<?php
if ( is_page("slaku") ) {
    include('laku.php');
}elseif( is_page("sbeltadrk") ) {
  include('beltadrk.php');
}
?>


        
<?php get_footer('test'); ?>
