<?php
/**
 * puzzle-agency functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package puzzle-agency
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'puzzle_agency_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function puzzle_agency_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on puzzle-agency, use a find and replace
		 * to change 'puzzle-agency' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'puzzle-agency', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'puzzle-agency' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'puzzle_agency_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'puzzle_agency_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function puzzle_agency_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'puzzle_agency_content_width', 640 );
}
add_action( 'after_setup_theme', 'puzzle_agency_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function puzzle_agency_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'puzzle-agency' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'puzzle-agency' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'puzzle_agency_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function puzzle_agency_scripts() {
	wp_enqueue_style( 'puzzle-agency-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'puzzle-agency-style', 'rtl', 'replace' );

	wp_enqueue_script( 'puzzle-agency-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'puzzle_agency_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



/* header start*/

register_nav_menus( array(
    'main-menu' => 'Основное меню',
));

class Main_Nav_Menu extends Walker_Nav_Menu {
	public function start_lvl( &$output, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = str_repeat( $t, $depth );

		// Default class.
		if ($depth == 0) {
			$classes = array( 'sub-menu second-level-main-menu' );
		}elseif ($depth == 1) {
			$classes = array( 'sub-menu third-level-main-menu' );
		}else {
			$classes = array( 'sub-menu' );
		}

		/**
		 * Filters the CSS class(es) applied to a menu list element.
		 *
		 * @since 4.8.0
		 *
		 * @param string[] $classes Array of the CSS classes that are applied to the menu `<ul>` element.
		 * @param stdClass $args    An object of `wp_nav_menu()` arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
		/* if ($depth == 0) {
			$output .= "{$n}{$indent}<ul$class_names><div class='second-level-list-container'><div class='slide-wrapper'>{$n}";
		}elseif ($depth >= 1) {
			$output .= "{$n}{$indent}<ul$class_names><div>{$n}";
		}else {
			$output .= "{$n}{$indent}<ul$class_names>{$n}";
		} */
		if ($depth == 0) {
			$output .= "{$n}{$indent}<ul$class_names><div class='custom-second-level-arrow'></div>{$n}";
		}elseif ($depth == 1) {
			$output .= "{$n}{$indent}<ul$class_names><div class='custom-third-level-arrow'></div>{$n}";
		}else {
			$output .= "{$n}{$indent}<ul$class_names>{$n}";
		}
		
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		if ($depth == 0) {
			$classes[] = 'menu-item-' . $item->ID . ' first-level-main-items';
		}else if ($depth == 1) {
			$classes[] = 'menu-item-' . $item->ID . ' second-level-main-items';
		}elseif ($depth == 2) {
			$classes[] = 'menu-item-' . $item->ID . ' third-level-main-items';
		}else {
			$classes[] = 'menu-item-' . $item->ID;
		}

		/**
		 * Filters the arguments for a single nav menu item.
		 *
		 * @since 4.4.0
		 *
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param WP_Post  $item  Menu item data object.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

		/**
		 * Filters the CSS classes applied to a menu item's list item element.
		 *
		 * @since 3.0.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param string[] $classes Array of the CSS classes that are applied to the menu item's `<li>` element.
		 * @param WP_Post  $item    The current menu item.
		 * @param stdClass $args    An object of wp_nav_menu() arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		/**
		 * Filters the ID applied to a menu item's list item element.
		 *
		 * @since 3.0.1
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
		 * @param WP_Post  $item    The current menu item.
		 * @param stdClass $args    An object of wp_nav_menu() arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names . '>';

		$atts           = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
		if ( '_blank' === $item->target && empty( $item->xfn ) ) {
			$atts['rel'] = 'noopener noreferrer';
		} else {
			$atts['rel'] = $item->xfn;
		}
		$atts['href']         = ! empty( $item->url ) ? $item->url : '';
		$atts['aria-current'] = $item->current ? 'page' : '';

		/**
		 * Filters the HTML attributes applied to a menu item's anchor element.
		 *
		 * @since 3.6.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array $atts {
		 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
		 *
		 *     @type string $title        Title attribute.
		 *     @type string $target       Target attribute.
		 *     @type string $rel          The rel attribute.
		 *     @type string $href         The href attribute.
		 *     @type string $aria_current The aria-current attribute.
		 * }
		 * @param WP_Post  $item  The current menu item.
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		/** This filter is documented in wp-includes/post-template.php */
		$title = apply_filters( 'the_title', $item->title, $item->ID );

		/**
		 * Filters a menu item's title.
		 *
		 * @since 4.4.0
		 *
		 * @param string   $title The menu item's title.
		 * @param WP_Post  $item  The current menu item.
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

		$item_output  = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		/**
		 * Filters a menu item's starting output.
		 *
		 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
		 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
		 * no filter for modifying the opening and closing `<li>` for a menu item.
		 *
		 * @since 3.0.0
		 *
		 * @param string   $item_output The menu item's starting HTML output.
		 * @param WP_Post  $item        Menu item data object.
		 * @param int      $depth       Depth of menu item. Used for padding.
		 * @param stdClass $args        An object of wp_nav_menu() arguments.
		 */
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

/* header end*/






// стили и скрипты  на все страницы
function theme_name_scripts() {	
	
	wp_enqueue_style( 'style-main-style', get_template_directory_uri() .'/assets/dist/main.css' );
	wp_enqueue_style( 'style-main-font', get_template_directory_uri() .'/assets/fonts/font.css' );
	wp_enqueue_script( 'script-jquery', 'https://code.jquery.com/jquery-3.5.1.min.js');
	wp_enqueue_script( 'script-slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js');
	wp_enqueue_script( 'script-jquery', 'https://code.jquery.com/jquery-3.5.1.min.js');
	wp_enqueue_script( 'script-main', get_template_directory_uri() . '/assets/js/main.js');
	wp_enqueue_script( 'script-mainNavMenu', get_template_directory_uri() . '/assets/js/custom-js/mainNavMenu.js');
	wp_enqueue_script( 'script-bootstrap', get_template_directory_uri() . '/assets/dist/bootstrap.min.js');	
}
function my_deregister_style () {
	if ( is_page ('6') ) {//стили на главной(8)		
		wp_enqueue_script( 'script-map-script', get_template_directory_uri() . '/assets/js/map-script.js');
		wp_enqueue_style( 'style-slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.css' );
		wp_enqueue_style( 'style-slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.css' );
	}elseif ( is_page ('55') ){//id страницы
	
		

	}else{//остальные
		wp_enqueue_script( 'script-isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js');
		wp_enqueue_script( 'script-start-iso', get_template_directory_uri() . '/assets/js/start-isotope.js');
		wp_enqueue_script( 'script-parallax', get_template_directory_uri() . '/assets/js/parallax.js');
	}

	
}
add_action ( 'wp_print_styles', 'my_deregister_style', 100 );
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );















//preload на стиль
add_action( 'wp_head', 'se343581_add_preload_tag', 5);
function se343581_add_preload_tag()
{
    echo '<link rel="preload" href="'. 
	get_template_directory_uri().('/assets/fonts/font.css') .
         '" as="style">';
}




add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Основные настройки темы'),
            'menu_title'    => __('Настройки темы'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}


//ТАКСОНОМИЯ ПроектЫ

function project_init() {
	$args = array(
	'label' => 'Проекты',
	'labels'                => array(
		'name'    => 'Проекты',
		'add_new' => 'Добавить Проект',
		'edit_item'          => 'Редактировать проект',
	),
	
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array('slug' => 'project'),
	'query_var' => true,
	'menu_icon' => 'dashicons-portfolio',
	'supports' => array(
	'title',
	'editor',
	'thumbnail',
	'page-attributes',)
	);
	register_post_type( 'project', $args );
	flush_rewrite_rules();
	}
	add_action( 'init', 'project_init' );
	register_taxonomy("projects", array("project"), array("hierarchical" => true, "label" => "Категории", "singular_label" => "project item", "rewrite" => true));
	function true_custom_fields2() {
		add_post_type_support( 'project', 'custom-fields'); // в качестве первого параметра укажите название типа поста
	}
	 
add_action('init', 'true_custom_fields2');
add_action( 'admin_init', 'add_project_tax' );

function add_project_tax() 
{
    add_post_type_support( 'project', 'page-attributes' );
}

