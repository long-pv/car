<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Latest_Article_Widget extends Widget_Base
{
    public function get_name()
    {
        return 'latest_articles';
    }

    public function get_title()
    {
        return __('Latest Articles', 'text-domain');
    }

    public function get_icon()
    {
        return 'eicon-post-list';
    }

    public function get_categories()
    {
        return ['custom_builder_theme'];
    }

    protected function render()
    {
        $query_args = [
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'post_status'    => 'publish',
        ];

        $query = new WP_Query($query_args);

        if ($query->have_posts()) {
            echo '<div class="latest_articles">';
            echo '<div class="row">';
            while ($query->have_posts()) {
                $query->the_post();
                echo '<div class="col-lg-4">';
                get_template_part('template-parts/single_post');
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
        }
        wp_reset_postdata();
    }
}
