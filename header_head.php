<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>FPT - Thế giới tươi đẹp mở ra trước mắt bạn - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/uikit-3.3.3/css/uikit.min.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/app.css">
    <!--JS-->
    <script src="assets/jquery/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.2.0/dist/lazyload.min.js"></script>
    <script src="assets/uikit-3.3.3/js/uikit.min.js"></script>
    <script src="assets/uikit-3.3.3/js/uikit-icons.min.js"></script>
    <script src="js/app.js"></script>
</head>
<body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v5.0'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="2428809380682169"
     logged_in_greeting="Bạn cần cắt HTML/CSS? Hãy chat ngay với chúng tôi"
     logged_out_greeting="Bạn cần cắt HTML/CSS? Hãy chat ngay với chúng tôi">
</div>
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden">
<?php include('menu_mobile1.php'); ?>