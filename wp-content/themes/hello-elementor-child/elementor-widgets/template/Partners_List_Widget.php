<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Partners_List_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'partners_list_widget';
    }

    public function get_title()
    {
        return __('Partners List', 'child_theme');
    }

    public function get_icon()
    {
        return 'eicon-gallery-grid';
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
                'label' => __('Content', 'child_theme'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->end_controls_section();
    }

    protected function render()
    {
        $args = [
            'post_type'      => 'partner',
            'posts_per_page' => -1,
        ];

        $partners = new WP_Query($args);

        if ($partners->have_posts()) {
            echo '<div class="partners_slider">';
            while ($partners->have_posts()) {
                $partners->the_post();
                $logo = get_field('logo'); // Lấy logo từ ACF
                $title = get_the_title();
?>
                <div class="partners_slide_item">
                    <div class="partner_item">
                        <div class="partner_content">
                            <?php if ($logo): ?>
                                <div class="partner_logo"><img src="<?php echo esc_url($logo); ?>" alt="<?php echo esc_attr($title); ?>"></div>
                            <?php endif; ?>
                            <div class="partner_text"> <?php echo esc_html($title); ?> </div>
                        </div>
                    </div>
                </div>
<?php
            }
            echo '</div>';
            wp_reset_postdata();
        } else {
            echo '<p>No partners found.</p>';
        }
    }
}
