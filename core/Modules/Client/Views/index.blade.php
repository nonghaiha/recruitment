@extends('Client::layout.app')

@section('content')
    <div class="container">
        <div class="home">
            <div class="ant-row">
                <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-16 ant-col-lg-16">
                    <div class="box-top">
                        <div class="screen-pc swiper">
                            <div class="ant-carousel">
                                <div class="slick-slider slick-initialized" dir="ltr">
                                    <div class="slick-list">
                                        <div class="slick-track" style="width: 700%; left: -100%">
                                            <div data-index="-1" tabindex="-1" class="slick-slide slick-cloned"
                                                 aria-hidden="true" style="width: 14.285714285714286%">
                                                <div>
                                                    <div tabindex="-1"
                                                         style="width: 100%; display: inline-block">
                                                        <img
                                                            src="{{cxl_asset('client/images/banner/slide/slide2-pc.jpg')}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="0" class="slick-slide slick-active slick-current"
                                                 tabindex="-1" aria-hidden="false"
                                                 style="outline: none; width: 14.285714285714286%">
                                                <div>
                                                    <div tabindex="-1"
                                                         style="width: 100%; display: inline-block">
                                                        <img
                                                            src="{{cxl_asset('client/images/banner/slide/stylist_03-09_pc.jpg')}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="1" class="slick-slide" tabindex="-1"
                                                 aria-hidden="true"
                                                 style="outline: none; width: 14.285714285714286%">
                                                <div>
                                                    <div tabindex="-1"
                                                         style="width: 100%; display: inline-block">
                                                        <img
                                                            src="{{cxl_asset('client/images/banner/slide/slide1-pc.jpg')}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="2" class="slick-slide" tabindex="-1"
                                                 aria-hidden="true"
                                                 style="outline: none; width: 14.285714285714286%">
                                                <div>
                                                    <div tabindex="-1"
                                                         style="width: 100%; display: inline-block">
                                                        <img
                                                            src="{{cxl_asset('client/images/banner/slide/slide2-pc.jpg')}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="3" tabindex="-1" class="slick-slide slick-cloned"
                                                 aria-hidden="true" style="width: 14.285714285714286%">
                                                <div>
                                                    <div tabindex="-1"
                                                         style="width: 100%; display: inline-block">
                                                        <img
                                                            src="{{cxl_asset('client/images/banner/slide/stylist_03-09_pc.jpg')}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="4" tabindex="-1" class="slick-slide slick-cloned"
                                                 aria-hidden="true" style="width: 14.285714285714286%">
                                                <div>
                                                    <div tabindex="-1"
                                                         style="width: 100%; display: inline-block">
                                                        <img
                                                            src="{{cxl_asset('client/images/banner/slide/slide1-pc.jpg')}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="5" tabindex="-1" class="slick-slide slick-cloned"
                                                 aria-hidden="true" style="width: 14.285714285714286%">
                                                <div>
                                                    <div tabindex="-1"
                                                         style="width: 100%; display: inline-block">
                                                        <img
                                                            src="{{cxl_asset('client/images/banner/slide/slide2-pc.jpg')}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul style="display: block" class="slick-dots slick-dots-bottom">
                                        <li class="slick-active">
                                            <button>1</button>
                                        </li>
                                        <li class="">
                                            <button>2</button>
                                        </li>
                                        <li class="">
                                            <button>3</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="screen-mb swiper">
                            <div class="ant-carousel">
                                <div class="slick-slider slick-initialized" dir="ltr">
                                    <div class="slick-list">
                                        <div class="slick-track" style="width: 700%; left: -100%">
                                            <div data-index="-1" tabindex="-1" class="slick-slide slick-cloned"
                                                 aria-hidden="true" style="width: 14.285714285714286%">
                                                <div>
                                                    <div tabindex="-1"
                                                         style="width: 100%; display: inline-block">
                                                        <img
                                                            src="{{cxl_asset('client/images/banner/slide/slide2-pc.jpg')}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="0" class="slick-slide slick-active slick-current"
                                                 tabindex="-1" aria-hidden="false"
                                                 style="outline: none; width: 14.285714285714286%">
                                                <div>
                                                    <div tabindex="-1"
                                                         style="width: 100%; display: inline-block">
                                                        <img
                                                            src="{{cxl_asset('client/images/banner/slide/stylist_03-09_pc.jpg')}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="1" class="slick-slide" tabindex="-1"
                                                 aria-hidden="true"
                                                 style="outline: none; width: 14.285714285714286%">
                                                <div>
                                                    <div tabindex="-1"
                                                         style="width: 100%; display: inline-block">
                                                        <img
                                                            src="{{cxl_asset('client/images/banner/slide/slide1-pc.jpg')}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="2" class="slick-slide" tabindex="-1"
                                                 aria-hidden="true"
                                                 style="outline: none; width: 14.285714285714286%">
                                                <div>
                                                    <div tabindex="-1"
                                                         style="width: 100%; display: inline-block">
                                                        <img
                                                            src="{{cxl_asset('client/images/banner/slide/slide2-pc.jpg')}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="3" tabindex="-1" class="slick-slide slick-cloned"
                                                 aria-hidden="true" style="width: 14.285714285714286%">
                                                <div>
                                                    <div tabindex="-1"
                                                         style="width: 100%; display: inline-block">
                                                        <img
                                                            src="{{cxl_asset('client/images/banner/slide/stylist_03-09_pc.jpg')}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="4" tabindex="-1" class="slick-slide slick-cloned"
                                                 aria-hidden="true" style="width: 14.285714285714286%">
                                                <div>
                                                    <div tabindex="-1"
                                                         style="width: 100%; display: inline-block">
                                                        <img
                                                            src="{{cxl_asset('client/images/banner/slide/slide1-pc.jpg')}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="5" tabindex="-1" class="slick-slide slick-cloned"
                                                 aria-hidden="true" style="width: 14.285714285714286%">
                                                <div>
                                                    <div tabindex="-1"
                                                         style="width: 100%; display: inline-block">
                                                        <img
                                                            src="{{cxl_asset('client/images/banner/slide/slide2-pc.jpg')}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul style="display: block" class="slick-dots slick-dots-bottom">
                                        <li class="slick-active">
                                            <button>1</button>
                                        </li>
                                        <li class="">
                                            <button>2</button>
                                        </li>
                                        <li class="">
                                            <button>3</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="box-salary">
                            <div class="title">VIỆC LÀM HOT</div>
                            <div class="content">
                                @foreach($jobDesc as $key =>  $item)
                                    <div class="item">
                                        <div class="ant-row" style="cursor: pointer">
                                            <div class="ant-col ant-col-20">
                                                <div class="item-title">
                                                    <a href="{{route('client.job.detail',['id' => $item['id']])}}"
                                                       class="blank">
                                                        -
                                                        <!-- -->{{$item['title']}}
                                                        - {{$item->find_branch_location[0]->city}}
                                                    </a>
                                                </div>
                                                <div style="padding-left: 7px">
                                                    <!-- -->Thu nhập: {{$item['salary']}}
                                                </div>
                                            </div>
                                            <div class="ant-col ant-col-4">
                                                <div class="tag hot">HOT</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="job">
                            <div class="title">VIỆC LÀM THEO VỊ TRÍ</div>
                            <div class="content content-job">
                                <div class="ant-collapse ant-collapse-icon-position-left">
                                    @foreach($categories as $category)
                                        <div class="ant-collapse-item ant-collapse-item-active">
                                            <div class="ant-collapse-header" role="button" tabindex="0"
                                                 aria-expanded="true">
                                                <i aria-label="icon: right"
                                                   class="anticon anticon-right ant-collapse-arrow">
                                                    <svg
                                                        viewBox="64 64 896 896" focusable="false" class="" style="
                      -ms-transform: rotate(90deg);
                      transform: rotate(90deg);
                    " data-icon="right" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M765.7 486.8L314.9 134.7A7.97 7.97 0 0 0 302 141v77.3c0 4.9 2.3 9.6 6.1 12.6l360 281.1-360 281.1c-3.9 3-6.1 7.7-6.1 12.6V883c0 6.7 7.7 10.4 12.9 6.3l450.8-352.1a31.96 31.96 0 0 0 0-50.4z">
                                                        </path>
                                                    </svg>
                                                </i>{{$category['name']}}
                                            </div>
                                            <div class="ant-collapse-content ant-collapse-content-active">
                                                <div class="ant-collapse-content-box">
                                                    <div class="text">
                                                        @foreach($category->job as $key => $job)
                                                            <a href="{{route('client.job.detail',['id' => $job['id']])}}"
                                                               class="blank">
                                                                <span>{{$key + 1}}. {{$job['title']}}</span><br/></a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
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
            <div class="screen-mb">
                <div class="component-blog">
                    <div class="title">BLOG</div>
                    <div class="content-body"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
