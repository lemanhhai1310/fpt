<div class="block_slider slide_hover uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: false">
    <ul class="uk-slideshow-items" uk-height-viewport="offset-top: true; offset-bottom: 0">
        <?php
        $data = array(
            array(
                "src" => "images/slider.png",
                "src1" => "images/anhdoc/Anh DOC 4.jpg",
            ),
            array(
                "src" => "images/slider.png",
                "src1" => "images/anhdoc/Anh DOC 4.jpg",
            ),
        );
        foreach ($data as $k => $v): ?>
        <li>
            <img class="uk-visible@s" src="<?= $v['src'] ?>" alt="" uk-cover>
            <img class="uk-hidden@s" src="<?= $v['src1'] ?>" alt="" uk-cover>
            <div class="uk-position-cover uk-hidden@s uk-overlay uk-overlay-primary"></div>
            <div class="uk-position-center uk-position-small uk-text-center uk-light box2_lapdat" uk-scrollspy="target: > *; cls: uk-animation-slide-bottom; delay: 100">
                <p class="uk-margin-remove">FPT - Thế giới tươi đẹp mở ra trước mắt bạn</p>
                <div class="uk-margin"><a href="" class="uk-button uk-button-default uk-button-large uk-border-pill">Đăng ký ngay</a></div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    <a href="" class="icon-scroll uk-position-bottom-center uk-position-small uk-position-z-index" uk-scroll></a>
</div>