<!-- Kiến thức xe hơi --  -->
<?php
$arr_post = [];
$category = get_term($category_id, 'category');
$recent_posts = get_posts([
    'numberposts'  => 10,
    'post_status'  => 'publish',
    'category'     => $category_id,
]);
?>
<!--  -->
<section class="secSpace postList-style2">
    <div class="container">
        <h1 class="car-knowledge__title">
            <?php single_cat_title(); ?>
        </h1>
        <!--  -->
        <div class="kinh_nghiem_list">
            <?php if (!empty($recent_posts)) :
                $posts_to_display = array_slice($recent_posts, 0, 4);
            ?>
                <div class="row g-4">
                    <?php foreach ($posts_to_display as $post) :
                        $post_id = $post->ID;
                        $thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
                        $link = get_permalink($post_id);
                        $title = get_the_title($post_id);
                        $publish_date = get_the_date('d/m/Y', $post_id);
                        $excerpt = get_the_excerpt($post_id);
                        $arr_post[] = $post->ID;
                        $categories = get_the_category($post_id);
                    ?>
                        <div class="col-lg-3 col-md-6">
                            <a href="<?php echo get_permalink($post_id); ?>" class="related-news">
                                <img class="related-news__image" src="<?php echo $thumbnail_url; ?>" alt="<?php echo $title; ?>">
                                <div class="related-news__content">
                                    <h3 class="related-news__title">
                                        <?php echo $title; ?>
                                    </h3>
                                    <div class="related-news__info">
                                        <div class="related-news__meta">
                                            <div class="related-news__category">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.6668 11.1001H10.3335" stroke="white" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M15.2134 5.33325H8.78671C7.36671 5.33325 6.21338 6.49325 6.21338 7.90659V17.2999C6.21338 18.4999 7.07338 19.0066 8.12671 18.4266L11.38 16.6199C11.7267 16.4266 12.2867 16.4266 12.6267 16.6199L15.88 18.4266C16.9334 19.0133 17.7934 18.5066 17.7934 17.2999V7.90659C17.7867 6.49325 16.6334 5.33325 15.2134 5.33325Z"
                                                        stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <span>
                                                    <?php echo $categories[0]->name; ?>
                                                </span>
                                            </div>
                                            <div class="related-news__date">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.3335 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M14.6665 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M6.3335 10.0601H17.6668" stroke="white" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M18 9.66659V15.3333C18 17.3333 17 18.6666 14.6667 18.6666H9.33333C7 18.6666 6 17.3333 6 15.3333V9.66659C6 7.66659 7 6.33325 9.33333 6.33325H14.6667C17 6.33325 18 7.66659 18 9.66659Z"
                                                        stroke="white" stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M14.463 13.1334H14.469" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M14.463 15.1334H14.469" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M11.9972 13.1334H12.0031" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M11.9972 15.1334H12.0031" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M9.52938 13.1334H9.53537" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M9.52938 15.1334H9.53537" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>
                                                    <?php echo $publish_date; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    endforeach; ?>
                    <!--  -->
                    <?php
                    $posts_to_display = array_slice($recent_posts, 4, 6);
                    foreach ($posts_to_display as $post) :
                        $post_id = $post->ID;
                        $thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
                        $link = get_permalink($post_id);
                        $title = get_the_title($post_id);
                        $publish_date = get_the_date('d/m/Y', $post_id);
                        $excerpt = get_the_excerpt($post_id);
                        $arr_post[] = $post->ID;
                        $categories = get_the_category($post_id);
                    ?>
                        <div class="col-lg-4">
                            <a href="<?php echo get_permalink($post_id); ?>" class="highlight-news-item">
                                <img class="highlight-news-item__image" src="<?php echo $thumbnail_url; ?>" alt="<?php echo  $title; ?>">
                                <div class="highlight-news-item__content">
                                    <h3 class="highlight-news-item__title">
                                        <?php echo  $title; ?>
                                    </h3>
                                    <div class="highlight-news-item__info">
                                        <div class="highlight-news-item__meta">
                                            <div class="highlight-news-item__category">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.6668 11.1001H10.3335" stroke="white" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M15.2134 5.33325H8.78671C7.36671 5.33325 6.21338 6.49325 6.21338 7.90659V17.2999C6.21338 18.4999 7.07338 19.0066 8.12671 18.4266L11.38 16.6199C11.7267 16.4266 12.2867 16.4266 12.6267 16.6199L15.88 18.4266C16.9334 19.0133 17.7934 18.5066 17.7934 17.2999V7.90659C17.7867 6.49325 16.6334 5.33325 15.2134 5.33325Z"
                                                        stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <span>
                                                    <?php echo $categories[0]->name; ?>
                                                </span>
                                            </div>
                                            <div class="highlight-news-item__date">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.3335 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M14.6665 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M6.3335 10.0601H17.6668" stroke="white" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M18 9.66659V15.3333C18 17.3333 17 18.6666 14.6667 18.6666H9.33333C7 18.6666 6 17.3333 6 15.3333V9.66659C6 7.66659 7 6.33325 9.33333 6.33325H14.6667C17 6.33325 18 7.66659 18 9.66659Z"
                                                        stroke="white" stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M14.463 13.1334H14.469" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M14.463 15.1334H14.469" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M11.9972 13.1334H12.0031" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M11.9972 15.1334H12.0031" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M9.52938 13.1334H9.53537" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M9.52938 15.1334H9.53537" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>
                                                    <?php echo $publish_date; ?>
                                                </span>
                                            </div>
                                        </div>
                                        <button class="highlight-news-item__button">
                                            <?php echo LANG == 'en' ? 'Read now' : 'Xem ngay'; ?>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php
                wp_reset_postdata();
            endif;
            ?>
        </div>
