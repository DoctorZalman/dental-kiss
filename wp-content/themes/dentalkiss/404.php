<?php
defined('ABSPATH') || exit;
get_header();
?>


<!-- banner -->
<div class="main-banner-2"></div>
<!-- //banner -->

<!-- page details -->
<div class="breadcrumb-agile py-1">
	<ol class="breadcrumb m-0">
		<li class="breadcrumb-item">
			<a href="<?php echo home_url(); ?>">Головна</a>
		</li>
		<li class="breadcrumb-item active" aria-current="page">404</li>

	</ol>
</div>
<!-- //page details -->

<!-- single -->
<div class="blog-w3l py-2 blog">
	<div class="container">
		<div class="m-5 p-5 text-center">
			<h2 class="text-center pb-5">Сторінку не знайдено</h2>
			<a href="<?php echo home_url(); ?>" class="btn blog-btn">Повернутись на головну</a>
		</div>
	</div>
</div>
<!-- //single -->

<?php get_footer(); ?>
