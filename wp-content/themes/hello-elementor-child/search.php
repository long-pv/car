<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package basetheme
 */

// wp_redirect(home_url());
// exit;
get_header();
?>
<section class="search__secSpace">
    <div class="container">
        <!--  -->
        <div class="search__header">
            <h1 class="search__title">
                <?php echo LANG == 'en' ? 'News' : 'Tin tức'; ?>
            </h1>
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19.5 29C24.7467 29 29 24.7467 29 19.5C29 14.2533 24.7467 10 19.5 10C14.2533 10 10 14.2533 10 19.5C10 24.7467 14.2533 29 19.5 29Z"
                    stroke="#354764" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M30 30L28 28" stroke="#354764" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
        <!--  -->
        <span class="search__result">
            <?php echo $wp_query->found_posts; ?> <?php echo LANG == 'en' ? 'result' : 'kết quả'; ?>
        </span>
        <div class="search__line"></div>
        <!--  -->
        <div class="search-news">
            <div class="row search-news__gap">
                <?php if (have_posts()):
                    while (have_posts()): the_post(); ?>
                        <div class="search-news-item">
                            <div class="row">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <a href="<?php the_permalink(); ?>" class="search-news-item__image">
                                        <?php if (has_post_thumbnail()): ?>
                                            <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">
                                        <?php else: ?>
                                            <img src="/path/to/default-image.jpg" alt="No Image Available">
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="col-12 col-md-8 col-lg-10">
                                    <div class="search-news-item__content">
                                        <a href="<?php the_permalink(); ?>" class="search-news-item__title">
                                            <h3 class="line-2"> <?php the_title(); ?> </h3>
                                        </a>
                                        <p class="search-news-item__desc">
                                            <?php echo get_the_excerpt(); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                else: ?>
                    <p>Không tìm thấy kết quả phù hợp.</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Pagination -->
        <?php pagination(); ?>
    </div>
</section>

<?php
get_footer();
