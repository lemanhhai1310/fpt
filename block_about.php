<div id="sumenh" class="uk-section uk-background-cover" data-src="images/Mask Group 1.png" uk-img>
    <div class="uk-container">
        <div class="uk-text-center uk-margin-large-bottom box1_about">
            <h2 class="title uk-text-uppercase">Sứ mệnh của FPT Telecom</h2>
        </div>
        <div class="uk-child-width-1-4@m uk-grid-match uk-grid-small" uk-grid uk-scrollspy="target: .anima; repeat: false; cls: animate; delay: 200">
            <?php
            $data = array(
                array(
                    "src" => "images/sumenh1.png",
                    "desc" => "Là đơn vị cung cấp dịch vụ viễn thông và internet uy tín được khách hàng yêu mến hàng đầu Việt Nam.",
                ),
                array(
                    "src" => "images/sumenh2.png",
                    "desc" => "Thực hiện sứ mệnh tiên phong mang kết nối đến mọi người dân trên khắp đất nước Việt Nam.",
                ),
                array(
                    "src" => "images/sumenh3.png",
                    "desc" => "Ghi dấu ấn mạnh mẽ trên trường quốc tế với số lượng chi nhánh mở rộng ở nước ngoài.",
                ),
                array(
                    "src" => "images/sumenh4.png",
                    "desc" => "Ứng dụng công nghệ tiên tiến, hiện đại nhằm trải nghiệm mọi dịch vụ trên một kết nối.",
                ),
            );
            foreach ($data as $k => $v): ?>
            <div>
                <div class="uk-card uk-card-default anima card1_about uk-border-rounded uk-card-hover">
                    <div class="uk-card-header uk-text-center uk-flex uk-flex-middle uk-flex-center">
                        <img src="<?= $v['src'] ?>" alt="">
                    </div>
                    <div class="uk-card-body">
                        <div class="desc"><?= $v['desc'] ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>