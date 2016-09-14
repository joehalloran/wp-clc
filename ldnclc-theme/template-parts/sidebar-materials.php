<?php 

$materials = get_post_meta( $post->ID , 'ldnclc-materials');

if ( $materials && !($materials[0] === NULL) ) {  
    echo '<div class="spacer20"></div>';
    echo '<div class="clc-box">';
    echo '<h3>Resources</h3>';
    echo '<hr class="tech-support-hr">';
    echo '<div class="materials-list">';
    foreach ($materials as $materialItem) {
        foreach ($materialItem['title'] as $key => $value) {
            
            //if either item empty, skip line
            if ( (FALSE == $value || FALSE == $materialItem['media'][$key]) ){
                continue;
            }  

            echo '<p class="materials-text"><a target="_blank" href="'.$materialItem['media'][$key].'"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> '.$value.'</a></p>';

        }
    }
    echo '</div>';
    echo '</div>';
}
?>