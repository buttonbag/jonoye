<?php
/**
 Template Name: Home Page
 */

get_header();
?>

	<?php get_template_part('page', 'nav'); ?>

	<main id="main" class="site-main">

	<?php get_template_part('page', 'about'); ?>
	<?php get_template_part('page', 'work'); ?>
	<?php get_template_part('page', 'services'); ?>
	<?php get_template_part('page', 'contact'); ?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
