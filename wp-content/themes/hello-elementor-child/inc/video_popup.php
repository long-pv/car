<?php
function add_custom_video_popup_script()
{
?>
    <!-- modal video -->
    <div class="modal modalVideo fade" id="videoUrl" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close modalVideo__video" data-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 18L18 6" stroke="#333333" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M18 18L6 6" stroke="#333333" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>

                <div class="modal-body p-0">
                    <div class="embed-responsive embed-responsive-16by9 video">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            if ($("#videoUrl").length) {
                let videoSrc = "";
                let videoId = $("#video");
                let videoUrl = $("#videoUrl");

                // Add click event for each .videoBlock__playAction
                $(document).on("click", ".videoBlock__playAction", function(e) {
                    e.preventDefault();
                    videoSrc = $(this).data("src");
                });

                videoUrl.on("shown.bs.modal", function(e) {
                    videoId.attr("src", videoSrc + "?autoplay=1&mute=1&modestbranding=1&showinfo=0");
                });

                videoUrl.on("hide.bs.modal", function(e) {
                    videoId.attr("src", "");
                    videoSrc = "";
                });
            }
        });
    </script>
<?php
}
add_action('wp_footer', 'add_custom_video_popup_script', 99);

function getYoutubeEmbedUrl($input)
{
    if (filter_var($input, FILTER_VALIDATE_URL)) {
        return $input;
    }

    if (preg_match('/<iframe[^>]+src=["\']([^"\']+)["\']/i', $input, $matches)) {
        $url = $matches[1];
        $parsedUrl = parse_url($url);
        $cleanUrl = $parsedUrl['scheme'] . '://' . $parsedUrl['host'] . $parsedUrl['path'];

        return $cleanUrl;
    }

    return '';
}
