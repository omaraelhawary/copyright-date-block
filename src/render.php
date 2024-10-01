<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

	if(! empty($attributes['showStratingYear']) && ! empty($attributes['date'])) {
		$displayDate = $attributes['date'] . ' - ' . date("Y");
	} else {
		$displayDate = date("Y");
	}
?>
<p <?php echo get_block_wrapper_attributes(); ?>>
	&copy; <?php echo esc_html($displayDate); ?>
</p>
