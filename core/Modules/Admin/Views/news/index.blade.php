@extends('Admin::layout.app')

@section('bodyID','blog')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">News for 30Shine</h3>

                    <div class="box-tools">
                        <a href="{{route('admin.news.create')}}" class="btn btn-info">Create</a>
                        <div class="input-group input-group-sm hidden-xs" style="width: 300px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default" id="searchNews"><i
                                        class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Thumbnail</th>
                            <th>Description</th>
                            <th>Publish At</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody class="news-data">
                        @foreach($data as $key => $value)
                            <tr>
                                <td>{{$value['id']}}</td>
                                <td>{{$value->author->name}}</td>
                                <td>{{$value['title']}}</td>
                                <td><img src="{{cxl_storage_news('thumbnail/'.$value['thumbnail'])}}" alt="" class="img-news"></td>
                                <td>{!! $value['description'] !!}</td>
                                <td>{{ $value['published_at'] }}</td>
                                <td><span
                                        class="label {{$value['is_publish'] == 1 ? 'label-success' : 'label-warning'}}">{{ $value['is_publish'] == 1 ? 'Posted' : 'Pending' }}</span>
                                </td>
                                <td>
                                    <a href="{{route('admin.news.edit',['id' => $value['id']])}}"
                                       class="btn btn-warning">Edit</a>
                                    <form action="{{route('admin.news.delete',['id' => $value['id']])}}" method="POST"
                                          style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
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
            $(document).on('click', '#searchNews', function () {
                if (_load === false) {
                    _load = true;
                    let data = $('input[name=table_search]').val();
                    $.ajax({
                        url: '{{route('admin.news.search')}}',
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        },
                        data: {
                            data: data
                        },
                        success: function (data) {
                            _load = false;
                            console.log(data);
                            if (data.length > 0) {
                                let html = '';
                                for (let i = 0; i < data.length; i++) {
                                    let id = data[i]['id'],
                                        author_name = data[i]['name'],
                                        title = data[i]['title'],
                                        description = data[i]['description'],
                                        published_at = data[i]['published_at'],
                                        is_publish = data[i]['is_publish'],
                                        status = '',
                                        class_status = '',
                                        url = window.location.origin + '/admin/news/';

                                    if (is_publish == 1) {
                                        status = 'Posted';
                                        class_status = 'label-success'
                                    } else {
                                        status = 'Pending';
                                        class_status = 'label-warning'
                                    }
                                    html += '<tr>\n' +
                                        '                                <td>' + id + '</td>\n' +
                                        '                                <td>' + author_name + '</td>\n' +
                                        '                                <td>' + title + '</td>\n' +
                                        '                                <td>' + description + '</td>\n' +
                                        '                                <td>' + published_at + '</td>\n' +
                                        '                                <td><span\n' +
                                        '                                        class="label ' + class_status + '">' + status + '</span>\n' +
                                        '                                </td>\n' +
                                        '                                <td>\n' +
                                        '                                    <a href="' + url + '/edit/' + id + '"\n' +
                                        '                                       class="btn btn-warning">Edit</a>\n' +
                                        '                                    <form action="' + url + '/delete/' + id + '" method="POST"\n' +
                                        '                                          style="display: inline-block">\n' +
                                        '                                        @csrf\n' +
                                        '                                        @method('DELETE')\n' +
                                        '                                        <button type="submit" class="btn btn-danger">Delete</button>\n' +
                                        '                                    </form>\n' +
                                        '                                </td>\n' +
                                        '                            </tr>'


                                }
                                $('.news-data').html(html);
                            } else {
                                _load = true;
                            }
                        },
                        error: function () {
                            _load = true;
                            alert('Something wrong please try again');
                        }
                    })
                }
            })
        })
    </script>
@endsection
