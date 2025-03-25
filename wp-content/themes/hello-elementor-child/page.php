<?php
get_header();
?>
<div class="container">
    <div class="page_inner">
        <h1 class="page_title">
            <?php the_title(); ?>
        </h1>
        <div class="page_content">
            <div class="editor">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
