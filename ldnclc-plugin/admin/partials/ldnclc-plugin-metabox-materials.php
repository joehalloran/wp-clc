<?php

/**
 * Provide a admin area view for metabox materials (used for both Workshop and Teacher CPD content types)
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

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div id="ldnclc-materials"> 
	<h3>Materials</h3>

	<span class="help-text"><span id="link-text-help">Link text</span><span id="link-help">Download Link </span></span>
	<?php
	
	if ( $materials && !($materials[0] === NULL) ) {  
        foreach ($materials as $materialItem) {
            foreach ($materialItem['title'] as $key => $value) {
				
				//if line is empty skip
				if ( (FALSE == $value && FALSE == $materialItem['media'][$key]) ){
					continue;
				}  

				?>   
                <p class="ldnclc-material-item">
				    <input type="text" name="ldnclc-materials[title][]" class="material-title" <?php echo ($value) ? 'value="'.$value.'"' : 'placeholder="Display text"';  ?>" />
				    <input type="text" name="ldnclc-materials[media][]" class="material-link" <?php echo ($materialItem['media'][$key]) ? 'value="' . $materialItem['media'][$key] . '"' : 'placeholder="Link"';  ?> />
				    <button class="meta-image-button button"><?php _e( 'Choose or Upload a File', 'ldnclc-plugin' );?></button>
				    <button class="material-delete-button button"><span class="dashicons dashicons-no"></span></button>
				    
				</p> 
				<?php
            }
        }
    } else {
    ?>
		<p class="ldnclc-material-item">
		    <input type="text" name="ldnclc-materials[title][]" class="material-title" placeholder="Item Label" />
		    <input type="text" name="ldnclc-materials[media][]" class="material-link" value="" placeholder="Display text"/>
		    <button class="meta-image-button button"><?php _e( 'Choose or Upload a File', 'ldnclc-plugin' );?></button>
	    	<button class="material-delete-button button"><span class="dashicons dashicons-no"></span></button>
		</p> 
	<?php 
	}
	?>
	<input type="button" id="material-item-more" class="button" value="<?php _e( 'More', 'ldnclc-plugin' );?>" />
</div>