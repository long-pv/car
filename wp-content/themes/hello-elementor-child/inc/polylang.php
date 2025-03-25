<?php
function polylang_dropdown_scripts()
{
    if (function_exists('pll_the_languages')) {
        wp_enqueue_script('dev_theme-script-switch_lang', CHILD_URI . '/assets/js/polylang_dropdown.js', array('jquery'), _S_VERSION, true);
    }
}
add_action('wp_enqueue_scripts', 'polylang_dropdown_scripts');

function switch_lang()
{
    if (function_exists('pll_the_languages')):
?>
        <div class="switchLang">
            <ul class="switchLang__list">
                <?php
                pll_the_languages(
                    array(
                        'show_flags' => 1,
                        'show_names' => 1,
                        'hide_if_empty' => 0,
                        'display_names_as' => 'slug',
                    )
                );
                ?>
            </ul>
        </div>
<?php
    endif;
}
