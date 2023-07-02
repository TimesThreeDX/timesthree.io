<?php
	// Clean up the <head>
    remove_action('wp_head', 'rsd_link'); // Removes the Really Simple Discovery link
    remove_action('wp_head', 'wlwmanifest_link'); // Removes the Windows Live Writer link
    remove_action('wp_head', 'wp_generator'); // Removes the WordPress version
    remove_action('wp_head', 'feed_links', 2); // Removes the RSS feeds remember to add post feed maunally (if required) to header.php
    remove_action('wp_head', 'feed_links_extra', 3); // Removes all other RSS links
    remove_action('wp_head', 'index_rel_link'); // Removes the index page link
    remove_action('wp_head', 'start_post_rel_link', 10, 0); // Removes the random post link
    remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Removes the parent post link
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Removes the next and previous post links
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );

    // custom login page
    
    function my_login_logo() { ?>
        <style type="text/css">
            body.login div#login h1 a {
                background-image:url('<?php bloginfo("template_url"); ?>/img/wp-login.png');
                padding-bottom:30px;
            }
            
            body.login {
                background-color:#ffffff;   
            }
        </style>
    <?php } add_action( 'login_enqueue_scripts', 'my_login_logo' );
    
    function my_login_logo_url() {
        return get_bloginfo( 'url' );
    }
    
    add_filter( 'login_headerurl', 'my_login_logo_url' );
    
    function my_login_logo_url_title() {
        return get_bloginfo( 'title' );
    }
    
    add_filter( 'login_headertitle', 'my_login_logo_url_title' );

    // switch on ACF options
    if( function_exists('acf_add_options_page') ) {
    
        acf_add_options_page();
    
    }

    // LOAD JQUERY
    add_action( 'wp_enqueue_scripts', 'register_jquery' );
    function register_jquery() {
        if (!is_admin() && $GLOBALS['pagenow'] != 'wp-login.php') {
            // comment out the next two lines to load the local copy of jQuery
            wp_deregister_script('jquery');
            wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1');
            wp_enqueue_script('jquery');
        }
    }

    // REMOVE WP EMOJI
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');

    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );

    // REMOVE DEFAULT EMBEDS
    function custom_disable_embeds_init() {

        // Remove the REST API endpoint.
        remove_action('rest_api_init', 'wp_oembed_register_route');

        // Turn off oEmbed auto discovery.
        // Don't filter oEmbed results.
        remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

        // Remove oEmbed discovery links.
        remove_action('wp_head', 'wp_oembed_add_discovery_links');

        // Remove oEmbed-specific JavaScript from the front-end and back-end.
        remove_action('wp_head', 'wp_oembed_add_host_js');
    }

    add_action('init', 'custom_disable_embeds_init', 9999);

    //  SWITCH OFF IMAGES AS LINKS BY DEFAULT

    function custom_imagelink_setup() {
        $image_set = get_option( 'image_default_link_type' );
        
        if ($image_set !== 'none') {
            update_option('image_default_link_type', 'none');
        }
    }

    add_action('admin_init', 'custom_imagelink_setup', 10);

    // HTML5
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    // IS TREE
    function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
        global $post;         // load details about this page
        if(is_page()&&($post->post_parent==$pid||is_page($pid))) 
                   return true;   // we're at the page or at a sub page
        else 
                   return false;  // we're elsewhere
    };

    // hide admin bar front end
    add_filter('show_admin_bar', '__return_false');
    // featured images
    add_theme_support( 'post-thumbnails' );

    // custom css in back-end
    // add_action('admin_head', 'custom_admin_css');

    function custom_admin_css() {
        echo '<style>#cpt_info_box { display:none; }</style>';
    }

    // GET ACF IMAGE
    //      USAGE:
    //      $image = get_field('slide_1');
    //      $size = 'medium';
    //      $url_only = false; // use true for BG images etc
    //      $this_image = get_acf_image($image,$size,$url_only);

    function get_acf_image($image,$image_size,$url_only) {

        if( !empty($image) ) {

            // vars
            $url = $image['url'];
            $title = $image['title'];
            $alt = $image['alt'];
            $caption = $image['caption'];

            // thumbnail
            $size = $image_size;
            $thumb = $image['sizes'][ $size ];
            $width = $image['sizes'][ $size . '-width' ];
            $height = $image['sizes'][ $size . '-height' ];

            if($width > $height) {
                $orientation = 'landscape';
            } else {
                $orientation = 'portrait';
            }

            if($url_only) {
                return $thumb;
            } else {
                return '<img src="'.$thumb.'" alt="'.$alt.'" width="'.$width.'" height="'.$height.'" class="'.$orientation.'" />';
            }

            // return array ($thumb,$width,$height,$orientation,$alt,$url);

        }

    }

    // STRIP OUT HTTP:// AND TRAILING SLASHES ETC FROM DOMAIN (FOR DISPLAY)
    //
    // usage: $url = get_field('url');
    // $formatted_url = formatURL($url);
    // echo $formatted_url
    function formatURL($input) {
        $input = trim($input, '/');
        if (!preg_match('#^http(s)?://#', $input)) {
            $input = 'http://' . $input;
        }
        $urlParts = parse_url($input);
        $domain = preg_replace('/^www\./', '', $urlParts['host']);
        return $domain;
    }

    /* woocommerce stuff */

    // declare woocommerce support (without this your theme won't work with WC)
    function mytheme_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

    /**
 * Set WooCommerce image dimensions upon theme activation
 */
