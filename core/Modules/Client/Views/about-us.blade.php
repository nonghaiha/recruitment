@extends('Client::layout.app')

@section('title','Về chúng tôi 30Shine')

@section('content')
    <div class="about__container">
        <div class="about__content">
            <div class="formation">
                <div class="ant-row" style="margin-left: -20px; margin-right: -20px">
                    <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24">
                        <h2 class="title">Sự hình thành và phát triển</h2>
                        <p class="subtitle">Công ty thành lập ngày 08/06/2016, 30Shine chạy thử nghiệm lần đầu tiên
                            tại Hà Nội vào tháng 5/2015, cửa hàng đầu tiên thuộc chuỗi cắt tóc nam 30Shine
                            khai trương tại địa chỉ số 7 Cát Linh, Hà Nội. Đây là một mặt bằng chừng 40m2
                            – có thể coi là khá rộng thời đó. <br>
                            Tháng 11/2016, công ty quyết định chọn mặt bằng số 136 đường Hùng
                            Vương làm viên gạch đầu tiên trong chiến lược Nam tiến của mình. Thừa thắng
                            xông lên, thương hiệu 30Shine nhanh chóng mở rộng quy mô chuỗi cắt tóc nam
                            lên tới gần 40 cửa hàng ở khu vực phía Nam.
                            Tháng 9/2019, salon đầu tiên ở Thái Lan khai trương đánh dấu mốc quan
                            trọng trong mục tiêu mở rộng quy mô salon trên Việt Nam và toàn cầu năm
                            2020. <br>
                            Tính cho tới thời điểm hiện tại, tháng 5/2020 chuỗi cắt tóc nam 30Shine
                            có 92 salon với quy mô công ty là hơn 3000 nhân viên.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mission">
                <div class="ant-row">
                    <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-12">
                        <div class="mission__content"><h1 class="title">sứ mệnh của 30shine</h1>
                            <p class="sub-title">30Shine tin tưởng &amp; nỗ lực mỗi ngày để kết nối bàn tay tài hoa của
                                người thợ Việt cùng quy trình khoa học 30 phút nhằm đem đến cho phái mạnh toàn cầu kiểu
                                tóc đẹp trai, làn da khoẻ mạnh cuốn hút phái đẹp; tinh thần thư giãn để bứt phá trong sự
                                nghiệp.</p></div>
                    </div>
                    <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-12">
                        <div class="mission__image"><img src="{{cxl_asset('client/images/about_us.912f9d78.png')}}"
                                                         class="content-image"
                                                         alt=""><img src="/static/media/about_bg.86c7ca8a.png"
                                                                     class="content-image-sp" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="core-value">
                <div class="ant-row" style="margin-left: -25px; margin-right: -25px;">
                    <div class="ant-col ant-col-9 ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-9"
                         style="padding-left: 25px; padding-right: 25px;">
                        <div class="core-value__image">
                            <div class="icon_diamond"><img src="{{cxl_asset('client/images/diamond.ace9225b.svg')}}"
                                                           alt=""></div>
                            <div class="text">giá trị cốt lõi</div>
                            <div class="content_image"><img src="{{cxl_asset('client/images/core_value.515c625b.png')}}"
                                                            alt=""></div>
                        </div>
                    </div>
                    <div class="ant-col ant-col-15 ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-15"
                         style="padding-left: 25px; padding-right: 25px;">
                        <div class="ant-row" style="margin-left: -25px; margin-right: -25px;">
                            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-12"
                                 style="padding-left: 25px; padding-right: 25px;">
                                <div class="core-value__content"><h3 class="title">1. Trung thực</h3>
                                    <p class="subtitle">Là nghĩ-nói-làm giống nhau, ngược lại với trung thực là gian
                                        dối. Gian dối về tiền bạc, gian dối về thời gian, gian dối về thông tin… đều là
                                        hành vi bị cấm tại 30Shine. 30Shine sẽ dùng tất cả khả năng, nguồn lực để phát
                                        hiện và trừng phạt thích đáng mọi hành vi gian dối, kể cả đưa ra pháp luật.</p>
                                </div>
                            </div>
                            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-12"
                                 style="padding-left: 25px; padding-right: 25px;">
                                <div class="core-value__content"><h3 class="title">2. ham học hỏi</h3>
                                    <p class="subtitle">Là không ỉ lại, tự mình sử dụng thời gian, công sức của mình để
                                        tìm hiểu bất kỳ vấn đề gì mà mình còn đang thắc mắc, chưa biết. Việc ham học hỏi
                                        cũng giúp bản thân không bao giờ bị thụt lùi lại so với sự phát triển không
                                        ngừng của xã hội.</p></div>
                            </div>
                            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-12"
                                 style="padding-left: 25px; padding-right: 25px;">
                                <div class="core-value__content"><h3 class="title">3. tận tâm </h3>
                                    <p class="subtitle">Là luôn sẵn sàng dốc hết sức lực và tâm huyết khi thực hiện các
                                        công việc, giải quyết các vấn đề để đạt được kết quả tốt đẹp. Tận tâm với khách
                                        hàng, tận tâm với đồng nghiệp, bạn bè, gia đình… sẽ khiến chúng ta đạt được
                                        nhiều hơn sự hài lòng, sự trân trọng trong công việc và cuộc sống.</p></div>
                            </div>
                            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-12"
                                 style="padding-left: 25px; padding-right: 25px;">
                                <div class="core-value__content"><h3 class="title">4. nhận trách nhiệm</h3>
                                    <p class="subtitle">Là nhìn ra được nguyên nhân gốc rễ của vấn đề từ chính bản thân
                                        mình, từ đó đưa ra được giải giải pháp để thay đổi kết quả tốt đẹp hơn. Nhận
                                        trách nhiệm không phải là chịu trách nhiệm. Tinh thần nhận trách nhiệm sẽ giúp
                                        hạn chế tối đa các mâu thuẫn, xung đột, xây dựng được tập thể vững mạnh và hướng
                                        tới sự chủ động, cải tiến để thay đổi công việc, cuộc sống tốt đẹp hơn.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="signification">
                <div class="ant-row" style="margin-left: -20px; margin-right: -20px;">
                    <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-12"
                         style="padding-left: 20px; padding-right: 20px;">
                        <div class="content-icon"><img src="{{cxl_asset('client/images/lamp.186e6eda.svg')}}" alt="">
                        </div>
                        <h2 class="title">ý nghĩa của 30shine</h2>
                        <p class="subtitle">Slogan: “Thư giãn 30phút và bạn sẽ toả sáng” có ý nghĩa cho cả nội bộ và
                            khách hàng. Khách hàng thấy được lời hứa của thương hiệu, nội bộ nỗ lực mỗi ngày thực hiện
                            lời hứa ấy, cũng chính là sứ mệnh 30Shine.</p>
                        <p class="note">*Logo và Slogan 30Shine đã được Cục Sở Hữu Trí Tuệ cấp bẳng bảo hộ độc quyền vào
                            tháng 7/2017.</p></div>
                    <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-12"
                         style="padding-left: 20px; padding-right: 20px;">
                        <div class="content-image"><img src="{{cxl_asset('client/images/logo_about.c89e8bed.png')}}"
                                                        alt=""></div>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="ant-row">
                    <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-12">
                        <div class="service__content">
                            <h2 class="title">CHỨC NĂNG CỦA 30SHINE</h2>
                            <p class="sub-title">
                                Công ty Cổ phần Thương mại Dịch vụ 30Shine có chức
                                năng cung ứng sản phẩm dịch vụ về chăm sóc tóc nam và sản xuất,
                                bán lẻ mỹ phẩm nam đảm bảo yêu cầu tiêu chuẩn của Nhà nước và
                                đáp ứng nhu cầu của khách hàng.

                            </p>
                        </div>
                    </div>
                    <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-12">
                        <div class="service__content"><h2 class="title">DỊCH VỤ SHINECOMBO 7</h2>
                            <p class="sub-title">
                                Đáp ứng nhu cầu của khách hàng về chăm sóc tóc và da cho nam. <br>
                                Tuân thủ chấp hành các quy định của pháp luật. <br>
                                Mở rộng, phát triển thị trường trong và ngoài nước, mở rộng hoạt động
                                sản xuất kinh doanh tạo cơ hội việc làm cho người lao động, góp phần ổn định xã
                                hội
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
