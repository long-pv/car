<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Show_Video_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'show_video_widget';
    }

    public function get_title()
    {
        return __('Show Video Widget', 'child_theme');
    }

    public function get_icon()
    {
        return 'eicon-youtube';
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

        $this->add_control(
            'video_thumbnail',
            [
                'label' => __('Video Thumbnail', 'child_theme'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'video_url',
            [
                'label' => __('YouTube Video Iframe', 'child_theme'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'placeholder' => __('Enter YouTube video iframe', 'child_theme'),
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $thumbnail = $settings['video_thumbnail']['url'];
        $video_url = getYoutubeEmbedUrl($settings['video_url']);
?>
        <div class="videoBlock">
            <img class="videoBlock_img" src="<?php echo esc_url($thumbnail); ?>" alt="">
            <a href="javascript:void(0);" class="videoBlock__playAction" data-toggle="modal" data-target="#videoUrl" data-src="<?php echo esc_url($video_url); ?>">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.1992 24V21.04C18.1992 17.22 20.8992 15.68 24.1992 17.58L26.7592 19.06L29.3192 20.54C32.6192 22.44 32.6192 25.56 29.3192 27.46L26.7592 28.94L24.1992 30.42C20.8992 32.32 18.1992 30.76 18.1992 26.96V24Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div>
<?php
    }
}
