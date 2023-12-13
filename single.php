<?php get_header(); ?>

<div id="single">
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<article <?php post_class(); ?>>
			
			<h2><?php the_title(); ?></h2>
				
			<?php the_content(); ?>
			
			<?php wp_link_pages(); // shows page numbers for paginated posts (look it up, it is pretty neat) ?>
			<p id="postedit"><?php edit_post_link(); ?></p>

		</article>
			
			<nav id="postprevnext"><?php previous_post_link('%link', '<p id="previouspost">Previous post', '</p>'); ?>
			<?php next_post_link('%link', '<p id="nextpost">Next post', '</p>'); ?>
			</nav>
	<?php endwhile; else: ?>
 	<p>Could not find any posts. You should try harder&#33;</p>
 	<?php endif; ?>
	
	<?php comments_template() //gets comments.php ?>
	
</div>


<ul id="sidebar">
		<?php if ( !function_exists('dynamic_sidebar') ||
			dynamic_sidebar( 'sidebar1' )): // displaying the bar we made in functions.php
		endif;?>
</ul>



<?php get_footer(); ?>