</section>

<!--  -->
<?php
$featured_news = get_field("featured_news", "category_" . $category_id) ?? '';
if ($featured_news) :
    $args = [
        'post_type' => 'post',
        'post__in' => $featured_news, // Chỉ lấy các bài viết trong danh sách
        'orderby' => 'post__in', // Giữ nguyên thứ tự ID trong mảng
        'posts_per_page' => 4, // Lấy đúng số lượng bài viết
    ];
    $query = new WP_Query($args);

    if ($query->have_posts()) {
?>
        <div class="tin_lien_quan_exp">
            <div class="container">
                <h2 class="highlight-news__title">
                    <?php echo LANG == 'en' ? 'FEATURED NEWS' : 'Tin Nổi bật'; ?>
                </h2>

                <div class="row">
                    <?php
                    while ($query->have_posts()) {
                        $query->the_post();
                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        $categories = get_the_category(get_the_ID());
                    ?>
                        <div class="col-md-6 col-lg-3">
                            <a href="<?php echo get_permalink(); ?>" class="related-news">
                                <img class="related-news__image" src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>">
                                <div class="related-news__content">
                                    <h3 class="related-news__title">
                                        <?php the_title(); ?>
                                    </h3>
                                    <div class="related-news__info">
                                        <div class="related-news__meta">
                                            <div class="related-news__category">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.6668 11.1001H10.3335" stroke="white" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M15.2134 5.33325H8.78671C7.36671 5.33325 6.21338 6.49325 6.21338 7.90659V17.2999C6.21338 18.4999 7.07338 19.0066 8.12671 18.4266L11.38 16.6199C11.7267 16.4266 12.2867 16.4266 12.6267 16.6199L15.88 18.4266C16.9334 19.0133 17.7934 18.5066 17.7934 17.2999V7.90659C17.7867 6.49325 16.6334 5.33325 15.2134 5.33325Z"
                                                        stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <span>
                                                    <?php echo $categories[0]->name; ?>
                                                </span>
                                            </div>
                                            <div class="related-news__date">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.3335 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M14.6665 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M6.3335 10.0601H17.6668" stroke="white" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M18 9.66659V15.3333C18 17.3333 17 18.6666 14.6667 18.6666H9.33333C7 18.6666 6 17.3333 6 15.3333V9.66659C6 7.66659 7 6.33325 9.33333 6.33325H14.6667C17 6.33325 18 7.66659 18 9.66659Z"
                                                        stroke="white" stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M14.463 13.1334H14.469" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M14.463 15.1334H14.469" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M11.9972 13.1334H12.0031" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M11.9972 15.1334H12.0031" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M9.52938 13.1334H9.53537" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M9.52938 15.1334H9.53537" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>
                                                    <?php echo get_the_date('d/m/Y'); ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
<?php
    }
endif;
?>