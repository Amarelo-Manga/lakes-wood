<?php
	$args = array(
		        'posts_per_page' => -1,
		        'post_type' => 'banner'
       	 	);
    $loop_banner = new WP_Query($args);
?>
<div id="banner" class="carousel slide" data-ride="carousel">
  	<div class="carousel-inner content" role="listbox">
		<?php 
			$count = 1;
		    while ($loop_banner->have_posts()) : $loop_banner->the_post();
		    	if( $count == 1){
		    		$active = "active";
		    	}else{
		    		$active = "";
		    	}
		?>    	
		<div class="carousel-item <?php echo $active; ?>" style="background:url('<?php the_post_thumbnail_url(); ?>');
    background-size: cover;background-repeat: no-repeat;" >
	      	<div class="container">
		      	<div class="row">
		 			<div class="titulo col-lg-2 col-md-2 col-sm-12"><?php the_title(); ?></div>
		 			<div class="texto col-lg-5 col-md-5 col-sm-12"><?php the_content(); ?></div>		
		      	</div>
	      	</div>
	    </div>
		<?php 
				$count++;
		    endwhile;
		?>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		</a>
	</div>
</div>