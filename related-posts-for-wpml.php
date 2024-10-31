<?php

require_once 'init-related-posts.php';

new init_related_posts();

/**
 * Plugin name: Related Posts for WPML
 * Plugin URI: https://scrit-group.com
 * Description: Related posts by tags for multilanguage WPML
 * Version: 1.1
 * Author: Mikhail Zhirov
 * Author uri: https://scrit-group.com
 */
function rpf_related() {

    echo Related_Posts_For_WPML::rpf_related_posts();
}

class Related_Posts_For_WPML {
    
    
    /**
     * Related_Posts_For_WPML constructor.
     */
    public static function rpf_related_posts() {

        global $post;

        $all_related_posts = self::get_related_posts_data($post);

        $related = self::output_related_posts($all_related_posts);

        return $related;
    }

    /**
     * @param $post
     *
     * @return mixed
     */
    public static function get_related_posts_data($post) {
        
        $options = unserialize( get_option('related_posts_for_wpml_settings') );

        $get_post_tags = array();

        foreach (wp_get_post_tags($post->ID) as $key => $val) {
            $get_post_tags[] = $val->term_id;
        }

        $related_posts = get_posts(array(
            'category__in' => wp_get_post_categories($post->ID),
            'tag__in' => $get_post_tags,
            'numberposts' => $options['posts_related_quantity'],
            'orderby' => 'rand',
            'post__not_in' => array($post->ID))
        );

        return $related_posts;
    }

    /**
     * @param $all_related_posts
     */
    public static function output_related_posts($all_related_posts) {
        
        $options = unserialize( get_option('related_posts_for_wpml_settings') );
        
        $ready_data_to_output = '<ul class="' . $options['ul_class'] . '">';
        
        foreach ( $all_related_posts as $one_post ) {

        	$permalink_to_post = get_the_permalink( $one_post->ID );
            
            $ready_data_to_output .= '<li class="' . $options['li_class'] . '">';
            
            $ready_data_to_output .= '<span class="title"><a class="' . $options['a_class'] . '" href="' . $permalink_to_post . '">' .$one_post->post_title . '</a></span>';
            
            $feature_image_id = get_post_thumbnail_id( $one_post->ID );
            $feature_image_meta = wp_get_attachment_image_src($feature_image_id, '32');
            
            $ready_data_to_output .= '<a href="' . $permalink_to_post . '"><div class="' . $options['img_wrapperclass'] . '"><img class="' . $options['img_class'] . '" src="' . $feature_image_meta[0] . '"></div></a>';
            
            $ready_data_to_output .= '</li>';
            
        }
        
        $ready_data_to_output .= '</ul>';
        
        echo $ready_data_to_output;
    }

}
