<?php /* Template Name: Blog Page */ ?>
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
			<h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?><a></h1>
			<p class="post-date"><?php the_date(); ?></p>
		</div>
		<div class"post-content"><?php the_excerpt(); ?></div>
	</div>
</article>

<?php
	} //endwhile

	the_posts_pagination( array(
		'prev_text'          => 'Anterior',
		'next_text'          => 'Próxima',
		'before_page_number' => '<span class="meta-nav screen-reader-text"></span>',
	) );
} //endif
?>

<?php get_footer(); ?>