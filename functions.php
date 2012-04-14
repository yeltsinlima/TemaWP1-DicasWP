<?

function register_my_menus() {
  register_nav_menus(
    array( 'menu' => __( 'Menu' ) )
  );
}
add_action( 'init', 'register_my_menus' );

register_sidebar(array(
  'name' => __( 'Sidebar' ),
  'id' => 'sidebar',
  'before_title' => '<h3>',
  'after_title' => '</h3>',
  'before_widget' => '<div class="twelve columns">',
  'after_widget' => '</div>'
));

?>