<?php
/*
	Template Name: Home Page
*/

get_header(); ?>
<main>
	<?php get_template_part('pages/home-page/content','banner'); ?>
	<?php get_template_part('pages/home-page/content', 'about-header');?>
</main>
<?php get_footer(); ?>