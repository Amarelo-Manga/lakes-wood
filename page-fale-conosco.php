<?php
/**
 * Template name: Fale Conosco
 */
?>
<div id="bannerPage" style="background:url(<?php the_post_thumbnail_url(); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 ml-md-auto col-sm-12">
				<h3><?php the_title(); ?></h3>
			</div>
		</div>
	</div>
</div>
<div id="contato" class="page-content container">
	<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
</div>