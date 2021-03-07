@extends('Client::layout.app')

@section('title','30Shine Question')

@section('content')
    <div class="container">
        <div class="home">
            <div class="ant-row">
                <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-16 ant-col-lg-16">
                    <div class="box-top">
                        <div class="box-question">
                            <div class="title">CÂU HỎI THƯỜNG GẶP</div>
                            <div class="content">
                                <ul>
                                    <li class="item">
                                        <div class="item-title">Tôi có thể bổ sung giấy tờ sau khi vào làm được
                                            không?
                                        </div>
                                        <div> <!-- -->Khi vào làm tại 30Shine, bạn không bắt buộc phải đầy đủ giấy
                                            tờ,.. Nhưng hãy cố gắng chuẩn bị hồ sơ đầy đủ để nộp và kí HD nhé!
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="item-title">Thời gian cần chuẩn bị hồ sơ sau khi trúng tuyển là
                                            bao lâu?
                                        </div>
                                        <div> <!-- -->Thông thường thời gian chuẩn bị hồ sơ là 3-4 tuần, trường hợp
                                            khác Anh/Chị phỏng vấn sẽ trao đổi trực tiếp đến bạn khi phỏng vấn.
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="item-title">Nếu phỏng vấn không đạt, mình có thể ứng tuyển lại
                                            sau bao lâu?
                                        </div>
                                        <div> <!-- -->Thông thương sau khoảng 2-3 tuần bạn có thể tái ứng tuyển vị
                                            trí không đạt trước đó. Trường hợp khác, ngay khi phỏng vấn không đạt ví
                                            trị này, Bạn có thể chọn ứng tuyển nhưng vị trí chuyên môn khác ngay.
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="item-title">Làm cách nào và bao lâu thì để biết được kết quả
                                            phỏng vấn?
                                        </div>
                                        <div> <!-- -->Khi bạn đạt yêu cầu sau buổi phỏng vấn, quản lí sẽ gọi điện
                                            trực tiếp cho bạn sau 1-2 ngày kể từ ngày phỏng vấn.
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="screen-pc">
                    <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-8 ant-col-lg-8">
                        <div class="box-bottom">
                            <div class="title">VÌ SAO NÊN CHỌN 30SHINE</div>
                            <div class="content">
                                <div class="item">
                                    <div class="img">
                                        <img src="{{cxl_asset('client/images/Icon1.png')}}"
                                             alt=""/>
                                    </div>
                                    <div class="text">
                                        <div class="content-title">
                                            DỄ DÀNG ĐẠT THU NHẬP 10-24 TRIỆU
                                        </div>
                                        <div class="content-text">
                                            Anh em được hỗ trợ bởi quy trình, công nghệ để tăng
                                            năng suất tối đa
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img">
                                        <img src="{{cxl_asset('client/images/icon2.png')}}"
                                             alt=""/>
                                    </div>
                                    <div class="text">
                                        <div class="content-title">LÀM VIỆC LINH HOẠT</div>
                                        <div class="content-text">
                                            Anh em có thời gian bên gia đình mà vẫn đảm bảo thu
                                            nhập rất tốt
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img">
                                        <img src="{{cxl_asset('client/images/icon3.png')}}"
                                             alt=""/>
                                    </div>
                                    <div class="text">
                                        <div class="content-title">
                                            CƠ HỘI THĂNG TIẾN HẤP DẪN
                                        </div>
                                        <div class="content-text">
                                            Mọi vị trí công việc tại 30Shine luôn có lộ trình
                                            thăng tiến (Lên Quản Lý), lên bậc (Tăng lương)
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img">
                                        <img src="{{cxl_asset('client/images/icon4.png')}}"
                                             alt=""/>
                                    </div>
                                    <div class="text">
                                        <div class="content-title">TAY NGHỀ GIỎI NHANH</div>
                                        <div class="content-text">
                                            Liên tục được đào tạo nâng cao tay nghề
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img">
                                        <img src="{{cxl_asset('client/images/icon5.png')}}"
                                             alt=""/>
                                    </div>
                                    <div class="text">
                                        <div class="content-title">
                                            CHẾ ĐỘ NHƯ CÔNG TY NƯỚC NGOÀI
                                        </div>
                                        <div class="content-text">
                                            Bảo hiểm XH và Y Tế, chế độ thai sản (Nghỉ vẫn nhận
                                            lương), Phúc lợi các dịp hiếu, hỉ, ốm đau...
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="img-link">
                                <img src="{{cxl_asset('client/images/banner/banner-right1.png')}}"
                                     alt="" style="width: 100%"/><a href="https://30shine.com/about"
                                                                    target="_blank">
                                    <button>GIỚI THIỆU NGAY</button>
                                </a>
                            </div>
                            <div class="img-link">
                                <a href="https://www.youtube.com/watch?v=jGh9h67NJjs" target="_blank">
                                    <img src="{{cxl_asset('client/images/banner/youtube1.png')}}"
                                         alt="" style="width: 100%"/></a>
                            </div>
                            <div class="img-link">
                                <a href="https://www.youtube.com/watch?v=BFmtApFH2xI" target="_blank">
                                    <img src="{{cxl_asset('client/images/banner/youtube-11.png')}}"
                                         alt="" style="width: 100%"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
