@extends('Admin::layout.app')

@section('bodyID','job')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Các công việc cho 30Shine</h3>

                    <div class="box-tools">
                        <a href="{{route('admin.job.create')}}" class="btn btn-info">Thêm</a>
                        <div class="input-group input-group-sm hidden-xs" style="width: 300px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Tìm kiếm ...">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default" id="searchJobs"><i
                                        class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Phòng ban</th>
                            <th>Tên công việc</th>
                            <th class="col-xs-3">Mô tả chi tiết</th>
                            <th>JD</th>
                            <th class="col-xs-1">Số lượng ứng viên</th>
                            <th>Mức lương</th>
                            <th>Thời gian ứng tuyển</th>
                            <th>Thời gian kết thúc</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody class="job-data">
                        @foreach($data as $key => $value)
                            <tr>
                                <td>{{$value['id']}}</td>
                                <td>{{$value->category->name}}</td>
                                <td>{{$value['title']}}</td>
                                <td class="description-news">{!! $value['description'] !!}</td>
                                <td>
                                    <a href="{{cxl_storage_admin('pdf/'.$value['jd'])}}" target="_blank">{{$value['jd']}}</a>
                                </td>
                                <td>{{$value['number_of_employees']}}</td>
                                <td>{{$value['salary']}}</td>
                                <td>{{$value['applied_at']}}</td>
                                <td>{{$value['ended_at']}}</td>
                                <td>
                                    <a href="{{route('admin.document.getFile',['id' => $value['id']])}}"
                                       class="btn btn-info">Tạo file PDF</a>
                                    <a href="{{route('admin.job.edit',['id' => $value['id']])}}"
                                       class="btn btn-warning">Sửa</a>
                                    <form action="{{route('admin.job.delete',['id' => $value['id']])}}" method="POST"
                                          style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                    </form>
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
@section('script')
    <script type="text/javascript">
        $(function () {
            let _load = false;
            $(document).on('click', '#searchJobs', function () {
                if (_load === false) {
                    _load = true;
                    let key = $('input[name=table_search]').val();
                    $.ajax({
                        url: '{{route('admin.job.search')}}',
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            key: key,
                        },
                        success: function (data) {
                            _load = false;
                            if (data.length > 0) {
                                let html = '';
                                for (let i = 0; i < data.length; i++) {
                                    let id = data[i]['id'],
                                        department = data[i]['name'],
                                        title = data[i]['title'],
                                        description = data[i]['description'],
                                        jd = data[i]['jd'],
                                        number_of_employees = data[i]['number_of_employees'],
                                        salary = data[i]['salary'],
                                        applied_at = data[i]['applied_at'],
                                        ended_at = data[i]['ended_at'],
                                        url_jd = '{{cxl_storage_admin('')}}/' + data[i]['jd'];
                                        url = window.location.origin + '/admin/';
                                    if (jd == null)
                                    {
                                        jd = '';
                                    }

                                    html += '<tr>\n' +
                                        '                                <td>' + id + '</td>\n' +
                                        '                                <td>' + department + '</td>\n' +
                                        '                                <td>' + title + '</td>\n' +
                                        '                                <td class="description-news">' + description + '</td>\n' +
                                        '                                <td>\n' +
                                        '                                    <a href="' + url_jd + '" target="_blank">' + jd + '</a>\n' +
                                        '                                </td>\n' +
                                        '                                <td>' + number_of_employees + '</td>\n' +
                                        '                                <td>' + salary + '</td>\n' +
                                        '                                <td>' + applied_at + '</td>\n' +
                                        '                                <td>' + ended_at + '</td>\n' +
                                        '                                <td>\n' +
                                        '                                    <a href="' + url + '/document/pdf-file/' + id + '" class="btn btn-info">Generate PDF</a>\n' +
                                        '                                    <a href="' + url + '/edit/' + id + '" class="btn btn-warning">Edit</a>\n' +
                                        '                                    <form action="' + url + '/delete/' + id + '" method="POST" style="display: inline-block">\n' +
                                        '                                        @csrf\n' +
                                        '                                        @method('DELETE')\n' +
                                        '                                        <button type="submit" class="btn btn-danger">Delete</button>\n' +
                                        '                                    </form>\n' +
                                        '                                </td>\n' +
                                        '                            </tr>'


                                }
                                $('.job-data').html(html);
                            } else {
                                _load = true;
                            }
                        },
                        error: function () {
                            _load = true;
                            alert('Something wrong please try again')
                        }
                    })
                }
            })
        })
    </script>
@endsection
