<?php get_header(); ?>
<div class="wrap" style="position:relative;">
	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else :
			$shw = post_setup();
	 endif; ?>

	<div id="primary" class="content-area" style=" width:100%; color:#000;">
		<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile;

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			if(!$shw){
				echo "</div>";
			}
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
	<!--/content -->

<?php
//if($shw){
	get_footer();
//} ?>
