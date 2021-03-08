@extends('Client::layout.app')

@section('title','30Shine News')

@section('bodyID','news')

@section('content')
    <div class="container">
        <div class="home">
            <div class="ant-row">
                <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-16 ant-col-lg-16">
                    <div class="screen-pc">
                        <div class="component-blog">
                            <div class="title">BLOG</div>
                            <div class="content-body">
                                @foreach($news as $item)
                                    <div class="item news-post">
                                        <div class="ant-row">
                                            <div class="ant-col ant-col-xs-10 ant-col-sm-10 ant-col-md-7 ant-col-lg-7">
                                                <div>
                                                    <a href="{{route('client.news.detail',['id' => $item['id']])}}"
                                                       class="blank">
                                                        <img
                                                            src="{{cxl_storage_news('thumbnail/'.$item['thumbnail'])}}"
                                                            alt="Icon">
                                                    </a>
                                                </div>
                                            </div>
                                            <div
                                                class="ant-col ant-col-xs-14 ant-col-sm-14 ant-col-md-17 ant-col-lg-17">
                                                <div class="content">
                                                    <div class="title-blog">
                                                        <a href="{{route('client.news.detail',['id' => $item['id']])}}"
                                                           class="blank">
                                                            <span>{{$item['title']}}</span>
                                                        </a>
                                                    </div>
                                                    <div class="text description">
                                                        <a href="{{route('client.news.detail',['id' => $item['id']])}}"
                                                           class="blank">
                                                            <p>
                                                                {!! $item['description'] !!}
                                                            </p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
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
    {{$news->links()}}
@endsection
