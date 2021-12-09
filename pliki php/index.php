<?php
if (!defined('ABSPATH')) exit;

get_header();
get_template_part('template-parts/header-image');

?>

<main id="main" class="[- single index -]" role="main">
	<div class="container">
		<h1 class="[- single-title <?php if (in_category('artykuly')) {
										echo 'text-red';
									} ?> -]"><strong><?php the_title(); ?></strong></h1>

		<?php
		while (have_posts()) : the_post();
			the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter'));
		endwhile;
		?>

		<?php if (in_category('artykuly')) : ?>
			<hr class="mt-5">
			<div class="row justify-content-center">
				<div class="col-lg-4">
					<a class="btn-red btn-block" href="/jedenprocent/artykuly/" title="Wróć do listy artykułów">
						Wróć do listy artykułów <i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		<?php endif; ?>

	</div>
</main><!-- #main -->

<?php get_footer(); ?>