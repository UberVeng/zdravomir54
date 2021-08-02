<?php get_header();?>
<div class="container-fluid pt-5 pb-5">
	<div class="row justify-content-center">
		<div class="col-8">

			<h1><?php the_title();?></h1>
			
			<?php if(have_posts()) : while(have_posts()) : the_post();?>

				<?php the_content();?>

			<?php endwhile; endif;?>
		</div>
	</div>
</div>

<?php get_footer();?>