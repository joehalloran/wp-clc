<?php
$outcomes = get_post_meta( $post->ID , 'ldnclc-outcomes', true);
?>

<div class="spacer20"></div>
<div class="clc-box">
    <h3>Things you can do next...</h3>
    <hr class="tech-support-hr">
	<span class="clc-green" style="font-size:20px;"><strong>... </strong></span> 
	<?php echo wp_kses_post($outcomes[0]) ;?>
	<span class="clc-dark-orange" style="font-size:20px;"><strong>... </strong></span> 
	<?php echo wp_kses_post($outcomes[1]) ;?>
    <span class="clc-dark-blue" style="font-size:20px;"><strong>... </strong></span> 
	<?php echo wp_kses_post($outcomes[2]) ;?>
    </p>                        
</div>