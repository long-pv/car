<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package car_theme
 */

?>
</main>
<!-- end main body -->

<!-- footer -->
<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="<?php echo home_url(); ?>" class="footer_logo">
                    <?php $logo_url = CHILD_URI . '/assets/images/logo_footer.svg'; ?>
                    <img src="<?php echo $logo_url; ?>" alt="logo">
                </a>
            </div>
            <div class="col-lg-8">
                <div class="row footer_row_menu">
                    <!-- <div class="col-lg-5"></div> -->
                    <div class="col-lg-8">
                        <?php
                        if (has_nav_menu('menu-footer')) {
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-footer',
                                    'container' => 'div',
                                    'container_class' => 'footer_menu',
                                    'depth' => 1,
                                )
                            );
                        }
                        ?>
                    </div>
                    <div class="col-lg-4">
                        <?php
                        if (LANG == 'en') {
                            $social_network = get_field('social_network_en', 'option') ?? null;
                        } else {
                            $social_network = get_field('social_network', 'option') ?? null;
                        }
                        $facebook = $social_network['facebook'] ?? '';
                        $youtube = $social_network['youtube'] ?? '';
                        $tiktok = $social_network['tiktok'] ?? '';
                        ?>
                        <div class="footer_mxh">
                            <?php if (!empty($facebook)) : ?>
                                <a href="<?php echo $facebook; ?>" target="_blank" class="footer_mxh_item">
                                    <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_103_4823)">
                                            <path d="M32.1946 16.5C32.1946 7.6625 25.0321 0.5 16.1946 0.5C7.35708 0.5 0.19458 7.6625 0.19458 16.5C0.19458 24.4875 6.04458 31.1062 13.6946 32.3062V21.125H9.63208V16.5H13.6946V12.975C13.6946 8.96563 16.0821 6.75 19.7383 6.75C21.4883 6.75 23.3196 7.0625 23.3196 7.0625V11H21.3008C19.3133 11 18.6946 12.2344 18.6946 13.5V16.5H23.1321L22.4227 21.125H18.6946V32.3062C26.3446 31.1062 32.1946 24.4875 32.1946 16.5Z" fill="#1877F2" />
                                            <path d="M22.4227 21.125L23.1321 16.5H18.6946V13.5C18.6946 12.2344 19.3133 11 21.3008 11H23.3196V7.0625C23.3196 7.0625 21.4883 6.75 19.7383 6.75C16.0821 6.75 13.6946 8.96563 13.6946 12.975V16.5H9.63208V21.125H13.6946V32.3062C14.5102 32.4344 15.3446 32.5 16.1946 32.5C17.0446 32.5 17.879 32.4344 18.6946 32.3062V21.125H22.4227Z" fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_103_4823">
                                                <rect width="32" height="32" fill="white" transform="translate(0.19458 0.5)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            <?php endif; ?>

                            <?php if (!empty($youtube)) : ?>
                                <a href="<?php echo $youtube; ?>" target=" _blank" class="footer_mxh_item">
                                    <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.19458 16.5C0.19458 7.66344 7.35802 0.5 16.1946 0.5C25.0311 0.5 32.1946 7.66344 32.1946 16.5C32.1946 25.3366 25.0311 32.5 16.1946 32.5C7.35802 32.5 0.19458 25.3366 0.19458 16.5Z" fill="#FF0000" />
                                        <path d="M24.3713 12.5488C24.175 11.7948 23.5967 11.201 22.8623 10.9995C21.5315 10.6333 16.1946 10.6333 16.1946 10.6333C16.1946 10.6333 10.8577 10.6333 9.52676 10.9995C8.79241 11.201 8.21408 11.7948 8.01781 12.5488C7.66125 13.9153 7.66125 16.7666 7.66125 16.7666C7.66125 16.7666 7.66125 19.6178 8.01781 20.9845C8.21408 21.7385 8.79241 22.3322 9.52676 22.5338C10.8577 22.9 16.1946 22.9 16.1946 22.9C16.1946 22.9 21.5315 22.9 22.8623 22.5338C23.5967 22.3322 24.175 21.7385 24.3713 20.9845C24.7279 19.6178 24.7279 16.7666 24.7279 16.7666C24.7279 16.7666 24.7279 13.9153 24.3713 12.5488Z" fill="white" />
                                        <path d="M14.5946 19.7V14.3667L18.8613 17.0335L14.5946 19.7Z" fill="#FF0000" />
                                    </svg>
                                </a>
                            <?php endif; ?>

                            <?php if (!empty($tiktok)) : ?>
                                <a href="<?php echo $tiktok; ?>" target="_blank" class="footer_mxh_item">
                                    <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_103_4825)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.205 13.1002V11.8521C12.7718 11.7908 12.335 11.7589 11.8975 11.7568C6.54729 11.7568 2.19458 16.1103 2.19458 21.4605C2.19458 24.7424 3.83482 27.6476 6.33695 29.4044C4.66156 27.6127 3.73013 25.251 3.73148 22.798C3.73148 17.524 7.96033 13.2234 13.205 13.1002Z" fill="#00F2EA" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4336 27.229C15.8207 27.229 17.768 25.33 17.8567 22.9635L17.8648 1.83755H21.7242C21.6418 1.39645 21.6001 0.948723 21.5996 0.5H16.3286L16.3198 21.6267C16.2319 23.9925 14.2838 25.8907 11.8975 25.8907C11.181 25.891 10.4753 25.7164 9.84167 25.382C10.2508 25.9529 10.79 26.4181 11.4146 26.7393C12.0392 27.0604 12.7313 27.2283 13.4336 27.229ZM28.9338 9.00827V7.83416C27.5154 7.83548 26.1275 7.42284 24.9402 6.64686C25.9811 7.84537 27.3827 8.67396 28.9345 9.00827" fill="#00F2EA" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.9402 6.64622C23.7766 5.31488 23.1357 3.60652 23.1365 1.83838H21.7242C21.9071 2.81567 22.2864 3.74568 22.8392 4.57209C23.3919 5.3985 24.1067 6.10412 24.9402 6.64622ZM11.8974 17.0285C10.7226 17.0299 9.59636 17.4972 8.76566 18.3279C7.93495 19.1586 7.46767 20.2849 7.46631 21.4597C7.46709 22.2678 7.68871 23.0603 8.10723 23.7517C8.52574 24.443 9.12523 25.0068 9.84091 25.3821C9.29599 24.6307 9.00253 23.7262 9.00247 22.7979C9.00364 21.623 9.47084 20.4965 10.3016 19.6657C11.1323 18.8348 12.2587 18.3674 13.4336 18.3661C13.8902 18.3661 14.3277 18.4416 14.7411 18.5713V13.1896C14.3079 13.1282 13.8711 13.0964 13.4336 13.0943C13.3566 13.0943 13.2812 13.0987 13.2049 13.1002V17.2337C12.7821 17.0991 12.3412 17.0299 11.8974 17.0285Z" fill="#FF004F" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M28.9338 9.00806V13.105C26.2 13.105 23.6679 12.2306 21.5996 10.7465V21.4593C21.5996 26.8095 17.2476 31.1622 11.8974 31.1622C9.82993 31.1622 7.91265 30.51 6.33691 29.4033C7.24285 30.3802 8.34082 31.1596 9.56199 31.6924C10.7832 32.2252 12.1012 32.5001 13.4336 32.4998C18.7838 32.4998 23.1365 28.1471 23.1365 22.7976V12.0848C25.2731 13.6212 27.839 14.4463 30.4707 14.4433V9.17076C29.943 9.17076 29.4299 9.1136 28.9338 9.00732" fill="#FF004F" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5996 21.4597V10.7468C23.7361 12.2834 26.3021 13.1085 28.9338 13.1053V9.00837C27.3821 8.67371 25.9808 7.84487 24.9402 6.64622C24.1067 6.10412 23.392 5.3985 22.8392 4.57209C22.2864 3.74568 21.9071 2.81567 21.7242 1.83838H17.8647L17.8567 22.9643C17.768 25.3301 15.8207 27.2291 13.4336 27.2291C12.7313 27.2283 12.0392 27.0605 11.4146 26.7393C10.79 26.4181 10.2509 25.9529 9.84166 25.3821C9.12584 25.0069 8.5262 24.4431 8.10755 23.7518C7.6889 23.0605 7.46717 22.2679 7.46632 21.4597C7.46768 20.2849 7.93496 19.1586 8.76567 18.3279C9.59637 17.4972 10.7227 17.0299 11.8974 17.0285C12.3533 17.0285 12.7909 17.1033 13.2049 17.2337V13.1002C7.96029 13.2233 3.73145 17.524 3.73145 22.7979C3.73145 25.3484 4.72233 27.6703 6.33691 29.4043C7.96459 30.5501 9.90691 31.1643 11.8974 31.1625C17.2476 31.1625 21.5996 26.8098 21.5996 21.4597Z" fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_103_4825">
                                                <rect width="32" height="32" fill="white" transform="translate(0.19458 0.5)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="footer_lien_he mt-4">
                            <div class="footer_title">
                                <?php echo LANG == 'en' ? 'Contact Information' : 'Thông tin liên hệ'; ?>
                            </div>
                            <?php
                            if (LANG == 'en') {
                                $contact_information = get_field('contact_information_en', 'option') ?? null;
                            } else {
                                $contact_information = get_field('contact_information', 'option') ?? null;
                            }
                            $phone = $contact_information['phone'] ?? '';
                            $mail = $contact_information['mail'] ?? '';
                            $address = $contact_information['address'] ?? '';
                            ?>

                            <div class="footer_contact">
                                <?php if (!empty($phone)) : ?>
                                    <div class="footer_contact_item">
                                        <div class="icon">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.2445 15.45L9.39452 17.3C9.00452 17.69 8.38452 17.69 7.98452 17.31C7.87452 17.2 7.76452 17.1 7.65452 16.99C6.62452 15.95 5.69452 14.86 4.86452 13.72C4.04452 12.58 3.38452 11.44 2.90452 10.31C2.43452 9.17 2.19452 8.08 2.19452 7.04C2.19452 6.36 2.31452 5.71 2.55452 5.11C2.79452 4.5 3.17452 3.94 3.70452 3.44C4.34452 2.81 5.04452 2.5 5.78452 2.5C6.06452 2.5 6.34452 2.56 6.59452 2.68C6.85452 2.8 7.08452 2.98 7.26452 3.24L9.58452 6.51C9.76452 6.76 9.89452 6.99 9.98452 7.21C10.0745 7.42 10.1245 7.63 10.1245 7.82C10.1245 8.06 10.0545 8.3 9.91452 8.53C9.78452 8.76 9.59452 9 9.35452 9.24L8.59452 10.03C8.48452 10.14 8.43452 10.27 8.43452 10.43C8.43452 10.51 8.44452 10.58 8.46452 10.66C8.49452 10.74 8.52452 10.8 8.54452 10.86C8.72452 11.19 9.03452 11.62 9.47452 12.14C9.92452 12.66 10.4045 13.19 10.9245 13.72C11.0245 13.82 11.1345 13.92 11.2345 14.02C11.6345 14.41 11.6445 15.05 11.2445 15.45Z" fill="white" />
                                                <path d="M22.1645 18.83C22.1645 19.11 22.1145 19.4 22.0145 19.68C21.9845 19.76 21.9545 19.84 21.9145 19.92C21.7445 20.28 21.5245 20.62 21.2345 20.94C20.7445 21.48 20.2045 21.87 19.5945 22.12C19.5845 22.12 19.5745 22.13 19.5645 22.13C18.9745 22.37 18.3345 22.5 17.6445 22.5C16.6245 22.5 15.5345 22.26 14.3845 21.77C13.2345 21.28 12.0845 20.62 10.9445 19.79C10.5545 19.5 10.1645 19.21 9.79449 18.9L13.0645 15.63C13.3445 15.84 13.5945 16 13.8045 16.11C13.8545 16.13 13.9145 16.16 13.9845 16.19C14.0645 16.22 14.1445 16.23 14.2345 16.23C14.4045 16.23 14.5345 16.17 14.6445 16.06L15.4045 15.31C15.6545 15.06 15.8945 14.87 16.1245 14.75C16.3545 14.61 16.5845 14.54 16.8345 14.54C17.0245 14.54 17.2245 14.58 17.4445 14.67C17.6645 14.76 17.8945 14.89 18.1445 15.06L21.4545 17.41C21.7145 17.59 21.8945 17.8 22.0045 18.05C22.1045 18.3 22.1645 18.55 22.1645 18.83Z" fill="white" />
                                            </svg>
                                        </div>
                                        <a class="link" href="tel:<?php echo esc_attr($phone); ?>">
                                            <?php echo esc_html($phone); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($mail)) : ?>
                                    <div class="footer_contact_item">
                                        <div class="icon">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.1945 4H7.19452C4.19452 4 2.19452 5.5 2.19452 9V16C2.19452 19.5 4.19452 21 7.19452 21H17.1945C20.1945 21 22.1945 19.5 22.1945 16V9C22.1945 5.5 20.1945 4 17.1945 4ZM17.6645 10.09L14.5345 12.59C13.8745 13.12 13.0345 13.38 12.1945 13.38C11.3545 13.38 10.5045 13.12 9.85452 12.59L6.72452 10.09C6.40452 9.83 6.35452 9.35 6.60452 9.03C6.86452 8.71 7.33452 8.65 7.65452 8.91L10.7845 11.41C11.5445 12.02 12.8345 12.02 13.5945 11.41L16.7245 8.91C17.0445 8.65 17.5245 8.7 17.7745 9.03C18.0345 9.35 17.9845 9.83 17.6645 10.09Z" fill="white" />
                                            </svg>
                                        </div>
                                        <a class="link" href="mailto:<?php echo esc_attr($mail); ?>">
                                            <?php echo esc_html($mail); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($address)) : ?>
                                    <div class="footer_contact_item">
                                        <div class="icon">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20.8145 8.95C19.7645 4.33 15.7345 2.25 12.1945 2.25C12.1945 2.25 12.1945 2.25 12.1845 2.25C8.65449 2.25 4.61449 4.32 3.56449 8.94C2.39449 14.1 5.55449 18.47 8.41449 21.22C9.47449 22.24 10.8345 22.75 12.1945 22.75C13.5545 22.75 14.9145 22.24 15.9645 21.22C18.8245 18.47 21.9845 14.11 20.8145 8.95ZM12.1945 13.96C10.4545 13.96 9.04449 12.55 9.04449 10.81C9.04449 9.07 10.4545 7.66 12.1945 7.66C13.9345 7.66 15.3445 9.07 15.3445 10.81C15.3445 12.55 13.9345 13.96 12.1945 13.96Z" fill="white" />
                                            </svg>
                                        </div>
                                        <div class="text">
                                            <?php echo esc_html($address); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_bottom">
        <div class="container">
            <?php
            if (LANG == 'en') {
                $policy_page = get_field('policy_page_en', 'option') ?? [];
            } else {
                $policy_page = get_field('policy_page', 'option') ?? [];
            }
            if (!empty($policy_page) && is_array($policy_page)) {
                $links = [];

                foreach ($policy_page as $item) {
                    if (isset($item['link']['title'], $item['link']['url'])) {
                        $page_title = esc_html($item['link']['title']);
                        $page_link = esc_url($item['link']['url']);

                        $links[] = '<a href="' . $page_link . '">' . $page_title . '</a>';
                    }
                }

                if (!empty($links)) {
                    echo '<div class="footer_policy">' . implode(' | ', $links) . '</div>';
                }
            }
            ?>

            <?php
            if (LANG == 'en') {
                $copyright = get_field('copyright_en', 'option') ?? null;
            } else {
                $copyright = get_field('copyright', 'option') ?? null;
            }
            if ($copyright):
            ?>
                <div class="copyright">
                    <?php echo  $copyright; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</footer>
