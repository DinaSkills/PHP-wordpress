<?php 

function q_rest_movie_endpoint()
{   $movies = new WP_Query(array('post_type'=> 'movies'));
    return new WP_REST_Response($movies);
}

function q_rest_init()
{
 
    $namespace = 'custom/v1';
    $route     = 'movies';

    register_rest_route($namespace, $route, array(
        'methods'   => WP_REST_Server::READABLE,
        'callback'  => 'q_rest_movie_endpoint',
        'permission_callback' => '__return_true',
    ));
}

add_action('rest_api_init', 'q_rest_init');

?>