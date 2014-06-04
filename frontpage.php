<?php
/**
 * The template used for displaying Front Page content as called from content-page.php
 *
 * @package psv2
 */
?>

<?php the_content(); ?>
<?php
    wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'psv2' ),
        'after'  => '</div>',
    ) );
?>

<?php edit_post_link( __( 'Edit', 'vbaV2' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
