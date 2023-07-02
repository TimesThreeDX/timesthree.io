<?php /* Template name: Redirect to child */

$thisPage = $post->ID;

$args = array(
    'post_type'   => 'page',
    'post_parent' => $thisPage,
    'order' => 'ASC',
    'posts_per_page' => 1,
    'orderby' => 'menu_order'
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {

    while ( $the_query->have_posts() ) {

        $the_query->the_post();

        $location = get_the_permalink();

        wp_redirect( $location, 301 );

        exit;
    }

} ?>