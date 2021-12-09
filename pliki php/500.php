<?php

/**
 * Template Name: 500 error
 */

get_header(); ?>

<div class="empty-header-filler"></div>

<main id="main" class="page-500" role="main">
	<div class="container pt-5 pb-5">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<img src="<?php echo IMAGES; ?>/errors/500.jpg" alt="Error" class="img-fluid mb-4">
			</div>
			<div class="col-lg-6">
				<h4 class="mb-4"><strong>Za chwilę to naprawimy.</strong></h4>
				<p>
					Serwis www Szlachetnej Paczki jest chwilowo niedostępny. Pracujemy nad naszymi serwerami, żeby jak najszybciej do Was wrócić. Dziękujemy za cierpliwość.
				</p>
				<p class="mb-4">
					A tymczasem możesz dowiedzieć się więcej o Akademii Przyszłości:
				</p>

				<a href="http://akademiaprzyszlosci.org.pl" class="btn btn-red btn-lg">Przejdź na akademiaprzyszlosci.org.pl ></a>
			</div>
		</div>
	</div>
</main><!-- #main -->

<?php
get_footer();
