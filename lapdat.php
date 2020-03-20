<?php $data["title"] = "Internet FPT"; ?>
<?php require "header.php"; ?>
<div class="block_slider slide_hover uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: false">
    <ul class="uk-slideshow-items" uk-height-viewport="offset-top: true; offset-bottom: 0">
        <?php
        $data = array(
            array(
                "src" => "images/rectangle-3.jpg",
                "src1" => "images/anhdoc/Anh DOC 1D.jpg",
            ),
        );
        foreach ($data as $k => $v): ?>
            <li>
                <img class="uk-visible@s" src="<?= $v['src'] ?>" alt="" uk-cover>
                <img class="uk-hidden@s" src="<?= $v['src1'] ?>" alt="" uk-cover>
                <div class="uk-position-cover uk-hidden@s uk-overlay uk-overlay-primary"></div>
                <div class="uk-position-center uk-position-small uk-text-center uk-light box2_lapdat" uk-scrollspy="target: > *; cls: uk-animation-slide-bottom; delay: 100">
                    <p class="uk-margin-remove">- Tư vấn, lắp đặt internet FPT Đà Nẵng chuyên nghiệp</p>
                    <p class="uk-margin-remove">- Cơ hội trải nghiệm đường truyền ổn định và tốc độ internet cáp quang vượt trội.</p>
                    <div class="uk-margin"><a href="" class="uk-button uk-button-default uk-button-large uk-border-pill">Đăng ký ngay</a></div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
