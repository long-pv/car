<!-- Tin tức -->
<?php
$arr_post = [];
$category = get_term($category_id, 'category');
$news_posts = get_posts([
    'numberposts'  => 3,
    'post_status'  => 'publish',
    'category'     => $category_id,
]);
?>
<section class="secSpace">
    <div class="container">
        <div class="row g-4">
            <?php if (!empty($news_posts)) : ?>
                <div class="col-lg-9">
                    <div class="content__inner">
                        <?php
                        foreach ($news_posts as $index => $post_id) :
                            $thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
                            $link = get_permalink($post_id);
                            $title = get_the_title($post_id);
                            $publish_date = get_the_date('d/m/Y', $post_id);
                            $excerpt = get_the_excerpt($post_id);
                            $arr_post[] = $post_id->ID;
                            $categories = get_the_category($post_id);
                        ?>
                            <!-- Blog Item -->
                            <?php if ($index % 2 != 1): ?>
                                <div class="blog-item">
                                    <div class="row blog-item-row">
                                        <div class="col-lg-8">
                                            <a href="<?php echo $link; ?>" class="blog-item__image">
                                                <img src="<?php echo $thumbnail_url; ?>" alt="<?php echo $title; ?>">
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="blog-item__content">
                                                <div class="blog-item__info">
                                                    <a href="" class="blog-item__title line-2">
                                                        <h3 class="line-2">
                                                            <?php echo $title; ?>
                                                        </h3>
                                                    </a>
                                                    <div class="blog-item__meta">
                                                        <div class="blog-item__category">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M13.6668 11.1H10.3335" stroke="#354764"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M15.2134 5.33331H8.78671C7.36671 5.33331 6.21338 6.49331 6.21338 7.90665V17.3C6.21338 18.5 7.07338 19.0066 8.12671 18.4266L11.38 16.62C11.7267 16.4266 12.2867 16.4266 12.6267 16.62L15.88 18.4266C16.9334 19.0133 17.7934 18.5066 17.7934 17.3V7.90665C17.7867 6.49331 16.6334 5.33331 15.2134 5.33331Z"
                                                                    stroke="#354764" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                            <span>
                                                                <?php echo $categories[0]->name; ?>
                                                            </span>
                                                        </div>
                                                        <div class="blog-item__date">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M9.3335 5.33331V7.33331" stroke="#354764"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path d="M14.6665 5.33331V7.33331" stroke="#354764"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path d="M6.3335 10.06H17.6668" stroke="#354764"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M18 9.66665V15.3333C18 17.3333 17 18.6666 14.6667 18.6666H9.33333C7 18.6666 6 17.3333 6 15.3333V9.66665C6 7.66665 7 6.33331 9.33333 6.33331H14.6667C17 6.33331 18 7.66665 18 9.66665Z"
                                                                    stroke="#354764" stroke-miterlimit="10"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M14.463 13.1333H14.469" stroke="#354764"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M14.463 15.1333H14.469" stroke="#354764"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M11.9972 13.1333H12.0031" stroke="#354764"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M11.9972 15.1333H12.0031" stroke="#354764"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M9.52938 13.1333H9.53537" stroke="#354764"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M9.52938 15.1333H9.53537" stroke="#354764"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <span>
                                                                <?php echo $publish_date; ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="blog-item__desc">
                                                    <?php echo  $excerpt; ?>
                                                </p>
                                                <div class="blog-item__button_wrap">
                                                    <a href="<?php echo $link; ?>" class="blog-item__button">
                                                        <?php echo LANG == 'en' ? 'Read now' : 'Xem ngay'; ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            else :
                            ?>
                                <a href="<?php echo $link; ?>" class="post-item">
                                    <img src="<?php echo $thumbnail_url; ?>" alt="<?php echo $title; ?>" class="post-item__image">
                                    <div class="post-item__content">
                                        <h3 class="post-item__title">
                                            <?php echo $title; ?>
                                        </h3>
                                        <div class="post-item__info">
                                            <div class="post-item__meta">
                                                <div class="post-item__category">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.6668 11.1001H10.3335" stroke="white"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M15.2134 5.33325H8.78671C7.36671 5.33325 6.21338 6.49325 6.21338 7.90659V17.2999C6.21338 18.4999 7.07338 19.0066 8.12671 18.4266L11.38 16.6199C11.7267 16.4266 12.2867 16.4266 12.6267 16.6199L15.88 18.4266C16.9334 19.0133 17.7934 18.5066 17.7934 17.2999V7.90659C17.7867 6.49325 16.6334 5.33325 15.2134 5.33325Z"
                                                            stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <span>
                                                        <?php echo $category->name; ?>
                                                    </span>
                                                </div>
                                                <div class="post-item__date">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.3335 5.33325V7.33325" stroke="white"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M14.6665 5.33325V7.33325" stroke="white"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M6.3335 10.0601H17.6668" stroke="white"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M18 9.66659V15.3333C18 17.3333 17 18.6666 14.6667 18.6666H9.33333C7 18.6666 6 17.3333 6 15.3333V9.66659C6 7.66659 7 6.33325 9.33333 6.33325H14.6667C17 6.33325 18 7.66659 18 9.66659Z"
                                                            stroke="white" stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M14.463 13.1334H14.469" stroke="white"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M14.463 15.1334H14.469" stroke="white"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M11.9972 13.1334H12.0031" stroke="white"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M11.9972 15.1334H12.0031" stroke="white"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M9.52938 13.1334H9.53537" stroke="white"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M9.52938 15.1334H9.53537" stroke="white"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <span>
                                                        <?php echo $publish_date; ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <button class="post-item__button">
                                                <?php echo LANG == 'en' ? 'Read now' : 'Xem ngay'; ?>
                                            </button>
                                        </div>
                                    </div>
                                </a>
                            <?php endif; ?>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            <?php
            endif;
            wp_reset_postdata();
            ?>

            <?php
            $args_post = [
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'category__in'   => [$category_id],
                'post__not_in'   => $arr_post,
            ];
            $query_post = new WP_Query($args_post);
            ?>
            <div class="col-lg-3">
                <h2 class="related-news__subtitle">
                    <?php echo LANG == 'en' ? 'RELATED NEWS' : 'Tin liên quan'; ?>
                </h2>
                <div class="related-news__inner">
                    <?php
                    if ($query_post->have_posts()) {
                        while ($query_post->have_posts()) {
                            $query_post->the_post();
                            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            $categories = get_the_category(get_the_ID());
                    ?>
                            <a href="<?php echo get_permalink(); ?>" class="related-news">
                                <img class="related-news__image" src="<?php echo  $thumbnail_url; ?>" alt="<?php the_title(); ?>">
                                <div class="related-news__content">
                                    <h3 class="related-news__title">
                                        <?php the_title(); ?>
                                    </h3>
                                    <div class="related-news__info">
                                        <div class="related-news__meta">
                                            <div class="related-news__category">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.6668 11.1001H10.3335" stroke="white"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
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
                                                    <path d="M9.3335 5.33325V7.33325" stroke="white"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M14.6665 5.33325V7.33325" stroke="white"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6.3335 10.0601H17.6668" stroke="white"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M18 9.66659V15.3333C18 17.3333 17 18.6666 14.6667 18.6666H9.33333C7 18.6666 6 17.3333 6 15.3333V9.66659C6 7.66659 7 6.33325 9.33333 6.33325H14.6667C17 6.33325 18 7.66659 18 9.66659Z"
                                                        stroke="white" stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M14.463 13.1334H14.469" stroke="white"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M14.463 15.1334H14.469" stroke="white"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M11.9972 13.1334H12.0031" stroke="white"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M11.9972 15.1334H12.0031" stroke="white"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M9.52938 13.1334H9.53537" stroke="white"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M9.52938 15.1334H9.53537" stroke="white"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <span>
                                                    <?php echo get_the_date('d/m/Y'); ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                    <?php
                        }
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$featured_news = get_field("featured_news", "category_" . $category_id) ?? [];
if ($featured_news) {
    $args = [
        'post_type' => 'post',
        'post__in' => $featured_news, // Chỉ lấy các bài viết trong danh sách
        'orderby' => 'post__in', // Giữ nguyên thứ tự ID trong mảng
        'posts_per_page' => count($featured_news), // Lấy đúng số lượng bài viết
    ];
    $query = new WP_Query($args);

    if ($query->have_posts()) {
?>
        <div class="tin_noi_bat_section">
            <div class="container">
                <h2 class="highlight-news__title">
                    <?php echo LANG == 'en' ? 'FEATURED NEWS' : 'Tin Nổi bật'; ?>
                </h2>
                <div>
                    <div class="tin_noi_bat_slider">
                        <?php
                        while ($query->have_posts()) {
                            $query->the_post();
                            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            $categories = get_the_category($post_id);
                        ?>
                            <div>
                                <div class="tin_noi_bat_item">
                                    <a href="<?php echo get_permalink(); ?>" class="highlight-news-item">
                                        <img class="highlight-news-item__image" src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>">
                                        <div class="highlight-news-item__content">
                                            <h3 class="highlight-news-item__title">
                                                <?php the_title(); ?>
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
                                                            <?php echo get_the_date('d/m/Y'); ?>
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
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
    wp_reset_postdata();
}
