<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Departments_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'departments_widget';
    }

    public function get_title()
    {
        return __('Departments Widget', 'child_theme');
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
        $query = new WP_Query([
            'post_type'      => 'department',
            'posts_per_page' => -1
        ]);
?>
        <div class="departments_widget">
            <?php if ($query->have_posts()) : ?>
                <div class="departments_list">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <div>
                            <div class="department_item">
                                <div class="row gx-0">
                                    <div class="col-lg-6">
                                        <div class="department_content">
                                            <h3 class="department_title">
                                                <?php the_title(); ?>
                                            </h3>
                                            <div class="department_desc">
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="department_image">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <p><?php _e('No departments found.', 'child_theme'); ?></p>
            <?php endif; ?>
        </div>
<?php
        wp_reset_postdata();
    }
}
