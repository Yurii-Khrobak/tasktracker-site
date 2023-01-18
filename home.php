<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?> 

<main>
	<div class="container">

<?php
global $post;

$myposts = get_posts([ 
	'numberposts' => 5,
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
?>
<div class="article-container">
<a href="post/<?php echo get_the_ID(); ?>">
		<article>
			<div class="article_text">
				<h1 class="article_title" ><?php the_title(); ?></h1>
				<p class="article_content"><?php the_content(); ?></p>
			</div>
			<div class="article_img">
				<img src="<?php echo the_post_thumbnail_url(); ?>" />
			</div>
		</article>
	</a>
</div>
		<?php 
	}
} else { ?>  <div class="main-content">
                                <h1 class="main-title">Приложение органайзер</h1>
                                <div class="main-text">
                                        <p>Контролируй все свои дела и задачи. Не упускай ничего важного. Заметки, даты и напоми
нания. Все в
                                                одном месте.
                                        </p>                                                    </div>                                                          <a class="btn" href="#">Начать п
ользоваться</a>
			</div>                                                          <div class="main-img">                                                  <img src="<?php echo get_template_directory_uri() . '/assets/' ?>/img/header-image.png" alt="">                         </div> 							
<?php }

wp_reset_postdata();
?>
	</div>
</main>

<?php get_footer(); ?>
