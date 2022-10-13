<div class="date">
	<?php if(!brick_qode_post_has_title()) { ?>
		<a href="<?php the_permalink() ?>">
	<?php } ?>

	<span class="date_text"><?php esc_html_e('Posted on','brick'); ?></span>
	<?php the_time(get_option('date_format')); ?>

	<?php if(!brick_qode_post_has_title()) { ?>
		</a>
	<?php } ?>
</div>