<!-- end footer -->

<!-- Modal -->
<?php
if (LANG == 'en') {
    $form_hop_tac = get_field('lead_form_3_en', 'option') ?? null;
} else {
    $form_hop_tac = get_field('lead_form_3', 'option') ?? null;
}
if ($form_hop_tac):
?>
    <div class="modal fade modal_custom" id="form_hop_tac" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal_custom_dialog">
            <div class="modal-content modal_custom_content">
                <div class="modal-body modal_custom_body">
                    <?php echo do_shortcode('[contact-form-7 id="' . $form_hop_tac . '" class="form_ctf7]'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal_custom" id="form_hop_tac_thanh_cong" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal_custom_dialog">
            <div class="modal-content modal_custom_content">
                <div class="modal-body modal_custom_body">
                    <div class="form_thanh_cong">
                        <div class="icon">
                            <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_359_51966)">
                                    <path d="M111.224 45.1539C112.717 50.2954 113.455 55.7567 113.309 61.4057C112.572 89.8865 88.3847 113.382 59.8941 113.326C30.5795 113.269 6.7393 89.4347 6.67273 60.1222C6.60616 30.729 30.5053 6.7273 59.8985 6.67273C72.2355 6.64981 83.6121 10.8375 92.6684 17.878C93.8613 18.8057 95.5377 18.7926 96.7295 17.8627C96.7469 17.8485 96.7655 17.8343 96.783 17.8201C98.4801 16.4952 98.4943 13.9206 96.795 12.5979C92.6848 9.39792 88.1872 6.75895 83.3556 4.71588C75.9561 1.58578 68.0981 0 60 0C51.9019 0 44.0439 1.58578 36.6444 4.71697C29.4991 7.73901 23.0839 12.0642 17.5746 17.5735C12.0653 23.0828 7.73901 29.4991 4.71806 36.6433C1.58687 44.0439 0 51.9019 0 60C0 68.0981 1.58687 75.9561 4.71697 83.3567C7.73901 90.502 12.0642 96.9172 17.5735 102.427C23.0828 107.936 29.4991 112.262 36.6433 115.283C44.0439 118.413 51.9019 120 59.9989 120C68.0959 120 75.955 118.414 83.3556 115.283C90.5009 112.261 96.9161 107.936 102.425 102.427C107.935 96.9172 112.261 90.5009 115.282 83.3567C118.412 75.9561 119.999 68.0981 119.999 60C119.999 54.2604 119.201 48.642 117.623 43.221C116.917 40.796 113.851 40.0397 112.084 41.8437C112.067 41.8612 112.049 41.8786 112.032 41.8972C111.191 42.7561 110.888 44.0003 111.223 45.155L111.224 45.1539Z" fill="#2FC816" />
                                    <path d="M58.0079 70.1738C65.8146 58.173 94.5278 27.2813 118.34 11.2336C119.351 10.5525 120.493 11.8895 119.655 12.7757C97.0336 36.665 72.854 63.6866 58.9672 87.0532C58.5809 87.7037 57.6466 87.7266 57.2428 87.087C50.2547 76.0182 44.2619 60.1069 31.4152 55.2317C30.4613 54.8693 30.553 53.5204 31.5451 53.2814C43.8559 50.315 49.6239 60.8436 58.009 70.1738V70.1749L58.0079 70.1738Z" fill="#2FC816" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_359_51966">
                                        <rect width="120" height="120" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>

                        <div class="title">
                            <?php
                            if (LANG == 'en') {
                                echo "Successfully submitted information!";
                            } else {
                                echo "Gửi Thông tin thành công!";
                            }
                            ?>
                        </div>
                        <div class="desc">
                            <?php
                            if (LANG == 'en') {
                                echo "Thank you for trusting us and choosing us as your partner. We hope that in the near future, we can work together to develop the automotive service community. Please keep your phone on";
                            } else {
                                echo "Cảm ơn quý anh/chị đã tin tưởng lựa chọn CarDoctor làm đối tác , hy vọng trong tương lai không xa chúng ta sẽ cùng nhau phát triển cộng đồng dịch vụ ô tô , vui lòng để ý điện thoại";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php
if (LANG == 'en') {
    $form_ung_tuyen = get_field('lead_form_1_en', 'option') ?? null;
} else {
    $form_ung_tuyen = get_field('lead_form_1', 'option') ?? null;
}
if ($form_ung_tuyen):
?>
    <div class="modal fade modal_custom" id="form_ung_tuyen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal_custom_dialog">
            <div class="modal-content modal_custom_content">
                <div class="modal-body modal_custom_body">
                    <?php echo do_shortcode('[contact-form-7 id="' . $form_ung_tuyen . '" class="form_ctf7]'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal_custom" id="form_ung_tuyen_thanh_cong" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal_custom_dialog">
            <div class="modal-content modal_custom_content">
                <div class="modal-body modal_custom_body">
                    <div class="form_thanh_cong">
                        <div class="icon">
                            <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_359_51966)">
                                    <path d="M111.224 45.1539C112.717 50.2954 113.455 55.7567 113.309 61.4057C112.572 89.8865 88.3847 113.382 59.8941 113.326C30.5795 113.269 6.7393 89.4347 6.67273 60.1222C6.60616 30.729 30.5053 6.7273 59.8985 6.67273C72.2355 6.64981 83.6121 10.8375 92.6684 17.878C93.8613 18.8057 95.5377 18.7926 96.7295 17.8627C96.7469 17.8485 96.7655 17.8343 96.783 17.8201C98.4801 16.4952 98.4943 13.9206 96.795 12.5979C92.6848 9.39792 88.1872 6.75895 83.3556 4.71588C75.9561 1.58578 68.0981 0 60 0C51.9019 0 44.0439 1.58578 36.6444 4.71697C29.4991 7.73901 23.0839 12.0642 17.5746 17.5735C12.0653 23.0828 7.73901 29.4991 4.71806 36.6433C1.58687 44.0439 0 51.9019 0 60C0 68.0981 1.58687 75.9561 4.71697 83.3567C7.73901 90.502 12.0642 96.9172 17.5735 102.427C23.0828 107.936 29.4991 112.262 36.6433 115.283C44.0439 118.413 51.9019 120 59.9989 120C68.0959 120 75.955 118.414 83.3556 115.283C90.5009 112.261 96.9161 107.936 102.425 102.427C107.935 96.9172 112.261 90.5009 115.282 83.3567C118.412 75.9561 119.999 68.0981 119.999 60C119.999 54.2604 119.201 48.642 117.623 43.221C116.917 40.796 113.851 40.0397 112.084 41.8437C112.067 41.8612 112.049 41.8786 112.032 41.8972C111.191 42.7561 110.888 44.0003 111.223 45.155L111.224 45.1539Z" fill="#2FC816" />
                                    <path d="M58.0079 70.1738C65.8146 58.173 94.5278 27.2813 118.34 11.2336C119.351 10.5525 120.493 11.8895 119.655 12.7757C97.0336 36.665 72.854 63.6866 58.9672 87.0532C58.5809 87.7037 57.6466 87.7266 57.2428 87.087C50.2547 76.0182 44.2619 60.1069 31.4152 55.2317C30.4613 54.8693 30.553 53.5204 31.5451 53.2814C43.8559 50.315 49.6239 60.8436 58.009 70.1738V70.1749L58.0079 70.1738Z" fill="#2FC816" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_359_51966">
                                        <rect width="120" height="120" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>

                        <div class="title">
                            <?php
                            if (LANG == 'en') {
                                echo "Successfully submitted information!";
                            } else {
                                echo "Gửi Thông tin thành công!";
                            }
                            ?>
                        </div>
                        <div class="desc">
                            <?php
                            if (LANG == 'en') {
                                echo "Thank you for applying to our company. We will review your resume and assess it, then notify you of the result. Please keep an eye on your phone or email";
                            } else {
                                echo "Cảm ơn bạn đã ứng tuyển vào CarDoctor , chúng tôi sẽ kiểm tra hồ sơ và đánh giá sau đó sẽ thông báo kết quả , vui lòng để ý điện thoại hoặc email của mình";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php
if (LANG == 'en') {
    $form_thong_tin = get_field('lead_form_2_en', 'option') ?? null;
} else {
    $form_thong_tin = get_field('lead_form_2', 'option') ?? null;
}
if ($form_thong_tin):
?>
    <div class="modal fade modal_custom" id="form_thong_tin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal_custom_dialog">
            <div class="modal-content modal_custom_content">
                <div class="modal-body modal_custom_body">
                    <?php echo do_shortcode('[contact-form-7 id="' . $form_thong_tin . '" class="form_ctf7]'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal_custom" id="form_thong_tin_thanh_cong" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal_custom_dialog">
            <div class="modal-content modal_custom_content">
                <div class="modal-body modal_custom_body">
                    <div class="form_thanh_cong">
                        <div class="icon">
                            <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_359_51966)">
                                    <path d="M111.224 45.1539C112.717 50.2954 113.455 55.7567 113.309 61.4057C112.572 89.8865 88.3847 113.382 59.8941 113.326C30.5795 113.269 6.7393 89.4347 6.67273 60.1222C6.60616 30.729 30.5053 6.7273 59.8985 6.67273C72.2355 6.64981 83.6121 10.8375 92.6684 17.878C93.8613 18.8057 95.5377 18.7926 96.7295 17.8627C96.7469 17.8485 96.7655 17.8343 96.783 17.8201C98.4801 16.4952 98.4943 13.9206 96.795 12.5979C92.6848 9.39792 88.1872 6.75895 83.3556 4.71588C75.9561 1.58578 68.0981 0 60 0C51.9019 0 44.0439 1.58578 36.6444 4.71697C29.4991 7.73901 23.0839 12.0642 17.5746 17.5735C12.0653 23.0828 7.73901 29.4991 4.71806 36.6433C1.58687 44.0439 0 51.9019 0 60C0 68.0981 1.58687 75.9561 4.71697 83.3567C7.73901 90.502 12.0642 96.9172 17.5735 102.427C23.0828 107.936 29.4991 112.262 36.6433 115.283C44.0439 118.413 51.9019 120 59.9989 120C68.0959 120 75.955 118.414 83.3556 115.283C90.5009 112.261 96.9161 107.936 102.425 102.427C107.935 96.9172 112.261 90.5009 115.282 83.3567C118.412 75.9561 119.999 68.0981 119.999 60C119.999 54.2604 119.201 48.642 117.623 43.221C116.917 40.796 113.851 40.0397 112.084 41.8437C112.067 41.8612 112.049 41.8786 112.032 41.8972C111.191 42.7561 110.888 44.0003 111.223 45.155L111.224 45.1539Z" fill="#2FC816" />
                                    <path d="M58.0079 70.1738C65.8146 58.173 94.5278 27.2813 118.34 11.2336C119.351 10.5525 120.493 11.8895 119.655 12.7757C97.0336 36.665 72.854 63.6866 58.9672 87.0532C58.5809 87.7037 57.6466 87.7266 57.2428 87.087C50.2547 76.0182 44.2619 60.1069 31.4152 55.2317C30.4613 54.8693 30.553 53.5204 31.5451 53.2814C43.8559 50.315 49.6239 60.8436 58.009 70.1738V70.1749L58.0079 70.1738Z" fill="#2FC816" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_359_51966">
                                        <rect width="120" height="120" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>

                        <div class="title">
                            <?php
                            if (LANG == 'en') {
                                echo "Successfully submitted information!";
                            } else {
                                echo "Gửi Thông tin thành công!";
                            }
                            ?>
                        </div>
                        <div class="desc">
                            <?php
                            if (LANG == 'en') {
                                echo " Thank you for submitting your information to CarDoctor. We will search for relevant information based on the details you provided. Please keep an eye on your phone.";
                            } else {
                                echo "Cảm ơn quý khách đã gửi thông tin cho CarDoctor , chúng tôi sẽ tìm kiếm thông tin phù hợp với những thông tin mà quý khách cung cấp , vui lòng để ý điện thoại";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php wp_footer(); ?>

<script>
    (function($, window) {
        document.addEventListener("DOMContentLoaded", function() {
            document.addEventListener(
                "wpcf7mailsent",
                function(event) {
                    <?php
                    $page_id = get_the_ID();
                    if (LANG == 'en') {
                        $page_thong_tin = get_field('page_lead_form_2_en', 'option') ?? null;
                    } else {
                        $page_thong_tin = get_field('page_lead_form_2', 'option') ?? null;
                    }
                    if ($page_thong_tin == $page_id) {
                    ?>
                        $("#form_thong_tin").modal("hide");
                        $("#form_thong_tin_thanh_cong").modal("show");
                    <?php
                    }
                    ?>

                    <?php
                    if (LANG == 'en') {
                        $page_ung_tuyen = get_field('page_lead_form_1_en', 'option') ?? null;
                    } else {
                        $page_ung_tuyen = get_field('page_lead_form_1', 'option') ?? null;
                    }
                    if ($page_ung_tuyen == $page_id) {
                    ?>
                        $("#form_ung_tuyen").modal("hide");
                        $("#form_ung_tuyen_thanh_cong").modal("show");
                    <?php
                    }
                    ?>

                    <?php
                    if (LANG == 'en') {
                        $page_hop_tac = get_field('page_lead_form_3_en', 'option') ?? null;
                    } else {
                        $page_hop_tac = get_field('page_lead_form_3', 'option') ?? null;
                    }
                    if ($page_hop_tac == $page_id) {
                    ?>
                        $("#form_hop_tac").modal("hide");
                        $("#form_hop_tac_thanh_cong").modal("show");
                    <?php
                    }
                    ?>
                },
                false
            );
        });
    })(jQuery, window);
</script>

</body>

</html>