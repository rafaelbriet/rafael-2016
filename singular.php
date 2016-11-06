<?php get_header(); ?>

<?php
if (have_posts()) {
	while (have_posts()) {
		the_post();
?>

<article id="<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-cover"><?php the_post_thumbnail(); ?></div>
	<div class="container">
		<div class="post-header">
			<h1 class="post-title"><?php the_title(); ?></h1>
			<p class="post-date"><?php the_date(); ?></p>
		</div>
		<div class"post-content"><?php the_content(); ?></div>
	</div>
</article>

<section class="comments-section">
	<?php 
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	?>
</section>

<?php
	} //endwhile
} //endif
?>

<?php get_footer(); ?>