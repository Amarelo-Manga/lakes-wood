<?php get_template_part('templates/page', 'banner'); ?>

<?php 
	$desbravando = get_post(6); 
	$conheca = get_post(8);
	$floresta = get_post(10);
	$represa = get_post(12);
	$madeira = get_post(14); 
?>
 <div id="home" class="wrap container" role="document">
     <div class="content">
		<div class="row">
			<div id="desbravando" class="conteudo col-lg-8 col-md-8 col-sm-12">
				<h3><?php echo $desbravando->post_title; ?></h3>
				<?php echo apply_filters( 'the_content', $desbravando->post_content );  ?>
			</div>
			<div id="conheca" class="conteudo col-lg-4 col-md-4 col-sm-12">
				<?php echo get_the_post_thumbnail(8);?>
				<h3><?php echo $conheca->post_title; ?></h3>
				<?php echo apply_filters( 'the_content', $conheca->post_content );  ?>
			</div>
		</div>
		<div id="floresta" class="row">
			<div class="conteudo col-lg-5 col-md-5 ml-md-auto col-sm-12">
				<h3><?php echo $floresta->post_title; ?></h3>
				<?php echo apply_filters( 'the_content', $floresta->post_content );  ?>
			</div>
		</div>
		<?php 
			// Represa Custom Fields
			$custom_fields = get_post_custom(12);
			foreach ($custom_fields as $key => $value) {
				if(!strstr($key,"_") && !strstr($key,"tamanho")){
					$fields .= "<li><span>".$key."</span> ".$value[0]."</li>"; 
				};
				if(strstr($key,"tamanho")){
					$tamanho .= "<p>".$value[0]."</p>"; 
				};
			}
		?>
		<div id="represa" class="conteudo row">
			<div class="col-lg-7 col-md-7 col-sm-12">
				<h3><?php echo $represa->post_title; ?></h3>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<ul><?php echo $fields; ?></ul>
					</div>
					<div class="tamanho col-lg-4 col-md-4 col-sm-12">
						<?php echo $tamanho; ?>
					</div>
				</div>
			</div>
			<div class="texto col-lg-5 col-md-5 col-sm-12">
				<?php echo apply_filters( 'the_content', $represa->post_content );  ?>
			</div>
			<div class="represaimg col-lg-12 col-md-12 col-sm-12">
				<?php echo get_the_post_thumbnail(12);?>
			</div>
		</div>
		<?php 
			// Madeira Custom Fields
			$custom_fields = get_post_custom(14);
			foreach ($custom_fields as $key => $value) {
				if(strstr($key,"madeiralista")){
					$madeiralista = "<p>".$value[0]."</p>"; 
				};
			}
		?>
		<div id="madeira">
			<div class="conteudo row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<h3><?php echo $madeira->post_title; ?></h3>
					<?php echo apply_filters( 'the_content', $madeira->post_content );  ?>
				</div>
				<div id="escavadeira" class="col-lg-6 col-md-6 col-sm-12">
					<?php echo get_the_post_thumbnail(14);?>
				</div>
			</div>
			<div class="img row">
				<div class="conteudo col-lg-6 col-md-6 ml-md-auto col-sm-12">
					<?php echo $madeiralista; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_template_part('templates', 'footer'); ?>
