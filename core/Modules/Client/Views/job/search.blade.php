@extends('Client::layout.app')

@section('title','30Shine Search Job')
@section('content')
    <div class="container-recruitment">
        <div class="head-sec">
            <h2 class="title-main">Các vị trí hiện tại</h2>
            <p class="desc">
                Chúng tôi luôn tìm kiếm những người tuyệt vời! Nếu bạn chưa tìm thấy cơ hội phù hợp hiện tại, nhưng
                tin rằng bạn có thể trở thành 1 phần của 30Shine, hãy gửi thông tin cho chúng tôi.
            </p>
        </div>
        <div class="content-sec">
            <div class="list-jobs panel active" id="cat-1">
                <h3 class="title-cat">
                    {{$data['name']}}
                </h3>
                <div class="box-cat">
                    @foreach($data->job as $value)
                        <div class="item-job full">
                            <div class="cell name-job">
                                @if(sizeof($value->find_branch_location) > 0)
                                    <h3 class="title"><a href="{{route('client.job.detail',['id' => $value['id']])}}">[{{$value->find_branch_location[0]->city}}] {{ $value['title'] }} </a> </h3>
                                @endif
                            </div>
                            <div class="cell desc">
                                <p class="info date"><span class="fa fa-clock-o -ap"></span> Full-time</p>
                                @if(sizeof($value->find_branch_location) > 0)
                                    <p class="info"><span class="icon-location6 -ap"></span> Địa điểm phỏng vấn: <a class="_blank" href="#">{{ $value->find_branch_location[0]->street . ', ' . $value->find_branch_location[0]->city . ', ' . $value->find_branch_location[0]->country }}</a></p>
                                @endif
                            </div>
                            <div class="cta cell">
                                <a href="{{route('client.job.detail',['id' => $value['id']])}}" class="btn-apply">Ứng tuyển </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection
