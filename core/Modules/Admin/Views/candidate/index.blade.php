@extends('Admin::layout.app')

@section('title', 'Candidates')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Ứng viên ứng tuyển vào 30Shine</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm hidden-xs" style="width: 300px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Tìm kiếm...">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default" id="searchJobs"><i
                                        class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-striped table-hover text-center">
                        <thead>
                        <th>#NO</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Thời gian ứng tuyển</th>
                        </thead>
                        <tbody>
                        @foreach($data as $key => $value)
                            <tr>
                                <td>{{ $value['id'] }}</td>
                                <td>{{ $value['name'] }}</td>
                                <td>{{$value['email']}}</td>
                                <td>{{$value['phone']}}</td>
                                <td>{{$value['address']}}</td>
                                <td>{{$value['created_at']}}</td>
                                <td>
                                    <a href="{{route('admin.candidate.detail',['id' => $value['id']])}}" class="btn btn-info">Chi tiết</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
