<div class="block-slider">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<ol class="carousel-indicators">
				<?php  
					$i = 0;
			  		$getPosts = new WP_query();
			  		$getPosts->query('post_status=publish&showposts=11&post_type=slider');
			  		global $wp_query;
			  		$wp_query->in_the_loop = true;

			  		// echo '<pre>' , var_dump($getPosts) , '</pre>'; die;
			  		while ($getPosts->have_posts()) : $getPosts->the_post(); ?>
			  			<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
		  			 	<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0){ echo "active";} ?>"></li>
			  		<?php $i++; endwhile;
			  		wp_reset_postdata();
			  		// while ($getPosts->have_posts()) {
			  		// 	$getPosts->the_post();
			  		// }
			  	?>
		  	</ol>
		  	<?php  
		  		$getPosts = new WP_query();
		  		$getPosts->query('post_status=publish&showposts=1&post_type=slider');
		  		global $wp_query;
		  		$wp_query->in_the_loop = true;

		  		// echo '<pre>' , var_dump($getPosts) , '</pre>'; die;
		  		while ($getPosts->have_posts()) : $getPosts->the_post(); ?>
		  			<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
		  			<div class="carousel-item active">
			      		<a href=""><img style="width: 100%" class="d-block img-fluid animated zoomIn " src="<?php echo $featured_img_url ?>" alt="First slide"></a>
			       	</div>
		  		<?php endwhile; wp_reset_postdata(); ?>

		  	<?php  
		  		$getPosts = new WP_query();
		  		$getPosts->query('post_status=publish&showposts=10&post_type=slider&offset=1');
		  		global $wp_query;
		  		$wp_query->in_the_loop = true;

		  		// echo '<pre>' , var_dump($getPosts) , '</pre>'; die;
		  		while ($getPosts->have_posts()) : $getPosts->the_post(); ?>
		  			<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
		  			<div class="carousel-item">
		      <a href=""><img style="width: 100%" class="d-block img-fluid animated zoomIn " src="<?php echo $featured_img_url ?>" alt="First slide"></a>
		    </div>
		  		<?php  endwhile;
		  		wp_reset_postdata();
		  		// while ($getPosts->have_posts()) {
		  		// 	$getPosts->the_post();
		  		// }
		  	?>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>
<!-- end block-slider -->