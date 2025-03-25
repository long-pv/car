<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Ecosystem_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'Ecosystem_Widget';
    }

    public function get_title()
    {
        return __('Ecosystem Widget', 'child_theme');
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

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'title',
            [
                'label' => __('Title', 'child_theme'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Cập Nhật & Đổi Mới Công Nghệ', 'child_theme'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'items',
            [
                'label' => __('Ecosystem Items', 'child_theme'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => array_fill(0, 5, ['title' => 'Cập Nhật & Đổi Mới Công Nghệ']),
                'title_field' => '{{{ title }}}',
                'prevent_empty' => false,
                'max' => 5,
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>
        <div class="ecosystem">
            <?php foreach (array_slice($settings['items'], 0, 5) as $item) : ?>
                <div class="ecosystem_item">
                    <img class="ecosystem_item_img" src="<?php echo CHILD_URI . '/assets/images/luc_giac_1.svg'; ?>" alt="<?php echo esc_attr($item['title']); ?>">
                    <img class="ecosystem_item_img_hover" src="<?php echo CHILD_URI . '/assets/images/luc_giac_2.svg'; ?>" alt="<?php echo esc_attr($item['title']); ?>">
                    <div class="ecosystem_title">
                        <?php echo esc_html($item['title']); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
<?php
    }
}
