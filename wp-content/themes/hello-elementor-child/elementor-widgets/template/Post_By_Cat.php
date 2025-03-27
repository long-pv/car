<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Post_By_Cat extends Widget_Base
{
    public function get_name()
    {
        return 'post_by_cat';
    }

    public function get_title()
    {
        return __('Latest Articles by Category', 'text-domain');
    }

    public function get_icon()
    {
        return 'eicon-post-list';
    }

    public function get_categories()
    {
        return ['custom_builder_theme'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Settings', 'text-domain'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $categories = get_categories();
        $category_options = [];
        foreach ($categories as $category) {
            $category_options[$category->term_id] = $category->name;
        }

        $this->add_control(
            'category',
            [
                'label'   => __('Select Category', 'text-domain'),
                'type'    => Controls_Manager::SELECT,
                'options' => $category_options,
                'default' => '',
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $category_id = !empty($settings['category']) ? $settings['category'] : '';

        $query_args = [
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'post_status'    => 'publish',
            'cat'            => $category_id,
        ];

        $query = new WP_Query($query_args);

        if ($query->have_posts()) {
            echo '<div class="latest_articles">';
            echo '<div class="row latest_articles_row">';
            while ($query->have_posts()) {
                $query->the_post();
                echo '<div class="col-md-6 col-lg-4">';
                get_template_part('template-parts/single_post');
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
        }
        wp_reset_postdata();
    }
}
