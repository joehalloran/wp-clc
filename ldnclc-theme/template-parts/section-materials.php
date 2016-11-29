<?php 

$materials = get_post_meta( $post->ID , 'ldnclc-materials');

if ( $materials && !($materials[0] === NULL) ) {  
    echo '<div class="spacer20"></div>';
    echo '<div class="clc-box">';
    echo '<h3>Resources</h3>';
    echo '<hr class="tech-support-hr">';
    echo '<div class="materials-list">';
    // If statement removed to make resources open to all
    // if ( is_user_logged_in() ) {
    foreach ($materials as $materialItem) {
        foreach ($materialItem['title'] as $key => $value) {
            
            //if either item empty, skip line
            if ( (FALSE == $value || FALSE == $materialItem['media'][$key]) ){
                continue;
            }  

            echo '<p class="materials-text"><a target="_blank" href="'.esc_url($materialItem['media'][$key]).'"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> '.esc_html($value).'</a></p>';

        }
    }
    // } else {
    //     echo '<p>Please <a href="'. wp_login_url() .'" title="Login">login</a> or <a href="'. wp_registration_url() .'">register</a> to view this content.</p>';

    // }
    echo '</div>';
    echo '</div>';
}
?>