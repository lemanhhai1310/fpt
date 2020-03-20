<div id="my-id" uk-offcanvas="overlay: true; mode: push">
    <div class="uk-offcanvas-bar uk-overflow-auto uk-flex uk-flex-column uk-padding-remove">
        <nav class="menu_m">
            <ul class="uk-list uk-margin-remove">
                <?php
                $data = array
                (
                    array(
                        'title' => 'Trang chủ',
                        'mode' => '',
                    ),
//                    array(
//                        'title' => 'Giới thiệu',
////                        'mode' => 'live',
//                        'mode' => '',
//                        'active' => true,
//                    ),
                    array(
                        'title' => 'Internet FPT',
                        'mode' => '',
                    ),
                    array(
                        'title' => 'FPT Playbox',
                        'mode' => '',
                    ),
                    array(
                        'title' => 'Camera FPT',
                        'mode' => '',
                    ),
                    array(
                        'title' => 'Tin tức',
                        'mode' => '',
                    ),
                    array(
                        'title' => 'Liên hệ',
                        'mode' => '',
                    ),
                );
                foreach ($data as $k1 => $v1) { ?>
                    <li class="uk-margin-remove <?= (isset($v1['active']) ? 'uk-active' : '') ?>">
                        <a class="uk-padding-small uk-display-block" href="#">
                            <?= $v1['title'] ?>
                            <?php switch ($v1['mode']) {
                                case 'live':
                                    echo "<span class=\"uk-badge live uk-text-small uk-text-uppercase\">live</span>";
                                    break;
                                case 'ads':
                                    echo "<span class=\"uk-badge ads uk-text-small uk-text-uppercase\">ads</span>";
                                    break;
                                default:
                                    echo "";
                            } ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <div class="uk-padding-small">
            <div class="uk-margin-small">
                <a href="tel:+84908625364" class="uk-button animate-phone uk-width-1-1 btn-support-phone uk-button-primary uk-border-pill uk-position-relative">
                    090 862 53 64
                    <div class="uk-position-center-right boximg-phone uk-border-circle">
                        <img class="uk-position-center" src="images/phone-icon.png" alt="">
                    </div>
                </a>
            </div>
            <div class="uk-margin-small">
                <a href="tel:+84908625364" class="uk-button zalo uk-width-1-1 btn-support-phone uk-button-primary uk-border-pill uk-position-relative">
                    090 862 53 64
                    <div class="uk-position-center-right boximg-phone uk-border-circle">
                        <img class="uk-position-center uk-border-circle" src="images/zalo-logo-png-clip-art.png" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>