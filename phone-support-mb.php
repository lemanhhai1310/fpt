<!--
 uk-sticky="show-on-up: true;top: 100vh;offset: 100vh"
-->
<div class="uk-padding-small uk-hidden@s phone-support-mb uk-box-shadow-large">
    <div class="uk-container">
        <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
            <div>
                <a href=""><img src="images/icon_phone.svg" alt=""></a>
            </div>
            <div>
                <a href=""><img src="images/icon_form.svg" alt=""></a>
            </div>
            <div>
                <a href=""><img src="images/icon_zalo.svg" alt=""></a>
            </div>
            <div>
                <a href=""><img src="images/icon_messenger.svg" alt=""></a>
            </div>
        </div>
    </div>
</div>
<script>
    var btn = $('.phone-support-mb');
    var position = $(window).scrollTop();

    // should start at 0

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if(scroll > position) {
            console.log('scrollDown');
            btn.removeClass('uk-active');
        } else {
            console.log('scrollUp');
            btn.addClass('uk-active');
            if (scroll <= 600) {
                btn.removeClass('uk-active');
            }
        }
        position = scroll;
    });
</script>