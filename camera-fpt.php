<?php $data["title"] = "Camera FPT"; ?>
<?php require "header.php"; ?>
<div class="block_slider slide_hover uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: false">
    <ul class="uk-slideshow-items" uk-height-viewport="offset-top: true; offset-bottom: 0">
        <?php
        $data = array(
            array(
                "src" => "images/camera-fpt.jpg",
                "src1" => "images/anhdoc/Anh DOC 3.jpg",
            ),
        );
        foreach ($data as $k => $v): ?>
            <li>
                <img class="uk-visible@s" src="<?= $v['src'] ?>" alt="" uk-cover>
                <img class="uk-hidden@s" src="<?= $v['src1'] ?>" alt="" uk-cover>
                <div class="uk-position-cover uk-overlay uk-overlay-primary overlay-c1"></div>
                <div class="uk-position-center uk-position-small uk-text-center uk-light box2_lapdat" uk-scrollspy="target: > *; cls: uk-animation-slide-bottom; delay: 100">
                    <p class="uk-margin-remove">- Dịch vụ tiện lợi - thông minh</p>
                    <p class="uk-margin-remove">- Hỗ trợ giám sát an toàn - bảo mật</p>
                    <p class="uk-margin-remove">- An tâm mọi lúc, mọi nơi</p>
                    <div class="uk-margin"><a href="" class="uk-button uk-button-default uk-button-large uk-border-pill">Đăng ký ngay</a></div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
