@extends('Admin::layout.app')

@section('title','Edit News')

@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="box box-primary">
                <div class="box-header with-border text-center">
                    <h3 class="box-title">
                        Create News for 30Shine
                    </h3>
                </div>
                <form action="{{route('admin.news.update',['id' => $data['id']])}}" role="form" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                        @if($errors->has('title'))
                            <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                        @endif
                        <div class="form-group">
                            <label for="">Tittle</label>
                            <input type="text" name="title" class="form-control" value="{{$data['title']}}">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control">
                                {!! $data['description'] !!}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Publish At:</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker" name="published_at" value="{{$data['published_at']}}">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group check-publish">
                            <label for="">
                                Publish:
                            </label>
                            <input type="checkbox" name="is_publish" id="is_publish" style="display: none" {{$data['is_publish'] == 1 ? 'checked="checked   "' : ''}}>
                            <div class="toggle-icon {{$data['is_publish'] == 1 ? 'active' : ''}}">
                                <a href="javascript:void(0)"></a>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
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
                autoclose:true,
            });

            CKEDITOR.replace('description');

            $('.toggle-icon').on('click',function () {
                $(this).toggleClass('active');
                if($(this).hasClass('active')){
                    $('#is_publish').attr('checked','checked');
                }else{
                    $('#is_publish').removeAttr('checked');
                }
            })
        });
    </script>
@endsection
