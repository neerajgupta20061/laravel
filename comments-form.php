<?php 
if(comments_open())
{
	?>
<div class="vc_row wpb_row vc_inner<?php echo (!empty($top_margin) && $top_margin!='none' ? ' ' . esc_attr($top_margin) : ''); ?>">
	<h4 class="box-header">
		<?php _e("LEAVE A COMMENT", 'carservice'); ?>
	</h4>
	<?php
	if(get_option('comment_registration') && !is_user_logged_in())
	{
	?>
	<p><?php echo sprintf(__("You must be <a href='%s'>logged in</a> to post a comment.", 'carservice'), wp_login_url(esc_url(get_permalink()))); ?></p>
	<?php
	}
	else
	{
	?>
	<form class="comment-form margin-top-40" id="comment-form" method="post" action="#">
		<div class="vc_row vc_row-fluid wpb_row vc_inner">
			<fieldset class="vc_col-sm-6 wpb_column vc_column_container">
				<div class="block">
					<input class="text_input" name="name" type="text" value="<?php echo esc_html_e('Your Name *', 'carservice'); ?>" placeholder="<?php echo esc_html_e('Your Name *', 'carservice'); ?>">
				</div>
				<div class="block">
					<input class="text_input" name="email" type="text" value="<?php echo esc_html_e('Your Email *', 'carservice'); ?>" placeholder="<?php echo esc_html_e('Your Email *', 'carservice'); ?>">
				</div>
				<div class="block">
					<input class="text_input" name="website" type="text" value="<?php echo esc_html_e('Your Website', 'carservice'); ?>" placeholder="<?php echo esc_html_e('Your Website', 'carservice'); ?>">
				</div>
			</fieldset>
			<fieldset class="vc_col-sm-6 wpb_column vc_column_container">
				<div class="block">
					<textarea name="message" placeholder="<?php echo esc_html_e('Comment *', 'carservice'); ?>"><?php echo __('Comment *', 'carservice'); ?></textarea>
				</div>
			</fieldset>
		</div>
		<div class="vc_row wpb_row vc_inner margin-top-30">
			<fieldset class="vc_col-sm-6 wpb_column vc_column_container">
				<p><?php _e("You comment will be published within 24 hours.", 'carservice'); ?></p>
			</fieldset>
			<fieldset class="vc_col-sm-6 wpb_column vc_column_container align-right">
				<div class="vc_row wpb_row vc_inner margin-top-20 padding-bottom-20">
					<a href="#cancel" id="cancel-comment" title="<?php echo esc_html_e('Cancel reply', 'carservice'); ?>"><?php echo __('Cancel reply', 'carservice'); ?></a>
					<a class="more submit-comment-form" href="#" title="<?php echo esc_html_e('POST COMMENT', 'carservice'); ?>"><span><?php echo __('POST COMMENT', 'carservice'); ?></span></a>
				</div>
				<input type="hidden" name="action" value="theme_comment_form">
				<input type="hidden" name="comment_parent_id" value="0">
				<input type="hidden" name="paged" value="1">
				<input type="hidden" name="prevent_scroll" value="0">
			</fieldset>
		</div>
	<?php
	}
	global $post;
	?>
		<fieldset>
			<input type="hidden" name="post_id" value="<?php echo esc_attr(get_the_ID()); ?>">
			<input type="hidden" name="post_type" value="<?php echo esc_attr($post->post_type); ?>">
		</fieldset>
	</form>
</div>
<?php
}
?>