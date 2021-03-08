@extends('Admin::layout.app')

@section('title','Edit News')

@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="box box-primary">
                <div class="box-header with-border text-center">
                    <h3 class="box-title">
                       Tin tức về 30Shine
                    </h3>
                </div>
                <form action="{{route('admin.news.update',['id' => $data['id']])}}" role="form" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                        @if($errors->has('title'))
                            <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                        @endif
                        <div class="form-group">
                            <label for="">Tiêu đề</label>
                            <input type="text" name="title" class="form-control" value="{{$data['title']}}">
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả chi tiết</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control">
                                {!! $data['description'] !!}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Ảnh đại diện :</label>
                            <input type="file" name="thumbnail" id="thumnail" accept="image/*">
                            <span class="thumbnail-news">{{$data['thumbnail'] != null ? $data['thumbnail'] : ''}}</span>
                        </div>
                        <div class="form-group">
                            <label>Thời gian công khai:</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker" name="published_at"
                                       value="{{$data['published_at']}}">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group check-publish">
                            <label for="">
                                Công khai:
                            </label>
                            <input type="checkbox" name="is_publish" id="is_publish"
                                   style="display: none" {{$data['is_publish'] == 1 ? 'checked="checked   "' : ''}}>
                            <div class="toggle-icon {{$data['is_publish'] == 1 ? 'active' : ''}}">
                                <a href="javascript:void(0)"></a>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            $('#datepicker').datepicker({
                locale: 'en',
                autoclose: true,
            });

            CKEDITOR.replace('description');

            $('.toggle-icon').on('click', function () {
                $(this).toggleClass('active');
                if ($(this).hasClass('active')) {
                    $('#is_publish').attr('checked', 'checked');
                } else {
                    $('#is_publish').removeAttr('checked');
                }
            })
            $(document).on('change', '#thumbnail', function () {
                let file = $(this)[0].files[0].name;
                $('.thumbnail-news').html(file);
            })
        });
    </script>
@endsection
