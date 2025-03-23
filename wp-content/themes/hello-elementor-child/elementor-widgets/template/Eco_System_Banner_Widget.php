<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Eco_System_Banner_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'eco_system_banner';
    }

    public function get_title()
    {
        return __('Eco System Banner', 'child_theme');
    }

    public function get_icon()
    {
        return 'eicon-image-rollover';
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

        // Image field
        $this->add_control(
            'featured_image',
            [
                'label' => __('Featured Image', 'child_theme'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // Pattern Image field
        $this->add_control(
            'pattern_image',
            [
                'label' => __('Pattern Image', 'child_theme'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '',
                ],
            ]
        );

        // Repeater Left List
        $left_repeater = new \Elementor\Repeater();
        $left_repeater->add_control(
            'left_item_image',
            [
                'label' => __('Left List Image', 'child_theme'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $left_repeater->add_control(
            'left_item_link',
            [
                'label' => __('Left List Link', 'child_theme'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __('https://your-link.com', 'child_theme'),
            ]
        );

        $this->add_control(
            'left_list',
            [
                'label' => __('Left List', 'child_theme'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $left_repeater->get_controls(),
                'title_field' => '{{{ left_item_link.url }}}',
            ]
        );

        // Repeater Right List
        $right_repeater = new \Elementor\Repeater();
        $right_repeater->add_control(
            'right_item_image',
            [
                'label' => __('Right List Image', 'child_theme'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $right_repeater->add_control(
            'right_item_link',
            [
                'label' => __('Right List Link', 'child_theme'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __('https://your-link.com', 'child_theme'),
            ]
        );

        $this->add_control(
            'right_list',
            [
                'label' => __('Right List', 'child_theme'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $right_repeater->get_controls(),
                'title_field' => '{{{ right_item_link.url }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>
        <div class="eco_system_banner">
            <div class="eco_system_banner_inner">
                <?php if ($settings['pattern_image']['url']) : ?>
                    <img class="pattern_image" src="<?php echo esc_url($settings['pattern_image']['url']); ?>" alt="Pattern Image">
                <?php endif; ?>
                <div class="left_list">
                    <div class="eco_system_left">
                        <?php
                        foreach (array_slice($settings['left_list'], 0, 3) as $item) :
                        ?>
                            <div class="short_service_item">
                                <img class="icon" src="<?php echo esc_url($item['left_item_image']['url']); ?>" alt="Left Item">
                                <?php if ($item['left_item_link']['url']) : ?>
                                    <a class="link" href="<?php echo esc_url($item['left_item_link']['url']); ?>"></a>
                                <?php endif; ?>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
                <div class="featured-image">
                    <img src="<?php echo esc_url($settings['featured_image']['url']); ?>" alt="Featured Image">
                </div>
                <div class="right_list">
                    <div class="eco_system_right">
                        <?php
                        foreach (array_slice($settings['right_list'], 0, 4) as $item) :
                        ?>
                            <div class="short_service_item">
                                <img class="icon" src="<?php echo esc_url($item['right_item_image']['url']); ?>" alt="Right Item">
                                <?php if ($item['right_item_link']['url']) : ?>
                                    <a class="link" href="<?php echo esc_url($item['right_item_link']['url']); ?>"></a>
                                <?php endif; ?>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}
