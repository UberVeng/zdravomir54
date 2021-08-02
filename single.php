<?php get_header();?>

<style type="text/css">
p{-webkit-line-clamp: none;}
h1{text-align: center;}
</style>

<div class="container p-3 mt-5 mb-5 post-full">
	<div class="col-12">
	<h1><?php the_title();?></h1>
	
	<?php if(has_post_thumbnail()):?>
		<img src="<?php the_post_thumbnail_url('largest');?>" class="post-img mx-auto d-block">
	<?php endif;?>

	<?php if(have_posts()) : while(have_posts()) : the_post();?>

		<?php the_content();?>

	<?php endwhile; endif;?>
	</div>

</div>

<?php get_footer();?>