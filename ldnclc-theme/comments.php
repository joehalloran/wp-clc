<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ldnclc_theme
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'ldnclc' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'ldnclc' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'ldnclc_theme' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'ldnclc' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ul class="list-unstyled">
    <?php
        // Register Custom Comment Walker
        require_once('inc/class-wp-bootstrap-comment-walker.php');

        wp_list_comments( array(
            'style'         => 'ul',
            'short_ping'    => true,
            'avatar_size'   => '64',
            'walker'        => new Bootstrap_Comment_Walker(),
        ) );
    ?>
</ul><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'ldnclc' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'ldnclc_theme' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'ldnclc' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'ldnclc' ); ?></p>
	<?php
	endif;

	$defaults = array(
			'fields'		=> apply_filters( 'comment_form_default_fields', $fields ),
			'comment_field' => '<div class="form-group"><label for="comment">Comment:</label><textarea class="form-control" id="comment" name="comment" rows="8" placeholder="' . __( 'Your comment','ldnclc' ) . ' *" aria-required="true"></textarea></p></div> <!-- /.form-group -->',
			'must_log_in' 	=> '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%1$s">logged in</a> to post a comment.','ldnclc' ), wp_login_url( get_permalink() ) ) . '</p>',
			'logged_in_as'	=> '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>','ldnclc' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( get_permalink() ) ) . '</p>',
			'comment_notes_before' => null,
			'comment_notes_after'  => null,
			'class_submit'		   => 'btn btn-primary',
			'id_form'              => 'commentform',
			'id_submit'            => 'submit',
			'title_reply'          => __( 'Leave a comment','ldnclc' ),
			'title_reply_to'       => __( 'Leave a Reply to %s','ldnclc' ),
			'cancel_reply_link'    => __( 'Cancel reply','ldnclc' ),
			'label_submit'         => __( 'Post Comment','ldnclc' ),
		);

	comment_form($defaults);
	?>

</div><!-- #comments -->
