<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Repeater;

class Heartfelt_Service_Widget extends Widget_Base
{

    public function get_name()
    {
        return 'heartfelt_service';
    }

    public function get_title()
    {
        return __('Heartfelt Service', 'child_theme');
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
                'label' => __('Heartfelt Services', 'child_theme'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'image',
            [
                'label' => __('Image', 'child_theme'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'title',
            [
                'label' => __('Title', 'child_theme'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Công nghệ & Đổi mới', 'child_theme'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'description',
            [
                'label' => __('Description', 'child_theme'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Ứng dụng công nghệ hiện đại...', 'child_theme'),
            ]
        );

        $this->add_control(
            'services',
            [
                'label' => __('Service Items', 'child_theme'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>
        <div class="row heartfelt_service_row">
            <?php foreach ($settings['services'] as $service) : ?>
                <div class="col-md-4">
                    <div class="heartfelt_service">
                        <div class="heartfelt_service_inner">
                            <img src="<?php echo esc_url($service['image']['url']); ?>" alt="<?php echo esc_attr($service['title']); ?>">
                        </div>
                        <div class="heartfelt_service_hover">
                            <h3 class="heartfelt_service_title">
                                <?php echo esc_html($service['title']); ?>
                            </h3>
                            <div class="heartfelt_service_desc">
                                <?php echo esc_html($service['description']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
<?php
    }
}
