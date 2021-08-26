<?php
/**
 * Template part for displaying works post content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package prefontaine
 */

?>

<section id="portfolio-details" class="portfolio-details">
      <div class="container">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="portfolio-info">
	<header>
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php /* prefontaine_post_thumbnail(); */ ?>

	<div class="portfolio-description">
		<?php
		the_content();

		?>
	</div><!-- .entry-content -->
	</div>

</article><!-- #post-<?php the_ID(); ?> -->

</div>
</section>