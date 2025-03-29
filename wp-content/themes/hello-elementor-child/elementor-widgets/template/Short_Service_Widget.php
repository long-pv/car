<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Repeater;

class Short_Service_Widget extends Widget_Base
{

    public function get_name()
    {
        return 'short_service_widget';
    }

    public function get_title()
    {
        return __('Short Service', 'child_theme');
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
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'service_icon',
            [
                'label' => __('Service Icon', 'child_theme'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => CHILD_URI . '/assets/images/car_1.png',
                ],
            ]
        );

        $this->add_control(
            'services_list',
            [
                'label' => __('Services', 'child_theme'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => array_fill(0, 6, [
                    'service_icon' => ['url' => CHILD_URI . '/assets/images/car_1.png']
                ]),
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>
        <div class="short_service_box">
            <div class="short_service">
                <?php foreach ($settings['services_list'] as $service) : ?>
                    <div class="short_service_item">
                        <img src="<?php echo esc_url($service['service_icon']['url']); ?>" class="short_service_icon" alt="DriverPlus">
                    </div>
                <?php endforeach; ?>
            </div>
            <img class="short_service_img_center" src="<?php echo CHILD_URI . '/assets/images/center_service.png'; ?>" alt="DriverPlus">
        </div>
<?php
    }
}
