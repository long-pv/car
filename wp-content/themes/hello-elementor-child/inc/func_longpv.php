<?php
function ajax_search_handler()
{
    $search_query = isset($_POST['search']) ? sanitize_text_field($_POST['search']) : '';

    if (!empty($search_query)) {
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 5,
            's'              => $search_query
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            echo '<div class="ket_qua">';
            while ($query->have_posts()) {
                $query->the_post();
?>
                <div class="item">
                    <div class="icon"></div>
                    <a class="link" href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </div>
<?php
            }
            echo '</div>';
            wp_reset_postdata();
        } else {
            if (LANG == 'en') {
                echo '<p>No results found.</p>';
            } else {
                echo '<p>Không tìm thấy kết quả.</p>';
            }
        }
    }
    wp_die();
}

add_action('wp_ajax_ajax_search', 'ajax_search_handler');
add_action('wp_ajax_nopriv_ajax_search', 'ajax_search_handler');

function pagination($query = null)
{
    global $wp_query;
    $max_pages = $query ? $query->max_num_pages : $wp_query->max_num_pages;

    echo '<div class="pagination">';
    echo paginate_links(
        array(
            'total' => $max_pages,
            'current' => max(1, get_query_var('paged')),
            'end_size' => 2,
            'mid_size' => 1,
            'prev_text' => __('', 'basetheme'),
            'next_text' => __('', 'basetheme'),
        )
    );
    echo '</div>';

    wp_reset_postdata();
}

function customize_search_query($query)
{
    if ($query->is_search() && $query->is_main_query()) {
        $query->set('post_type', 'post'); // Chỉ tìm trong bài viết
        $query->set('posts_per_page', 5); // Giới hạn 5 bài trên mỗi trang
    }
}
add_action('pre_get_posts', 'customize_search_query');

function modify_cf7_checkbox_label($content)
{
    if (LANG == 'en') {
        $term_of_service = get_field('term_of_service_en', 'option') ?? null;
        $privacy_policy = get_field('privacy_policy_en', 'option') ?? null;
    } else {
        $term_of_service = get_field('term_of_service', 'option') ?? null;
        $privacy_policy = get_field('privacy_policy', 'option') ?? null;
    }
    $term_of_service_link = $term_of_service ? get_permalink($term_of_service) : '#';
    $privacy_policy_link = $privacy_policy ? get_permalink($privacy_policy) : '#';

    if (LANG == 'en') {
        $content = str_replace(
            '<span class="wpcf7-list-item-label">Tôi đồng ý</span>',
            '<span class="wpcf7-list-item-label">I agree to <a href="' . $term_of_service_link . '" target="_blank">term of service</a> and <a href="' . $privacy_policy_link . '" target="_blank">privacy policy</a> of CarDoctor</span>',
            $content
        );
    } else {
        $content = str_replace(
            '<span class="wpcf7-list-item-label">Tôi đồng ý</span>',
            '<span class="wpcf7-list-item-label">Tôi đồng ý với <a href="' . $term_of_service_link . '" target="_blank">các điều khoản dịch vụ</a> và <a href="' . $privacy_policy_link . '" target="_blank">chính sách bảo mật</a> của CarDoctor</span>',
            $content
        );
    }
    return $content;
}
add_filter('wpcf7_form_elements', 'modify_cf7_checkbox_label');
