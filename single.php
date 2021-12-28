<?php
if (!defined('ABSPATH')) exit;

get_header();
?>

<main id="main" class="[- single -]" role="main">
	<div class="container">
		<h1 class="[- single-title -]"><strong><?php the_title(); ?></strong></h1>
		<?php
		while (have_posts()) : the_post();
			the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter'));
		endwhile;
		?>
	</div>
</main><!-- #main -->
<?php get_footer(); ?>