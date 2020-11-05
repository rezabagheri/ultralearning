<?php
/**
 * 
 * @package Paradise
 */
namespace Paradise\Setup\PostTypes;

class Course
{
    public $fields = [
        [
            "name" => "Level",
            "type" => "number",
            "default" => 0,
        ],
        [
            "name" => 'professor',
            "label" => 'Professor',
            "type" => 'input',
            "placeholder" => '!!!!'
        ],

    ];
    public function register()
    {
        add_action( 'init', [$this, 'registerPostType'], 0 );
        add_action( 'init', [$this, 'registerTaxonomy'], 0 );
        add_action( 'add_meta_boxes', [ $this, 'addMetabox'  ]);
        add_action( 'save_post',      [ $this, 'saveMetabox' ], 10, 2 );
        
    }

    public function registerPostType()
    {
        $labels = array(
            'name'                  => _x( 'Courses', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Course', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Courses', 'text_domain' ),
            'name_admin_bar'        => __( 'Course', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Courses', 'text_domain' ),
            'add_new_item'          => __( 'Add New Course', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Course', 'text_domain' ),
            'description'           => __( 'Post Type Description', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-welcome-learn-more',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'course', $args );
    }

    public function registerTaxonomy()
    {
        $labels = array(
            'name'                       => _x( 'Course Taxonomies', 'Taxonomy General Name', 'text_domain' ),
            'singular_name'              => _x( 'Course Taxonomy', 'Taxonomy Singular Name', 'text_domain' ),
            'menu_name'                  => __( 'Course Taxonomy', 'text_domain' ),
            'all_items'                  => __( 'All Items', 'text_domain' ),
            'parent_item'                => __( 'Parent Item', 'text_domain' ),
            'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
            'new_item_name'              => __( 'New Item Name', 'text_domain' ),
            'add_new_item'               => __( 'Add New Item', 'text_domain' ),
            'edit_item'                  => __( 'Edit Item', 'text_domain' ),
            'update_item'                => __( 'Update Item', 'text_domain' ),
            'view_item'                  => __( 'View Item', 'text_domain' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
            'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
            'popular_items'              => __( 'Popular Items', 'text_domain' ),
            'search_items'               => __( 'Search Items', 'text_domain' ),
            'not_found'                  => __( 'Not Found', 'text_domain' ),
            'no_terms'                   => __( 'No items', 'text_domain' ),
            'items_list'                 => __( 'Items list', 'text_domain' ),
            'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
        );
        register_taxonomy( 'course_taxonomies', array( 'course' ), $args );
    }

    public function addMetabox()
    {
        add_meta_box('course-details', 'Course Detailes', [$this, 'render_metabox'], 'course', 'side', 'high');
    }

    public function render_metabox( $post ) {
        wp_nonce_field( 'course_metabox', 'guest_nonce' );
      
        $name_value = get_post_meta( $post->ID, '_guest_name', true );
        $link_value = get_post_meta( $post->ID, '_guest_link', true );
        
        echo '<label for="guest-name">'. 'Guest Blogger Name' .'</label>';
        echo '<input type="text" id="guest-name" name="guest_name" placeholder="Example" value="'.$name_value.'" size="25"/>';
        echo '<p class="howto">'. 'Add the name of the Guest' .'</p>';
        
        echo '<label for="guest-link">'. 'Guest website Link' .'</label>';
        echo '<input type="text" id="guest-link" name="guest_link" placeholder="http://www.example.com/" value="'.$link_value.'" size="25"/>';
        echo '<p class="howto">'. 'Add the link of the website' .'</p>';

        foreach( $this->fields as $field) {
            switch($field['type']) {
                case 'input':
                    $this->renderInputText( $post,$field );
                break;
                case 'Number':
                break;
            }
        }
     
    }

    public function renderInputText( $post, $field )
    {
        $value = get_post_meta( $post->ID, '_'.$field['name'], true );
        printf("<label for='%s'>%s</label>", $field['name'], $field['label'] );
        printf( "<input type='text' id='%s' name='%s' placeholder='%s' value='%s' /> ", $field['name'], $field['name'], $field['placeholder'], $value );
    }

    public function saveMetabox( $post_id, $post )
    {
        // Add nonce for security and authentication.
        $nonce_name   = isset( $_POST['custom_nonce'] ) ? $_POST['custom_nonce'] : '';
        $nonce_action = 'custom_nonce_action';
 
        // Check if nonce is valid.
        if ( ! wp_verify_nonce( $nonce_name, $nonce_action ) ) {
            return;
        }
 
        // Check if user has permissions to save data.
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
 
        // Check if not an autosave.
        if ( wp_is_post_autosave( $post_id ) ) {
            return;
        }
 
        // Check if not a revision.
        if ( wp_is_post_revision( $post_id ) ) {
            return;
        }
    }
}