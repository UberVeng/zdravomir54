<?php get_header();?>
<?php 
function getPosts() {
$i = 0; 
if(have_posts()) : 
	while(have_posts()) : 
		the_post(); 
		$i++;
		echo '<div class="card card-hov p-0" onclick="window.location=\''; 
		the_permalink();
		echo '\';">';
		echo '<div class="block-hover"></div><div class="row">';
		if(has_post_thumbnail()):
			echo '<div class="col-12 col-lg-4 p-0 image-preview"><img src="';
			the_post_thumbnail_url('smallest');
			echo '"class="card-img-top"></div><div class="col-12 col-lg-8 p-0 news-body"><h3>';
			the_title();
			echo '</h3>';
			the_excerpt();
			echo '</div>';
		else:
			echo '<div class="col-12 p-0"><h3>';
			the_title();
			echo '</h3>';
			the_excerpt();
			echo '</div>';
		endif;
			echo '</div></div>';
	endwhile; 
endif;
}

?>
<div class="container-fluid pt-5 pb-5">
	<h1 style="text-align: center;"><?php single_cat_title();?></h1>
	</div>
	<div class="row justify-content-center">
		<div class="col-12 col-sm-10 col-md-8 col-lg-8 col-xl-8 p-0">
			
			<?php getPosts(); ?>
			

		</div>
	</div>
</div>
<nav class="pagination">
<?php pagination_bar(); ?>
</nav>

<?php get_footer();?>