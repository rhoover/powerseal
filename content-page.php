<?php
/**
 * The template used for displaying page content called from page.php
 *
 * @package psv2
 */
?>

<?php
    if ( is_front_page() ) {
        get_template_part('frontpage');
    } else {
        the_content();
    }
?>


<footer class="content-footer">
    <?php edit_post_link( __( 'Edit', 'psv2' ), '<span class="edit-link">', '</span>' ); ?>
</footer><!-- end .content-footer -->