// Remove each style one by one
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
    // unset( $enqueue_styles['woocommerce-general'] );    // Remove the gloss
    // unset( $enqueue_styles['woocommerce-layout'] );     // Remove the layout
    // unset( $enqueue_styles['woocommerce-smallscreen'] );    // Remove the smallscreen optimisation
    return $enqueue_styles;
}

    // remove sidebar on product page
    add_action( 'wp', 'bbloomer_remove_sidebar_product_pages' );
    function bbloomer_remove_sidebar_product_pages() {
        remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
    }


    function check_active_menu( $menu_item ) {
        $actual_link = ( isset( $_SERVER['HTTPS'] ) ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if ( $actual_link == $menu_item->url ) {
            return 'active';
        }
        return '';
    }

    function get_menu($type){

        $menu_name = $type;
    
        $menu_items = wp_get_nav_menu_items( $menu_name );
        
        foreach ( (array) $menu_items as $key => $menu_item ) {
    
            if(!$menu_item->menu_item_parent){ //checking the item are parent?
            
                $title = $menu_item->title;
                $url = $menu_item->url;
    
                echo '<li><a  class="' . check_active_menu($menu_item) . '" href="'.$url.'">'.$title.'</a></li>';
            
            }
        }
    }


    function get_homepage_sections(){

        $args = array(
            'post_type' => 'homepage',
            'posts_per_page' => -1,
            'orderby' => 'date'
            
        );

        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) :
            
            while ( $loop->have_posts() ) : $loop->the_post();

            echo "<section class='panel'>".get_the_content() ."</section>";
            
            endwhile;
        endif;

        wp_reset_postdata();

    }


    function get_homepage_menu(){

        $args = array(
            'post_type' => 'homepage',
            'posts_per_page' => -1,
            'orderby' => 'date'
            
        );

        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) :

            $num = 0;
            
            while ( $loop->have_posts() ) : $loop->the_post();

            ?>

                <button onclick="updateContent(<?php echo $num; ?>);"><?php echo $num+1; ?></button>

            <?php

            $num ++;
            
            endwhile;
        endif;

        wp_reset_postdata();

        ?>

        <button onclick="updateContent(-1)">Contact</button>

        <?php

    }

    function get_service_items() {

        $url = get_template_directory_uri();

        $args = array(
            'post_type' => 'service_items',
            'posts_per_page' => -1,
            's' => $id
          
        );
    
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) :

            echo "<div class='service-item-holder'>";
            
            while ( $loop->have_posts() ) : $loop->the_post();
    
                echo "<div class='service-item'>";

                echo "<h3>".get_the_title()."</h3>";

                echo "<div class='service-item-inner'>";
                
                        echo "<div class='service-item-image'>";
                        echo get_the_post_thumbnail(null, 'thumbnail');
                        echo "</div>"; 

                    echo "<h3>".the_content()."</h3>";

                echo "</div>";

                echo "</div>";
            
            endwhile;

            echo "</div>";

        endif;
    
        wp_reset_postdata();

    }

    

?>