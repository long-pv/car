<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Outstanding_Number_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'outstanding_number_widget';
    }

    public function get_title()
    {
        return __('Outstanding Number', 'child_theme');
    }

    public function get_icon()
    {
        return 'eicon-counter';
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

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'number',
            [
                'label' => __('Number', 'child_theme'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '100+',
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'text',
            [
                'label' => __('Text', 'child_theme'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Text here', 'child_theme'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'items',
            [
                'label' => __('Items', 'child_theme'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    ['number' => '27,000+', 'text' => 'Khách hàng',],
                    ['number' => '1,000+', 'text' => 'Đại diện kinh doanh',],
                    ['number' => '160+', 'text' => 'Điểm kinh doanh',],
                    ['number' => '2,500+', 'text' => 'Điểm cung cấp dịch vụ',],
                ],
                'title_field' => '{{{ number }}} - {{{ text }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>
        <div class="car_animation">
            <?php foreach ($settings['items'] as $key => $item) : ?>
                <div class="car_animation_block" data-pos="<?php echo ($key + 1); ?>">
                    <div class="car_animation_number"><?php echo esc_html($item['number']); ?></div>
                    <div class="car_animation_text"><?php echo esc_html($item['text']); ?></div>
                </div>
            <?php endforeach; ?>
        </div>
<?php
    }
}
