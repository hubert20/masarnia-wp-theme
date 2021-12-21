<?php

/**
 * Template Name: 503 error
 */

get_header(); ?>

<div class="empty-header-filler"></div>

<main id="main" class="page-503" role="main">
	<div class="container pt-5 pb-5">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<img src="<?php echo IMAGES; ?>/errors/503.jpg" alt="Error" class="img-fluid mb-4">
			</div>
			<div class="col-lg-6">
				<h4 class="mb-4"><strong>Za chwilę to naprawimy.</strong></h4>
				<p>
					Serwis www jest chwilowo niedostępny. Pracujemy nad tym, żeby jak najszybciej do Was wrócić. Dziękujemy za cierpliwość.
				</p>
				<p class="mb-4">
					A tymczasem możesz dowiedzieć się więcej o Akademii Przyszłości:
				</p>

				<a href="www.pl" class="btn btn-red btn-lg">Przejdź na www.pl ></a>
			</div>
		</div>
	</div>
</main><!-- #main -->

<?php
get_footer();
