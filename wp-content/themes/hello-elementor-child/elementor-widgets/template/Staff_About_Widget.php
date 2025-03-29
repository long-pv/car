<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Staff_About_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'staff_about_widget';
    }

    public function get_title()
    {
        return __('Staff About', 'child_theme');
    }

    public function get_icon()
    {
        return 'eicon-users';
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
        $staff_array = [];
        $index = 1;
        $index_arr = 1;

        $args = [
            'post_type'      => 'staff_about_us',
            'posts_per_page' => -1,
        ];

        $query = new WP_Query($args);
        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post();

                $name = get_the_title();
                $image = get_field('avatar') ?? '';
                $position = get_field('position') ?? '';
                $bio = get_field('bio') ?? '';

                if ($name && $image) :
                    $staff_array[$index_arr][] = [
                        'name' => $name,
                        'image' => $image,
                        'position' => $position,
                        'bio' => $bio,
                    ];

                    if ($index % 2 == 0) {
                        $index_arr++;
                    }

                    $index++;
                endif;
            endwhile;
        endif;
        wp_reset_postdata();
?>
        <div class="staff_slider">
            <?php if (!empty($staff_array)) : ?>
                <?php foreach ($staff_array as $staff_group) : ?>
                    <div class="staff_slide">
                        <div class="row staff_slider_row">
                            <?php foreach ($staff_group as $staff) : ?>
                                <div class="col-lg-6">
                                    <div class="staff_item">
                                        <img src="<?php echo esc_url($staff['image']); ?>" alt="<?php echo esc_attr($staff['name']); ?>">
                                        <div class="staff_info">
                                            <h3 class="staff_name"><?php echo esc_html($staff['name']); ?></h3>
                                            <div class="staff_position"><?php echo esc_html($staff['position']); ?></div>
                                            <div class="staff_bio"><?php echo esc_html($staff['bio']); ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
<?php
    }
}
