@extends('Client::layout.app')

@section('title','30Shine Detail Job')

@section('bodyID','detail-job')

@section('content')
    <div class="container-recruitment">

        <div class="table full">
            <article id="article" class="article cell">

                <div class="content-article">
                    <h2>Mô tả công việc</h2>
                    <div class="detail-article">
                        {!! $data['description'] !!}
                    </div>
                </div>

                <div class="list-related" id="related">
                    <div class="name">Vị trí cùng khác tại TheCoffeeHouse</div>
                    @foreach($data->find_same_job->same_job as $key =>  $same_job)
                        <a href="{{route('client.job.detail',['id' => $same_job['id']])}}">{{$same_job['title']}}</a>
                    @endforeach
                </div>
            </article>
            <div class="sidebar-article cell">
                <!-- <div class="ctas">
                    <a onclick="Apply.focus();" class="btn-apply">Nộp hồ sơ ứng tuyển</a>
                </div> -->
                <div class="desc-job">
                    <p class="desc salary"><span>Lương:</span> <b>{{$data['salary']}}</b> <span>VNĐ</span></p>
                    @if(sizeof($data->find_branch_location) > 0)
                        <p class="desc location"><span>Địa điểm phỏng vấn:</span> <a class="blank"
                                                                                     href="#">{{$data->find_branch_location[0]->street . ', ' . $data->find_branch_location[0]->city . ', ' . $data->find_branch_location[0]->country}}</a>
                        </p>
                        @endif
                    <p class="desc location"><span>Phòng ban:</span> {{$data->category->name}}</p>
                    <p class="desc date">
                        <span>Hạn nộp hồ sơ: </span>{{\Carbon\Carbon::parse($data['applied_at'])->format('Y/m/d')}}
                        — {{\Carbon\Carbon::parse($data['ended_at'])->format('Y/m/d')}}                    </p>

                </div>

            </div>
        </div>
        <div class="clearfix"></div>


        <div id="appform">

            <div class="wrapper">

                <h1>Apply for this job</h1>

                <div class="form">
                    <form method="POST" enctype="multipart/form-data" action="{{route('client.job.apply')}}" id="formApply">
                        @csrf
                        <input type="hidden" name="job_id" value="{{$data['id']}}">
                        @if(sizeof($data->find_branch_location) > 0)
                            <input type="hidden" name="location_id" value="{{$data->find_branch_location[0]->id}}">
                        @endif
                        @if($errors->has('name'))
                            <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                        @endif
                        <div class="row xo">
                            <div class="label">Full name <span class="red">*</span></div>
                            <div class="input"><input type="text" name="name" placeholder="Full name"></div>
                        </div>

                        @if($errors->has('email'))
                            <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                        @endif
                        <div class="row">
                            <div class="label">Email <span class="red">*</span></div>
                            <div class="input"><input type="text" name="email" placeholder="Email"></div>
                        </div>

                        @if($errors->has('phone'))
                            <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
                        @endif
                        <div class="row">
                            <div class="label">Phone number <span class="red">*</span></div>
                            <div class="input"><input type="text" name="phone" placeholder="Phone number"></div>
                        </div>

                        @if($errors->has('address'))
                            <div class="alert alert-danger">{{ $errors->first('address') }}</div>
                        @endif
                        <div class="row">
                            <div class="label">Address <span class="red">*</span></div>
                            <div class="input"><input type="text" name="address" placeholder="Address"></div>
                        </div>

                        @if($errors->has('experience'))
                            <div class="alert alert-danger">{{ $errors->first('experience') }}</div>
                        @endif
                        <div class="row">
                            <div class="label">Experience<span class="red">*</span></div>
                            <div class="input">
                                <textarea name="experience" placeholder="Experience" cols="30" rows="10"></textarea>
                            </div>
                        </div>


                        @if($errors->has('avatar'))
                            <div class="alert alert-danger">{{ $errors->first('avatar') }}</div>
                        @endif
                        <div class="rows">
                            <div class="row">
                                <div class="label">Ảnh chân dung</div>
                                <div class="upload upload_avatar">
                                    <div class="text fullmask">
                                        <input type="file" id="avatar" data-cid="avatar" name="avatar" accept="image/*">
                                        <label class="more" for="avatar">
                                            Click to select image
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="attachments"></div>


                        <div class="row">
                            <div class="upload upload_pdf">
                                <div class="text full-mask">
                                    <input type="file" name="cv" accept="application/pdf" id="cvCandidates">
                                    Your CV *
                                    <div class="more">
                                        Click to select &amp; upload your CV
                                        (Sending pdf only)
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="submit button -success" onclick="$('#formApply').submit();">Apply</div>

                        <!-- <div class='cancel' onclick='Apply.cancel(this);'>
                            <span class='-ap icon-arrow-left'></span> &nbsp; Bỏ qua
                        </div> -->

                    </form>
                </div>

            </div>
        </div>

    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            $(document).on('click', '.option', function () {
                $(this).toggleClass('active')
            })
            $(document).on('change','#avatar',function () {
                let avatar = $(this)[0].files[0].name;
                $('.upload_avatar .more').html(avatar);
            })
            $(document).on('change','#cvCandidates',function () {
                let pdf = $(this)[0].files[0].name;
                $('.upload_pdf .more').html(pdf);
            })
        })
    </script>
@endsection