</div>
<div id="sumenh" class="uk-section uk-background-norepeat uk-background-cover" data-src="images/Mask Group 5.png" uk-img>
    <div class="uk-container">
        <div class="uk-text-center uk-margin-large-bottom box1_about">
            <h2 class="title uk-text-uppercase">Giới thiệu về Internet FPT</h2>
        </div>
        <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-padding-small uk-border-rounded box1_lapdat c1 uk-light">
                    <div class="uk-grid-small uk-grid-38-m uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img src="images/Group%201336.png" alt="">
                        </div>
                        <div class="uk-width-expand">
                            Trong thời đại công nghệ 4.0, Internet đóng vai trò kết nối vạn vật và tạo ra sự thay đổi toàn diện trong hệ thống sản xuất.
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-padding-small uk-border-rounded box1_lapdat c2 uk-light">
                    <div class="uk-grid-small uk-grid-38-m uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img src="images/Group%201336.png" alt="">
                        </div>
                        <div class="uk-width-expand">
                            FPT Telecom cung cấp 4 gói cước Internet cáp quang đáp ứng tiêu chí tốc độ đường truyền nhanh, bắt kịp xu thế công nghệ hiện đại và phục vụ khách hàng 24/7.
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-padding-small uk-border-rounded box1_lapdat c3 uk-light">
                    <div class="uk-grid-small uk-grid-38-m uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img src="images/Group%201336.png" alt="">
                        </div>
                        <div class="uk-width-expand">
                            Internet FPT xứng đáng là công nghệ kết nối viễn thông tiên tiến nhất trên thế giới với vô vàn tính năng ưu Việt.
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-padding-small uk-border-rounded box1_lapdat c4 uk-light">
                    <div class="uk-grid-small uk-grid-38-m uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img src="images/Group%201336.png" alt="">
                        </div>
                        <div class="uk-width-expand">
                            Cung cấp gói cước Internet cáp quang ổn định, tốc độ cao dành cho các doanh nghiệp.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-section uk-background-muted">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-flex-middle" uk-grid>
            <div>
                <div class="uk-text-center" uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <img src="images/Group%201291.png" alt="">
                </div>
            </div>
            <div>
                <h2 class="title1">Tính năng vượt trội của <br> Internet FPT Đà Nẵng </h2>
                <ul class="uk-list uk-list-bullet">
                    <li>Đáp ứng sự bùng nổ mạnh mẽ trên nền tảng trực tuyến, Internet FPT Đà Nẵng chuyên cung cấp dịch vụ lắp đặt Internet FPT cho các cá nhân, hộ gia đình và doanh nghiệp.</li>
                    <li>Góp phần mở ra cơ hội đưa dịch vụ chất lượng nhất đến với người dân thành phố Đà Nẵng:</li>
                    <li>Cung cấp đường truyền dẫn hoàn toàn bằng cáp quang từ nhà cung cấp dịch vụ tới tận địa điểm của khách hàng.</li>
                    <li>Tốc độ truy cập Internet cao, lên đến 1Gigabit/giây (1Gbps). Dễ dàng nâng cấp băng thông mà không cần kéo cáp mới.</li>
                    <li>Chất lượng đường truyền ổn định, không bị ảnh hưởng bởi bất kỳ yếu tố ngoại cảnh nào.</li>
                    <li>Đáp ứng hiệu quả cho các ứng dụng Công nghệ thông tin hiện đại bao gồm: Hosting Server riêng, VPN, IPTV, VoD, Video Conferrence, Truyền dữ liệu, Game Online và Smart home...</li>
                    <li>Đăng ký đơn giản, dễ dàng qua số Hotline, website trực tuyến hoặc tại văn phòng của Tổng đài FPT Đà Nẵng.</li>
                    <li>Cung cấp dịch vụ hỗ trợ tư vấn tận nhà.</li>
                    <li>Thời gian lắp đặt dịch vụ nhanh chóng ngay trong ngày cho quý khách hàng sau khi hoàn thành hợp đồng.</li>
                    <li>Quản lý cước rõ ràng.</li>
                    <li>Chính sách hỗ trợ sự cố và chăm sóc khách hàng đảm bảo 24/7.</li>
                    <li>Đội ngũ nhân viên có trình độ chuyên môn cao, nhiệt tình, thân thiện.</li>
                    <li>Được trang bị miễn phí Modem Wifi FPT băng tần kép hiện đại nhất Việt Nam.</li>
                    <li>Miễn phí 100% chi phí lắp đặt và tặng tháng cước cho khách hàng trả trước.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="sanpham" class="uk-section uk-background-default">
    <div class="uk-container uk-container-small">
        <div class="uk-text-center uk-margin-large-bottom box1_about">
            <h2 class="title uk-text-uppercase">Bảng giá các gói internet cáp quang FPT</h2>
        </div>
        <div class="uk-margin-small banggia1 uk-flex uk-flex-middle">
            <span class="uk-margin-small-right c1 uk-border-circle"></span>
            <span class="uk-text-middle">Bảng giá mạng FPT cho Cá nhân, Sinh viên, Hộ gia đình</span>
        </div>
        <div class="uk-margin-bottom uk-overflow-auto">
            <table class="uk-table uk-table-divider table1">
                <thead>
                <tr>
                    <th>Tên gói</th>
                    <th>SUPER 35</th>
                    <th>SUPER 50</th>
                    <th>SUPER 65</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><b>- Băng thông</b></td>
                    <td><b>35Mbps</b></td>
                    <td><b>50Mbps</b></td>
                    <td><b>65Mbps</b></td>
                </tr>
                <tr>
                    <td><b>- Giá cước/tháng</b></td>
                    <td><b>230.000vnđ</b></td>
                    <td><b>245.000vnđ</b></td>
                    <td><b>300.000vnđ</b></td>
                </tr>
                <tr>
                    <td><b>- Phí hòa mạng trả sau</b></td>
                    <td><b>220.000vnđ</b></td>
                    <td><b>110.000vnđ</b></td>
                    <td><b>110.000vnđ</b></td>
                </tr>
                <tr>
                    <td><b>- Trả trước 6 tháng</b></td>
                    <td><b>1.338.000vnđ</b></td>
                    <td><b>1.470.000vnđ</b></td>
                    <td><b>1.800.000vnđ</b></td>
                </tr>
                <tr>
                    <td><b>- Trả trước 12 tháng</b></td>
                    <td><b>2.760.000vnđ</b></td>
                    <td><b>2.940.000vnđ</b></td>
                    <td><b>3.600.000vnđ</b></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <div class="uk-margin"><b>Lưu ý:</b> Giá cước đã bao gồm thuế VAT 10%</div>
                        <div><b>Ưu đãi:</b></div>
                        <div>
                            <div>- Trang bị Modem Wifi 4 Cổng, 2 băng tầng cực khủng phù hợp cho mọi gia đình.</div>
                            <div>- Quà Tặng hấp dẫn cho khách hàng đăng ký mới.</div>
                            <div>- Trả trước 6 tháng: Miễn phí lắp đặt + tặng 1 tháng cước.</div>
                            <div>- Trả trước 12 tháng: Miễn phí lắp đặt + tặng 2 tháng cước.</div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="uk-margin-small banggia1 uk-flex uk-flex-middle">
            <span class="uk-margin-small-right c1 uk-border-circle"></span>
            <span class="uk-text-middle">Bảng giá các gói cước cho các Doanh nghiệp</span>
        </div>
        <div class="uk-margin-bottom uk-overflow-auto">
            <table class="uk-table uk-table-divider table1">
                <thead>
                <tr>
                    <th>Tên gói</th>
                    <th>SUPER 100</th>
                    <th>SUPER 150</th>
                    <th>SUPER 200</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><b>- Băng thông</b></td>
                    <td><b>100Mbps</b></td>
                    <td><b>150Mbps</b></td>
                    <td><b>200Mbps</b></td>
                </tr>
                <tr>
                    <td><b>- Băng thông quốc tế</b></td>
                    <td><b>10.816 Kbps</b></td>
                    <td><b>12.600 Kbps</b></td>
                    <td><b>18.904 Kbps</b></td>
                </tr>
                <tr>
                    <td><b>- Giá cước/tháng</b></td>
                    <td><b>880.000vnđ</b></td>
                    <td><b>2.200.000vnđ</b></td>
                    <td><b>8.800.000vnđ</b></td>
                </tr>
                <tr>
                    <td><b>- Phí hòa mạng trả sau</b></td>
                    <td><b>1.100.000vnđ</b></td>
                    <td><b>1.100.000vnđ</b></td>
                    <td><b>1.100.000vnđ</b></td>
                </tr>
                <tr>
                    <td><b>- IP Tĩnh</b></td>
                    <td><b>Có</b></td>
                    <td><b>Có</b></td>
                    <td><b>Có</b></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <div class="uk-margin"><b>Lưu ý:</b> Giá cước đã bao gồm thuế VAT 10%</div>
                        <div><b>Ưu đãi:</b></div>
                        <div>
                            <div>- Cam kết băng thông quốc tế</div>
                            <div>- Trang bị thiết bị chuẩn với gói dịch vụ cung cấp.</div>
                            <div>- Trả trước 6 tháng: Miễn phí hòa mạng + tặng 1 tháng cước.</div>
                            <div>- Khắc phục sự cố trong vòng 12H.</div>
                            <div>- Tư vấn giải pháp và hỗ trợ 24/24.</div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="uk-margin-small banggia1 uk-flex uk-flex-middle">
            <span class="uk-margin-small-right c1 uk-border-circle"></span>
            <span class="uk-text-middle">Bảng giá cước Internet và Truyền hình FPT</span>
        </div>
        <div class="uk-margin-bottom uk-overflow-auto">
            <table class="uk-table uk-table-divider table1">
                <thead>
                <tr>
                    <th>Tên gói</th>
                    <th>COMBO S35</th>
                    <th>COMBO S50</th>
                    <th>COMBO S65</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><b>- Băng thông</b></td>
                    <td><b>35Mbps</b></td>
                    <td><b>50Mbps</b></td>
                    <td><b>65Mbps</b></td>
                </tr>
                <tr>
                    <td><b>- Giá cước/tháng</b></td>
                    <td><b>235.000vnđ</b></td>
                    <td><b>255.000vnđ</b></td>
                    <td><b>350.000vnđ</b></td>
                </tr>
                <tr>
                    <td><b>- Phí hòa mạng trả sau</b></td>
                    <td><b>330.000vnđ</b></td>
                    <td><b>440.000vnđ</b></td>
                    <td><b>440.000vnđ</b></td>
                </tr>
                <tr>
                    <td><b>- Trả trước 6 tháng</b></td>
                    <td><b>1.410.000vnđ</b></td>
                    <td><b>1.530.000vnđ</b></td>
                    <td><b>2.100.000vnđ</b></td>
                </tr>
                <tr>
                    <td><b>- Trả trước 12 tháng</b></td>
                    <td><b>2.820.000vnđ</b></td>
                    <td><b>3.060.000vnđ</b></td>
                    <td><b>4.200.000vnđ</b></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <div class="uk-margin"><b>Lưu ý:</b> Giá cước đã bao gồm thuế VAT 10%</div>
                        <div><b>Ưu đãi:</b></div>
                        <div>
                            <div>- Trang bị Modem Wifi 4 cổng</div>
                            <div>- Tặng  đầu thu HD Box 4K thông minh phù hợp cho mọi Tivi nhà bạn, biến Tivi thường thành Tivi thông minh.</div>
                            <div>- Trả trước 6 tháng: Miễn phí lắp đặt + tặng 1 tháng cước.</div>
                            <div>- Trả trước 12 tháng: Miễn phí lắp đặt + tặng 2 tháng cước.</div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
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
                                <legend class="uk-legend legen1 uk-position-relative uk-margin-medium">FORM ĐĂNG KÝ TƯ VẤN</legend>
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