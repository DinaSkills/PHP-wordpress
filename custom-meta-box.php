<?php

abstract class WP_Meta_Box {


public static function add() {
    $screens = [ 'movies', 'wporg_cpt' ];
    foreach ( $screens as $screen ) {
        add_meta_box(
            'movie_box_id',         
            'Movie Title', 
            [ self::class, 'html' ], 
            $screen                  
        );
    }
}


/**
 * Save the meta box selections.
 *
 * @param int $post_id  The post ID.
 */
public static function save( int $post_id ) {
    if ( array_key_exists( 'movie_field', $_POST ) ) {
        update_post_meta(
            $post_id,
            'movie_title',
            $_POST['movie_field']
        );
    }
}


/**
 * Display the meta box HTML to the user.
 *
 * @param WP_Post $post   Post object.
 */
public static function html( $post ) {
    $value = get_post_meta( $post->ID, 'movie_title', true );
    ?>
    <label for="movie_field">Fun fact:</label>
    <input name="movie_field" type='text' value="<?php echo $value?>" placeholder='<?php echo $value?>' id="movie_field" class="postbox">
   
    <?php
}
}

add_action( 'add_meta_boxes', [ 'WP_Meta_Box', 'add' ] );
add_action( 'save_post', [ 'WP_Meta_Box', 'save' ] );

?>