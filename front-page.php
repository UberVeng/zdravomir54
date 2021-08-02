<?php get_header();?>

<div class="container-fluid p-0">
<div class="row"></div>
<div class="row justify-content-center img1-height p-0">
	<img class="front-page-img m-0" src="<?php $uploads = wp_upload_dir($time = '2020/04'); echo($uploads['url']); ?>/Algas-iStock-520593426-scaled.jpg" />
	<div class="main-title">ЛАМИНА ФОРТЕ</div>
</div>

<div class="row justify-content-center" style="postition: absolute;	 z-index:1000;">	
	<div class="col-10 pb-5 pt-5" style="font-size: 1.5em !important;   text-align: justify;">
	
	<b>Ламина форте</b> - это натуральный биопродукт из экологически чистых дальневосточных дикорастущих бурых морских водорослей - Ламинария Японика, произрастающих в прибрежных акваториях о. Сахалин и собираемых водолазами ручным способом. 
	
</div>
</div>
<div class="row justify-content-center pb-5 pt-5 inside-box-shadow" style="background-color: #357882; font-size: 1.2rem;">

		<div class="col-12" style="text-align: center; color: #ffea76; font-size: 1.5rem;">
			В одной капсуле содержится:
		</div>
		<div class="row justify-content-center">
			<div class="col-8 col-lg-3 p-4 m-2 mt-4 capsule-content">
			Весь спектр витаминов (А, В1, В2, В3, В12, С, D3, Е, К, F, H)
			</div>
			<div class="col-8 col-lg-3 p-4 m-2 mt-4 capsule-content">
			Незаменимые микроэлементы (йод, селен, барий, цинк, магний, сера и ещё 36 элементов)
			</div>
			<div class="col-8 col-lg-3 p-4 m-2 mt-4 capsule-content">
			Фолиевая и пантотеновая кислоты, полисахариды, аминокислоты, полиненасыщенные кислоты типа Омега.
			</div>
		</div>	

</div>



<!--
<div class="row justify-content-center">
	<h1><?php the_title();?></h1>
</div>
	<?php if(have_posts()) : while(have_posts()) : the_post();?>
		<?php the_content();?>
	<?php endwhile; endif;?>
-->

</div>

<?php get_footer();?>