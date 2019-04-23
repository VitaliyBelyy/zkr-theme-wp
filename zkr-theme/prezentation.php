
<?php
/*
Template Name: Prezentation
*/
?>

<?php get_header();?>
<main>
	<div class="cont-prezentation">
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12">
					<?php
					while ( have_posts() ) : the_post(); 
	                ?>
	                    <div class="category-heading">
		                    <h1><?php the_title() ?></h1>
		                    <?php the_content(); ?>
		                </div>
	                <?php 
	                endwhile; 
	                ?>
				</div>
			</div>
		</div>
		<div class="prezentation full-width">
			<iframe src="https://docs.google.com/presentation/d/1JqZUAKiN81iGXGxVZK4wKOO8RQxo30sJaqur-UYAXQk/embed?start=true&loop=false&delayms=60000" frameborder="0" width="100%" height="100%" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
		</div>
	</div>
</main>
<?php get_footer();?>