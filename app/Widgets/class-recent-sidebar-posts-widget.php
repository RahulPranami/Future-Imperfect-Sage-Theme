<?php

class Recent_Sidebar_Posts_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'recent_posts_as_list',
            __('Recent Posts as List', 'sage'),
            array('description' => __('A custom widget to display recent posts with featured images and dates.', 'sage'))
        );
    }

    public function widget($args, $instance)
    {
        // Widget output code goes here
        echo $args['before_widget'];
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        // Query for recent posts
        $recent_posts = get_posts(array(
            'numberposts' => 5,
            'orderby' => 'date',
            'order' => 'DESC',
        ));

        echo '<ul class="posts">';
        foreach ($recent_posts as $post) {
            setup_postdata($post);
            $post_date = get_the_date('F j, Y', $post->ID);
            $post_image = get_the_post_thumbnail_url($post->ID, 'thumbnail');
            $post_url = get_permalink($post->ID);
            $post_title = get_the_title($post->ID);

            echo '<li>';
            echo '<article>';
            echo '<header>';
            echo '<h3><a href="' . esc_url($post_url) . '">' . esc_html($post_title) . '</a></h3>';
            echo '<time class="published" datetime="' . esc_attr($post_date) . '">' . esc_html($post_date) . '</time>';
            echo '</header>';
            echo '<a href="' . esc_url($post_url) . '" class="image"><img src="' . esc_url($post_image) . '" alt="" /></a>';
            echo '</article>';
            echo '</li>';
        }
        echo '</ul>';

        wp_reset_postdata();
        echo $args['after_widget'];
    }

    public function form($instance)
    {
        // Widget settings form code goes here
    }

    public function update($new_instance, $old_instance)
    {
        // Update widget settings code goes here
    }
}
