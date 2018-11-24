<?php 

add_theme_support( 'post-thumbnails' ); 

function widgets_novos_widgets_init() {

	register_sidebar( array(
		'name' => 'Lateral',
		'id' => 'rodape_widgets',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'widgets_novos_widgets_init' );

/*function excerpt($limit) {
	$excerpt = explode(' ', get_the_content(), $limit);
	if (count($excerpt)>=$limit) {
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt).'...';
	} else {
	$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt.'<a style="float: right; width: 100%; text-decoration: underline; font-weight: bolder; text-align: right; color: #000;" class="read-more" href="'. get_permalink( get_the_ID() ) . '">[Leia mais]</a>';
}*/

// We'll be using post thumbnails for custom header images on posts and pages.
	// We want them to be the size of the header image that we just defined
	// Larger images will be auto-cropped to fit, smaller ones will be ignored. See header.php.
	set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true );

	// Add Twenty Eleven's custom image sizes
	add_image_size( 'large-feature', HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true ); // Used for large feature (header) images
	add_image_size( 'small-feature', 500, 300 ); // Used for featured posts if a large-feature doesn't exist
	add_image_size( 'small-capa', 280, 230, true ); 

	add_image_size( 'small', 70, 70, true ); 


function max_excerpt($limit) {
	
	$content = apply_filters('the_content', get_the_content());
	$content = str_replace(']]>', ']]&gt;', $content);
	$excerpt = explode(' ',$content, $limit);
	if (count($excerpt)>=$limit) {
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt).'...';
	} else {
	$excerpt = implode(" ",$excerpt);
	}	
	
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
}


function new_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


function new_excerpt_length($length) {
    return 80;
}
add_filter('excerpt_length', 'new_excerpt_length');

/** Pagination */
function pagination_funtion() {
// Get total number of pages
global $wp_query;
$total = $wp_query->max_num_pages;
// Only paginate if we have more than one page                   
if ( $total > 1 )  {
    // Get the current page
    if ( !$current_page = get_query_var('paged') )
        $current_page = 1;
                           
        $big = 999999999;
        // Structure of "format" depends on whether we're using pretty permalinks
        $permalink_structure = get_option('permalink_structure');
        $format = empty( $permalink_structure ) ? '&page=%#%' : 'page/%#%/';
        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
            'format' => $format,
            'current' => $current_page,
            'total' => $total,
            'mid_size' => 2,
            'type' => 'list'
        ));
    }
}
/** END Pagination */
function insert_image_src_rel_in_head() {
global $post;
if ( !is_singular()) //verificar se é um post
return;
if(!has_post_thumbnail( $post->ID )) { //verifica se existe imagem desta
$default_image="http://www.obrastec.com.br/web/wp-content/themes/2016/img/logo-face.jpg"; //coloque a url da imagem padrao
echo '';
}
else{
$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
echo '';
}
echo "
";
}
add_action( 'wp_head', 'insert_image_src_rel_in_head', 5 );

?>