<?php



function create_advanced_page_movies() {

 
	// Define the labels used inside the WordPress admin for this custom post type (CPT)
		$labels = array(
			'name'                => _x( 'Movies', 'Post Type General Name', 'q-agent' ),
			'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'q-agent' ),
			'add_new'             => __( 'Add New', 'q-agent' ),
			'add_new_item'        => __( 'Add New Movie', 'q-agent' ),
			'edit_item'           => __( 'Edit Movie', 'q-agent' ),
			'new_item'            => __( 'New Movie' ),
			'all_items'           => __( 'All Movie', 'q-agent' ),
			'view_item'           => __( 'View Movie', 'q-agent' ),
			'search_items'        => __( 'Search Movie', 'q-agent' ),
			'menu_name'           => __( 'Movie', 'q-agent' ),
			'parent_item_colon'   => __( 'Parent Movie', 'q-agent' ),
			'update_item'         => __( 'Update Movie', 'q-agent' ),
			'not_found'           => __( 'Not Found', 'q-agent' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'q-agent' )
		);
		 
	// Define more options for the CPT
		 
		$args = array(
				'hierarchical' => false,     
				'labels' => $labels,
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true, 
				'show_in_menu' => true, 
				'query_var' => true,
				'rewrite' => true,
				'capability_type' => 'post',
				'has_archive' => 'archive-movie', 
				'menu_position' => 7,
				'show_in_rest'  => true,
   			    'rest_base'     => 'movies',
                'rest_controller_class' => 'WP_REST_Posts_Controller',
				'menu_icon' => 'dashicons-portfolio',
                'taxonomies' => array('category', 'post_tag'),
				'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'author', 'thumbnail', 'revisions', 'post-attributes', 'custom-fields' )
			); 
	
		 
		// Register this CPT
		register_post_type( 'movies', $args );
	 
	}
	
	add_action( 'init', 'create_advanced_page_movies', 0 );

	function api_movies( $route, $post ) {
		if ( $post->post_type === 'movies' ) {
			$route = '/wp/v2/movies/' . $post->ID;
		}
	
		return $route;
	}
	add_filter( 'rest_route_for_post', 'api_movies', 10, 2 );
?>

