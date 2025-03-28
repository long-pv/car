<?php
get_header();
?>

<!-- viết html ở đây -->
<div class="banner-news">
    <div class="banner__overlay"></div>
    <?php
    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
    if (!$thumbnail_url) {
        $thumbnail_url = CHILD_URI . "/assets/images/Banner-news.png";
    }
    ?>
    <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>" class="banner__image" />

    <div class="banner__inner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="banner__content">
                        <h1 class="banner__title"><?php the_title(); ?></h1>
                        <ul class="banner__meta">
                            <li class="banner__date"><?php echo get_the_date('d/m/Y'); ?> | <?php echo get_the_time('H:i'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single_content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="editor">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

        <div class="share">
            <div class="share__inner">
                <h2 class="share__title">
                    <?php echo LANG == 'en' ? 'Share now' : ' Chia sẻ ngay'; ?>
                </h2>
                <?php
                $share_link = get_permalink();
                ?>
                <div class="social_share_post">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_link; ?>"
                        onclick="window.open(this.href, this.target, 'width=500,height=500'); return false;"
                        class="social_share_post_facebook">
                        <span class="social_share_post_icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_210_18610)">
                                    <path
                                        d="M32 16C32 7.1625 24.8375 0 16 0C7.1625 0 0 7.1625 0 16C0 23.9875 5.85 30.6062 13.5 31.8062V20.625H9.4375V16H13.5V12.475C13.5 8.46563 15.8875 6.25 19.5438 6.25C21.2938 6.25 23.125 6.5625 23.125 6.5625V10.5H21.1063C19.1188 10.5 18.5 11.7344 18.5 13V16H22.9375L22.2281 20.625H18.5V31.8062C26.15 30.6062 32 23.9875 32 16Z"
                                        fill="#1877F2" />
                                    <path
                                        d="M22.2281 20.625L22.9375 16H18.5V13C18.5 11.7344 19.1188 10.5 21.1063 10.5H23.125V6.5625C23.125 6.5625 21.2938 6.25 19.5438 6.25C15.8875 6.25 13.5 8.46563 13.5 12.475V16H9.4375V20.625H13.5V31.8062C14.3156 31.9344 15.15 32 16 32C16.85 32 17.6844 31.9344 18.5 31.8062V20.625H22.2281Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_210_18610">
                                        <rect width="32" height="32" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </a>

                    <a href="https://www.youtube.com/share?url=<?php echo urlencode($share_link); ?>"
                        onclick="window.open(this.href, this.target, 'width=500,height=500'); return false;"
                        class="social_share_post_youtube">
                        <span class="social_share_post_icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16Z" fill="#FF0000" />
                                <path d="M24.1768 12.0488C23.9805 11.2948 23.4022 10.701 22.6679 10.4995C21.3371 10.1333 16.0001 10.1333 16.0001 10.1333C16.0001 10.1333 10.6632 10.1333 9.3323 10.4995C8.59795 10.701 8.01962 11.2948 7.82335 12.0488C7.4668 13.4153 7.4668 16.2666 7.4668 16.2666C7.4668 16.2666 7.4668 19.1178 7.82335 20.4845C8.01962 21.2385 8.59795 21.8322 9.3323 22.0338C10.6632 22.4 16.0001 22.4 16.0001 22.4C16.0001 22.4 21.3371 22.4 22.6679 22.0338C23.4022 21.8322 23.9805 21.2385 24.1768 20.4845C24.5335 19.1178 24.5335 16.2666 24.5335 16.2666C24.5335 16.2666 24.5335 13.4153 24.1768 12.0488Z" fill="white" />
                                <path d="M14.4004 19.2V13.8667L18.6671 16.5335L14.4004 19.2Z" fill="#FF0000" />
                            </svg>
                        </span>
                    </a>

                    <a href="https://www.tiktok.com/share?url=<?php echo urlencode($share_link); ?>"
                        onclick="window.open(this.href, this.target, 'width=500,height=500'); return false;"
                        class="social_share_post_tiktok">
                        <span class="social_share_post_icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_210_18612)">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0104 12.6V11.3519C12.5772 11.2905 12.1404 11.2587 11.7029 11.2566C6.35271 11.2566 2 15.61 2 20.9602C2 24.2422 3.64024 27.1474 6.14237 28.9042C4.46698 27.1125 3.53555 24.7507 3.5369 22.2978C3.5369 17.0238 7.76575 12.7231 13.0104 12.6Z" fill="#00F2EA" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2394 26.729C15.6265 26.729 17.5738 24.83 17.6625 22.4635L17.6705 1.33755H21.53C21.4476 0.896453 21.4059 0.448723 21.4054 0H16.1344L16.1256 21.1267C16.0376 23.4925 14.0896 25.3907 11.7033 25.3907C10.9868 25.391 10.2811 25.2164 9.64746 24.882C10.0566 25.4529 10.5958 25.9181 11.2204 26.2393C11.845 26.5604 12.5371 26.7283 13.2394 26.729ZM28.7396 8.50827V7.33416C27.3212 7.33548 25.9333 6.92284 24.746 6.14686C25.7869 7.34537 27.1885 8.17396 28.7403 8.50827" fill="#00F2EA" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.7454 6.14622C23.5818 4.81488 22.9409 3.10652 22.9417 1.33838H21.5294C21.7122 2.31567 22.0915 3.24568 22.6443 4.07209C23.1971 4.8985 23.9119 5.60412 24.7454 6.14622ZM11.7026 16.5285C10.5278 16.5299 9.40154 16.9972 8.57083 17.8279C7.74013 18.6586 7.27284 19.7849 7.27148 20.9597C7.27226 21.7678 7.49389 22.5603 7.9124 23.2517C8.33092 23.943 8.93041 24.5068 9.64609 24.8821C9.10116 24.1307 8.80771 23.2262 8.80765 22.2979C8.80881 21.123 9.27601 19.9965 10.1067 19.1657C10.9375 18.3348 12.0639 17.8674 13.2388 17.8661C13.6954 17.8661 14.1329 17.9416 14.5463 18.0713V12.6896C14.1131 12.6282 13.6763 12.5964 13.2388 12.5943C13.1618 12.5943 13.0863 12.5987 13.0101 12.6002V16.7337C12.5873 16.5991 12.1464 16.5299 11.7026 16.5285Z" fill="#FF004F" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M28.7394 8.5083V12.6052C26.0057 12.6052 23.4735 11.7309 21.4053 10.2467V20.9596C21.4053 26.3098 17.0533 30.6625 11.7031 30.6625C9.63559 30.6625 7.71832 30.0102 6.14258 28.9035C7.04852 29.8805 8.14648 30.6598 9.36766 31.1926C10.5888 31.7255 11.9069 32.0004 13.2393 32C18.5895 32 22.9422 27.6473 22.9422 22.2979V11.585C25.0788 13.1214 27.6447 13.9465 30.2763 13.9435V8.67101C29.7486 8.67101 29.2356 8.61384 28.7394 8.50757" fill="#FF004F" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.4053 20.9597V10.2468C23.5418 11.7834 26.1077 12.6085 28.7394 12.6053V8.50837C27.1878 8.17371 25.7865 7.34487 24.7458 6.14622C23.9124 5.60412 23.1976 4.8985 22.6448 4.07209C22.092 3.24568 21.7127 2.31567 21.5299 1.33838H17.6704L17.6623 22.4643C17.5737 24.8301 15.6263 26.7291 13.2393 26.7291C12.537 26.7283 11.8449 26.5605 11.2203 26.2393C10.5957 25.9181 10.0565 25.4529 9.64732 24.8821C8.9315 24.5069 8.33186 23.9431 7.91321 23.2518C7.49456 22.5605 7.27283 21.7679 7.27198 20.9597C7.27334 19.7849 7.74062 18.6586 8.57133 17.8279C9.40203 16.9972 10.5283 16.5299 11.7031 16.5285C12.159 16.5285 12.5965 16.6033 13.0106 16.7337V12.6002C7.76596 12.7233 3.53711 17.024 3.53711 22.2979C3.53711 24.8484 4.52799 27.1703 6.14258 28.9043C7.77025 30.0501 9.71258 30.6643 11.7031 30.6625C17.0533 30.6625 21.4053 26.3098 21.4053 20.9597Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_210_18612">
                                        <rect width="32" height="32" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="related_news">
    <div class="container">
        <h2 class="related_news_title">
            <?php echo LANG == 'en' ? 'RELATED NEWS' : 'TIN TỨC LIÊN QUAN'; ?>
        </h2>
        <?php
        $query_args = [
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'post_status'    => 'publish',
        ];

        $query = new WP_Query($query_args);

        if ($query->have_posts()) {
            echo '<div class="row">';
            while ($query->have_posts()) {
                $query->the_post();
                echo '<div class="col-lg-4">';
                get_template_part('template-parts/single_post');
                echo '</div>';
            }
            echo '</div>';
        }
        wp_reset_postdata();
        ?>
    </div>
</div>

<?php
get_footer();
