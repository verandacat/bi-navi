<!-- <link href="fontawesome/css/fontawesome.min.css" rel="stylesheet" type="text/css" > -->
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/post-style.css" rel="stylesheet">
<?php
$posts = get_posts(array(
'posts_per_page' => 2, // 表示件数
'category' => '3' // カテゴリIDもしくはスラッグ名
));
?>
<?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
 
<!--表示する内容が入ります。-->
<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
<p><?php the_time('Y/m/d') ?></p>
<p><?php the_excerpt(); ?></p>
<p><a href="<?php the_permalink() ?>">続きを見る</a></p>
<!--表示する内容ここまで-->
 
<?php endforeach; endif; ?>