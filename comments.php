<div id="comments">
	
	<?php if ( have_comments() ) : ?>
		
		<?php wp_list_comments( array('style'=> 'div', 'type'=>'comment', ) ); ?>
		
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="nav-below"><?php next_comments_link( 'newer comments' ); ?> -- <?php previous_comments_link( 'older comments' ); ?></nav>
		<?php endif; ?>	
		
	<?php else: ?>
		
		<p>create a conversation by posting a comment in the form below</p>
		
	<?php endif; ?>
	
</div>
	
				
	<?php // comment_id_fields(); ?>
	
				
			

<?php 

add_filter('comment_form_default_fields', 'url_filtered');
function url_filtered($fields)
{
  if(isset($fields['url']))
   unset($fields['url']);
   // unset($fields['email']);
  return $fields;
}

comment_form(array(
	
	'comment_field'=>"<textarea name='comment' id='comment' rows='10' tabindex='4'></textarea>", 
	'comment_notes_after'=>"", 
	'comment_notes_before'=>"", 
	'title_reply'=>"", 
	
	)); ?> 