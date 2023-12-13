<?php get_header(); ?>

<div id="listposts">
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?>>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
				<?php the_title_attribute(); ?>
			</a></h2>
			<?php the_content(); ?>
			<p id="postedit"><?php edit_post_link(); ?></p>
		</article>
		
		<?php wp_link_pages(); // shows page numbers for paginated posts (look it up, it is pretty neat) ?>
		
	<?php endwhile; else: ?>
		<p>Could not find any posts. You should try harder&#33;</p>
 	<?php endif; ?>
	
	<nav id="nav-below"><?php posts_nav_link(' -- ', 'newer entries','older entries'); ?>&nbsp; &nbsp; </nav>

</div> <!-- listposts -->

<ul id="sidebar">
		<?php if ( !function_exists('dynamic_sidebar') ||
			dynamic_sidebar( 'sidebar1' )): // displaying the bar we made in functions.php
		endif;?>
</ul>

<?php get_footer(); ?>