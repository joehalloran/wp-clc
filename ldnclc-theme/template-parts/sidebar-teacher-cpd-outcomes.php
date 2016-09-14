<?php
$outcomes = get_post_meta( $post->ID , 'ldnclc-outcomes', true);
?>

<div class="spacer20"></div>
<div class="clc-box">
    <h3>Having attended this course teachers will...</h3>
    <hr class="tech-support-hr">
    <p class="course-attend-text">
    	<span class="clc-green" style="font-size:20px;"><strong>... </strong></span> 
    	<?php echo $outcomes[0] ;?>
    </p>
    <p class="course-attend-text">
    	<span class="clc-dark-orange" style="font-size:20px;"><strong>... </strong></span> 
    	<?php echo $outcomes[1] ;?>
    </p>
    <p class="course-attend-text">
    <span class="clc-dark-blue" style="font-size:20px;"><strong>... </strong></span> 
    	<?php echo $outcomes[2] ;?>
    </p>                        
</div>