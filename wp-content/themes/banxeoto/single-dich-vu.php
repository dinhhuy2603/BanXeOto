<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		</div>
		<!-- end lh-header -->
		<div class="module-product-detail">
			<div class="container">
				<div class="bread-crumb">
					<a href="<?php bloginfo('url'); ?>">Trang chủ</a>
					<span class="dot">/</span>
					<a href="<?php bloginfo('url'); ?>/dich-vu">Dịch vụ</a>
					<span class="dot">/</span>
					<span class="name"><?php the_title(); ?></span>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						
					</div>
					<div class="col-lg-3 d-none d-lg-block">
						<?php get_sidebar(); ?>
					</div>
				</div>

			</div>
		</div>
<?php endwhile; else : ?>
<?php endif; ?>
<?php get_footer(); ?>