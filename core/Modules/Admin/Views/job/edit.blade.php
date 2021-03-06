@extends('Admin::layout.app')

@section('title','30Shine Job')

@section('bodyID','job')

@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="box box-primary">
                <div class="box-header with-border text-center">
                    <h3 class="box-title">
                        Chỉnh sửa công việc 30Shine
                    </h3>
                </div>
                <form action="{{route('admin.job.update',['id' => $data['id']])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                        <div class="form-group">
                            <label for="">Cơ sở làm việc:</label>
                            <select name="branch_location" id="" class="form-control" style="width: 20%" disabled>
                                <option value="">{{ $data->find_branch_location[0]->street . ',' . $data->find_branch_location[0]->city . ',' . $data->find_branch_location[0]->country }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Phòng ban:</label>
                            <select name="category_id" id="" class="form-control" style="width: 20%" disabled>
                                 <option>{{$data->category->name}}</option>
                            </select>
                        </div>
                        @if($errors->has('title'))
                            <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                        @endif
                        <div class="form-group">
                            <label for="">Tên công việc:</label>
                            <input type="text" class="form-control" name="title" value="{{$data['title']}}">
                        </div>
                        @if($errors->has('description'))
                            <div class="alert alert-danger">{{ $errors->first('description') }}</div>
                        @endif
                        <div class="form-group">
                            <label for="">Mô tả chi tiết:</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{!! $data->description !!}</textarea>
                        </div>
                        @if($errors->has('jd'))
                            <div class="alert alert-danger">{{ $errors->first('jd') }}</div>
                        @endif
                        <div class="form-group">
                            <label for="importJD">Thêm JD:</label>
                            <input type="file" id="importJD" accept=".pdf" name="jd">
                        </div>
                        <div class="form-group" style="width: 20%">
                            <label for="">Số lượng ứng viên:</label>
                            <input type="number" class="form-control" name="number_of_employees" value="{{$data['number_of_employees']}}">
                        </div>
                        <div class="form-group">
                            <label for="">Mức lương:</label>
                            <input type="number" class="form-control" name="salary" value="{{$data['salary']}}">
                        </div>
                        <div class="form-group">
                            <label>Thời gian ứng tuyển:</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker1" name="applied_at" value="{{$data['applied_at']}}">
                            </div>
                            <!-- /.input group -->
                        </div>
                        @if($errors->has('ended_at'))
                            <div class="alert alert-danger">{{ $errors->first('ended_at') }}</div>
                        @endif
                        <div class="form-group">
                            <label>Thời gian kết thúc:</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker2" name="ended_at" value="{{$data['ended_at']}}">
                            </div>
                            <!-- /.input group -->
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
            $('#datepicker1').datepicker({
                locale: 'en',
                autoclose: true,
            });
            $('#datepicker2').datepicker({
                locale: 'en',
                autoclose: true,
            });

            CKEDITOR.replace('description');

        });
    </script>
@endsection
