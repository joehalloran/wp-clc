<?php

/**
 * Provide a admin area view for metabox outcomes (used for both Workshop and Teacher CPD content types)
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Ldnclc_Plugin
 * @subpackage Ldnclc_Plugin/admin/partials
 */
?>
<div id="meta-box-outcomes">
	<h4>Item 1:</h4>
	<textarea rows="3" name="ldnclc-outcomes[0]" id="ldnclc-outcomes-0"><?php echo $outcomes[0]; ?></textarea>

	<h4>Item 2:</h4>
	<textarea rows="3" name="ldnclc-outcomes[1]" id="ldnclc-outcomes-1"><?php echo $outcomes[1]; ?></textarea>

	<h4>Item 3:</h4>
	<textarea rows="3" name="ldnclc-outcomes[2]" id="ldnclc-outcomes-2"><?php echo $outcomes[2]; ?></textarea>
</div>