<footer>
	<ul>
		<?php if ( !function_exists('dynamic_sidebar') ||
			dynamic_sidebar( 'footerbar1' )): // displaying the bar we made in functions.php
		endif;?>
	
		<?php if ( have_posts() ):  ?>
			<li><?php the_tags('Tags for the post above: ', ', ', ''); ?></li>
			<li><?php the_date('', 'Date of posting:', ''); ?></li>
		<?php	endif; ?>
	
	<li>Theme: <a href="http://fortelle.no/blog/2012/toosimple">Too Simple</a> by <a href="http://fortelle.no/">Fortelle</a></li>
	</ul>
	<?php wp_footer(); //hook ?> 
</footer>
</div> <!-- parappa -->
</body>
</html>