<?php require "header_head.php"; ?>
<div id="header" class="uk-box-shadow-small uk-background-default" uk-sticky="top:600;show-on-up:false;animation:uk-animation-slide-top">
    <div class="uk-container uk-padding-remove">
        <nav class="uk-navbar-container uk-navbar-transparent uk-navbar" uk-navbar>
            <div class="uk-navbar-left">
                <a href="#my-id" class="uk-navbar-toggle uk-hidden@m" uk-toggle>
                    <div id="m_nav_menu" class="m_nav menu">
                        <div class="m_nav_ham button_closed" id="m_ham_1"></div>
                        <div class="m_nav_ham button_closed" id="m_ham_2"></div>
                        <div class="m_nav_ham button_closed" id="m_ham_3"></div>
                    </div>
                </a>
                <a class="uk-navbar-item uk-logo uk-visible@m uk-padding-remove-left" href="."><img src="images/logo.png" alt=""></a>
            </div>
            <div class="uk-navbar-center">
                <a class="uk-navbar-item uk-logo uk-hidden@m" href="."><img src="images/logo.png" alt=""></a>
                <ul class="uk-navbar-nav uk-visible@m">
                    <li class="uk-active">
                        <a href="tintuc-detail.php">Giới thiệu</a>
                        <?php include "menu-dropdown.php"; ?>
                    </li>
                    <li><a href="lapdat.php">Internet FPT</a></li>
                    <li><a href="fpt-playbox.php">Fpt Playbox</a></li>
                    <li><a href="camera-fpt.php">Camera Fpt</a></li>
                    <li><a href="tintuc.php">Tin tức</a></li>
                    <li><a href="contact.php">Liên hệ</a></li>
                </ul>
            </div>
            <div class="uk-navbar-right">
                <div class="uk-navbar-item uk-padding-remove-right uk-visible@m">
                    <a href="tel:+84908625364" class="uk-button animate-phone btn-support-phone uk-button-primary uk-border-pill uk-position-relative">
                        090 862 53 64
                        <div class="uk-position-center-right boximg-phone uk-border-circle">
                            <img class="uk-position-center" src="images/phone-icon.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="uk-hidden@m">
                    <a class="uk-navbar-toggle" href="#" uk-search-icon></a>
                    <div class="uk-navbar-dropdown" uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !nav">

                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <form class="uk-search uk-search-navbar uk-width-1-1">
                                    <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                                </form>
                            </div>
                            <div class="uk-width-auto">
                                <a class="uk-navbar-dropdown-close" href="#" uk-close></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