</div>
<div class="uk-section camera-about">
    <div class="uk-container uk-container-small">
        <div class="uk-text-center uk-margin-large-bottom box1_about">
            <h2 class="title uk-text-uppercase">Giới thiệu về Camera FPT</h2>
        </div>
        <div class="uk-padding uk-border-rounded camera4">
            <div class="uk-flex-middle uk-grid-small" uk-grid>
                <div class="uk-width-auto uk-flex-middle uk-flex">
                    <span class="dot1"></span>
                </div>
                <div class="uk-width-expand">
                    Là sản phẩm công nghệ tiên tiến, ưu Việt nhất do đội ngũ FPT Telecom  phát triển và ra mắt thị trường Việt Nam 2019.
                </div>
            </div>
            <div class="uk-flex-middle uk-grid-small" uk-grid>
                <div class="uk-width-auto uk-flex-middle uk-flex">
                    <span class="dot1"></span>
                </div>
                <div class="uk-width-expand">
                    Sản phẩm đón đầu xu hướng, tích hợp nhiều tính năng cải tiến mang tính đột phá về công nghệ.
                </div>
            </div>
            <div class="uk-flex-middle uk-grid-small" uk-grid>
                <div class="uk-width-auto uk-flex-middle uk-flex">
                    <span class="dot1"></span>
                </div>
                <div class="uk-width-expand">
                    Sản phẩm camera FPT sở hữu vô vàn những ưu điểm vượt trội.
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-section uk-background-muted camera-ttct">
    <div class="uk-container uk-container-xsmall">
        <div class="uk-text-center uk-margin-large-bottom box1_about">
            <h2 class="title uk-text-uppercase">Thông tin chi tiết sản phẩm</h2>
        </div>
        <div class="uk-background-default uk-overflow-auto">
            <table class="uk-table uk-table-divider uk-table-striped table2 uk-table-middle">
                <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>CAMERA FPT trong nhà</th>
                    <th>CAMERA FPT ngoài trời</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <div class="camera1">
                            <span>- Sử dụng</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>- Chuyên sử dụng trong nhà</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>- Chuyên sử dụng ngoài trời</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="camera1">
                            <span>- Chip</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>- Chip cảm biến hình ảnh Sony IMX307</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>- Chip cảm biến hình ảnh Sony IMX307</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="camera1">
                            <span>- Độ phân giải</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>- Độ phân giải Full HD</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>- Độ phân giải Full HD</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="camera1">
                            <span>- Hình ảnh</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>- Chuẩn nén hình ảnh H265</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>- Chuẩn nén hình ảnh H265</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="camera1">
                            <span>- Thẻ nhớ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>- Hỗ trợ khe cắm thẻ nhớ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>- Hỗ trợ khe cắm thẻ nhớ</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="camera1">
                            <span>- Hồng ngoại</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera3">
                            <span>- Hồng ngoại ban đêm 10m</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera2">
                            <span>- Hồng ngoại ban đêm 20m</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="camera1">
                            <span>- Kết nối Internet</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera3">
                            <span>- Kết nối internet từ cổng LAN và Wifi</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera2">
                            <span>- Kết nối internet từ cổng LAN</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="camera1">
                            <span>- Bảo hành</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>- Bảo hành chính hãng FPT 1 năm</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>- Bảo hành chính hãng FPT 1 năm</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="camera1">
                            <span>- Kháng nước</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera3">
                            <span>- Không</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera2">
                            <span>- Chuẩn kháng nước IP66 và nhiệt độ 75°.</span>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="uk-section goicuoc_camera">
    <div class="uk-container uk-container-xsmall">
        <div class="uk-text-center uk-margin-large-bottom box1_about">
            <h2 class="title uk-text-uppercase">Giá cước Dịch vụ Cloud Camera</h2>
        </div>
        <div class="uk-overflow-auto">
            <table class="uk-table uk-table-divider table2 uk-table-middle">
                <thead>
                <tr>
                    <th>Đối tượng</th>
                    <th colspan="6">Nội dung</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td rowspan="7">
                        <div class="camera1">
                            <span>Khách hàng ngoại mạng</span>
                            (chưa dùng Internet FPT)
                        </div>
                    </td>
                    <td colspan="6">
                        <div class="camera1 uk-margin-small">
                            <span>1.</span> Thiết bị khuyến mãi giảm 100.000 VNĐ/ thiết bị
                            Outdoor (Ngoài trời) còn: 1.300.000 VNĐ/ thiết bị (Gồm VAT)
                            Indoor (Trong nhà) còn: 1.200.000 VNĐ/ thiết bị (Gồm VAT)
                        </div>
                        <div class="camera1 uk-margin-small">
                            <span>2.</span> Dịch vụ triển khai: 110.000 VNĐ/ thiết bị (Tặng kèm 10m LAN trên một thiết bị).
                        </div>
                        <div class="camera1 uk-margin-small">
                            <span>3.</span> Dịch vụ lưu trữ Cloud: Chu kỳ <span>1 block = 30 ngày</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th rowspan="2">Dịch vụ Cloud</th>
                    <th rowspan="2">giá bán VNĐ/block</th>
                    <th colspan="2">Chính sách khuyến mãi trả trước 6 block</th>
                    <th colspan="2">Chính sách khuyến mãi trả trước 12 block</th>
                </tr>
                <tr>
                    <td>Giảm giá 2 block</td>
                    <td>Giá KM</td>
                    <td>Giảm giá 4 block</td>
                    <td>Giá KM</td>
                </tr>
                <tr>
                    <td>
                        <div class="camera1">
                            <span>Cloud Camera</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>30.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>60.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera2">
                            <span>120.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>120.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera2">
                            <span>240.000vnđ</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="camera1">
                            <span>1 Day</span>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="camera1">
                            <span>Cloud Camera 3 Day</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>45.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>90.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera2">
                            <span>180.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>180.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera2">
                            <span>240.000vnđ</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="camera1">
                            <span>Cloud Camera 7 Day</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>80.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>160.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera2">
                            <span>320.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>320.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera2">
                            <span>640.000vnđ</span>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td rowspan="6">
                        <div class="camera1">
                            <span>Khách hàng hiện hữu dùng Internet FPT & bán mới combo Internet - Camera</span>
                        </div>
                    </td>
                    <td colspan="6">
                        <div class="camera1 uk-margin-small">
                            <span>1.</span> Thiết bị khuyến mãi giảm 100.000 VNĐ/ thiết bị
                            Outdoor (Ngoài trời) còn: 1.300.000 VNĐ/ thiết bị (Gồm VAT)
                            Indoor (Trong nhà) còn: 1.200.000 VNĐ/ thiết bị (Gồm VAT)
                        </div>
                        <div class="camera1 uk-margin-small">
                            <span>2.</span> Dịch vụ triển khai: Miễn phí
                            <div>Miễn phí: 10m LAN trên một thiết bị, nhân công triển khai hợp đồng</div>
                        </div>
                        <div class="camera1 uk-margin-small">
                            <span>3.</span> Dịch vụ lưu trữ Cloud: Chu kỳ <span>1 block = 30 ngày</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th rowspan="2"></th>
                    <th rowspan="2"></th>
                    <th colspan="2">Chính sách khuyến mãi trả trước 6 block</th>
                    <th colspan="2">Chính sách khuyến mãi trả trước 12 block</th>
                </tr>
                <tr>
                    <td>Giảm giá 2 block</td>
                    <td>Giá KM</td>
                    <td>Giảm giá 4 block</td>
                    <td>Giá KM</td>
                </tr>
                <tr>
                    <td>
                        <div class="camera1">
                            <span>Cloud Camera 1 Day</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>30.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>60.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera2">
                            <span>120.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>120.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera2">
                            <span>240.000vnđ</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="camera1">
                            <span>Cloud Camera 3 Day</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>45.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>90.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera2">
                            <span>180.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>180.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera2">
                            <span>240.000vnđ</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="camera1">
                            <span>Cloud Camera 7 Day</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>80.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>160.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera2">
                            <span>320.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera1">
                            <span>320.000vnđ</span>
                        </div>
                    </td>
                    <td>
                        <div class="camera2">
                            <span>640.000vnđ</span>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="uk-section uk-background-muted">
    <div class="uk-container">
        <div class="" uk-grid>
            <div class="uk-width-2-5@m uk-flex-last@m">
                <img src="images/2-camera-ko-n-n.png" alt="">
            </div>
            <div class="uk-width-expand">
                <div class="camera-title uk-margin-small-bottom">Lý do lựa chọn Camera FPT tại FPT Đà Nẵng?</div>
                <div>
                    <div>- Tổng đài FPT Đà Nẵng chuyên cung cấp, lắp đặt Camera FPT (Camera chống trộm) với những dịch vụ tuyệt vời:</div>
                    <div>- Cam kết sản phẩm chính hãng do tập đoàn FPT sản xuất.</div>
                    <div>- Bảo hành chính hãng trong 12 tháng.</div>
                    <div>- Cam kết mức giá tốt nhất trên thị trường.</div>
                    <div>- Giao hàng miễn phí trong thời gian nhanh nhất.</div>
                    <div>- Miễn phí dịch vụ hỗ trợ kỹ thuật tại nhà.</div>
                    <div>- Dịch vụ đồng hành chăm sóc khách hàng 24/7 kể cả trong những ngày lễ tết.</div>
                    <div>- Đăng ký đơn giản, dễ dàng qua số Hotline, website trực tuyến hoặc tại văn phòng của Tổng đài FPT Đà Nẵng.</div>
                    <div>- Đội ngũ nhân viên có trình độ chuyên môn cao, nhiệt tình, thân thiện.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-position-relative uk-light uk-section uk-overflow-hidden">
    <div class="uk-grid-collapse uk-position-cover uk-child-width-1-2@s uk-grid-match" uk-grid>
        <div class="box_left" data-src="images/bg-left.png" uk-img></div>
        <div class="box_right" data-src="images/bg-right.png" uk-img></div>
    </div>
    <div class="uk-position-relative uk-position-z-index">
        <div class="uk-container">
            <div class="uk-child-width-1-2@m uk-grid-match" uk-grid>
                <div>
                    <div class="uk-padding box1_register uk-padding-remove-left">
                        <legend class="uk-legend legen1 uk-position-relative uk-margin-medium uk-text-uppercase">Thông tin liên hệ:</legend>
                        <div>
                            <p>Bạn đang ở thành phố Đà Nẵng và muốn tư vấn lắp đặt dịch vụ Internet FPT? Đừng bỏ lỡ bất kỳ giây phút nào nữa, hãy liên hệ ngay với chúng tôi theo thông tin chi tiết sau:</p>
                            <div>Văn phòng chính: 909 Ngô Quyền, An Hải Đông, Đà Nẵng</div>
                            <div>Văn phòng giao dịch:</div>
                            <div class="uk-margin">
                                <div>+ 182 - 184 đường 2-9, phường Hoà Cường, quận Hải Châu, Đà Nẵng</div>
                                <div>+ 361 Điện Biên Phủ, phường An Khê, Quận Thanh Khê, Đà Nẵng</div>
                                <div>+ 224 Phạm Hùng, phường Hoà Xuân, quận Cẩm Lệ, Đà Nẵng</div>
                            </div>
                            <div class="uk-margin">
                                <div class="item uk-margin-small">
                                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                                        <div class="uk-width-auto">
                                            <span class="uk-icon-button" uk-icon="icon: receiver; ratio: 0.7"></span>
                                        </div>
                                        <div class="uk-width-expand">
                                            0908 625 364
                                        </div>
                                    </div>
                                </div>
                                <div class="item uk-margin-small">
                                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                                        <div class="uk-width-auto">
                                            <span class="uk-icon-button" uk-icon="icon: mail; ratio: 0.7"></span>
                                        </div>
                                        <div class="uk-width-expand">
                                            KhangNA@fpt.com.vn
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="" class="uk-button uk-button-default">Đăng ký ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-padding box1_register uk-padding-remove-right">
                        <form class="form_register">
                            <fieldset class="uk-fieldset">
                                <legend class="uk-legend legen1 uk-position-relative uk-margin-medium">FORM ĐĂNG KÝ ĐẶT HÀNG FPT Play Box:</legend>
                                <div>
                                    <div class="uk-margin">
                                        <input class="uk-input" type="text" placeholder="Họ tên:">
                                    </div>
                                    <div class="uk-margin">
                                        <input class="uk-input" type="text" placeholder="Số điện thoại:">
                                    </div>
                                    <div class="uk-margin">
                                        <input class="uk-input" type="text" placeholder="Số CMND:">
                                    </div>
                                    <div class="uk-margin">
                                        <input class="uk-input" type="text" placeholder="Địa chỉ Email:">
                                    </div>
                                    <div class="uk-margin">
                                        <textarea class="uk-textarea" rows="5" placeholder="Thông tin địa chỉ lắp đặt:"></textarea>
                                    </div>
                                    <div class="uk-margin">
                                        <button type="submit" class="uk-button btn-register uk-button-secondary uk-width-1-1 uk-background-default">Đăng ký</button>
                                    </div>
                                    <div class="uk-margin">
                                        <p class="desc uk-text-center">"Chúng tôi sẽ nhiệt tình tư vấn cụ thể và mang dịch vụ đến tận ngôi nhà của bạn. Hãy cùng FPT trải nghiệm những điều thú vị nhất của cuộc sống"</p>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>