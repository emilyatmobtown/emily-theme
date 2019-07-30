<?php
/**
 * Template Name: Home
 *
 * @package EmilyTheme
 */

get_header();
?>

<div id="content">
	<h2><?php the_title(); ?></h2>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
<div id="thumbnail" class="featured-image">
	<div class="image-wrapper">
		<?php the_post_thumbnail( 'full' ); ?>
	</div>
</div>

<?php get_footer(); ?>
