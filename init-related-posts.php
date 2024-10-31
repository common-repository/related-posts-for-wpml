<?php

/**
 * Initialization of init related posts for WPML class
 */
class init_related_posts {
    
     protected $plugin_name = 'Related Posts for WPML';
     protected $img_class = '';
     protected $img_wrapperclass = '';
     protected $ul_class = '';
     protected $li_class = '';
     protected $a_class = '';
     protected $custom_css = '';
     protected $posts_related_quantity = 5;
    
    /**
     * Constructor
     */
    function __construct() {
       
        // Add link on plugin to admin menu
        add_action( 'admin_menu', array( $this, 'add_admin_menu' ) );
        
         // Check, the form is submitted
        if ( isset( $_POST['rel_posts_wpml'] ) ) {
            $fields = $_POST['rel_posts_wpml'];
            if ( isset( $fields['submit_related'] ) ) {
                update_option( 'related_posts_for_wpml_settings', maybe_serialize( $fields ) );
            }
        } 
        
        // Get saved data from database
        $this->options = maybe_unserialize( get_option( 'related_posts_for_wpml_settings' ) );

        if ( false == empty( $this->options['img_class'] ) ) {
            $this->img_class = $this->options['img_class'];
        }

        if ( false == empty( $this->options['img_wrapperclass'] ) ) {
            $this->img_wrapperclass = $this->options['img_wrapperclass'];
        }
        
        if ( false == empty( $this->options['posts_related_quantity'] ) ) {
            $this->posts_related_quantity = $this->options['posts_related_quantity'];
        }

        if ( false == empty( $this->options['ul_class'] ) ) {
            $this->ul_class = $this->options['ul_class'];
        }

        if ( false == empty( $this->options['li_class'] )) {
            $this->li_class = $this->options['li_class'];
        }

	    if ( false == empty( $this->options['a_class'] )) {
		    $this->a_class = $this->options['a_class'];
	    }

        /*if ( false == empty( $this->options['custom_css'] ) ) {
            $this->custom_css = $this->options['custom_css'];
        }*/

    }
    
    
    /**
     * Function add the link on page plugin to admin menu
     */
    public function add_admin_menu() {
        add_options_page($this->plugin_name, $this->plugin_name, 'manage_options', basename(__FILE__), array(
            $this,
            'view_options_page',
        ));
    }
    

    /**
     * Upload the plugin interface template
     */
    public function view_options_page() {
        include( plugin_dir_path(__FILE__) . '/main-page.php' );
    }

}