@extends('Admin::layout.app')

@section('title','Location 30Shine')

@section('bodyID','location')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Branch Location for 30Shine</h3>

                    <div class="box-tools">
                        <a href="{{route('admin.location.create')}}" class="btn btn-info">Create</a>
                        <div class="input-group input-group-sm hidden-xs" style="width: 300px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default" id="searchLocations"><i
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
                            <th>Street</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Zip</th>
                            <th>Post Code</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody class="locations-data">
                        @foreach($data as $values)
                            <tr>
                                <td>{{$values['id']}}</td>
                                <td>{{$values['street']}}</td>
                                <td>{{$values['city']}}</td>
                                <td>{{$values['country']}}</td>
                                <td>{{$values['zip']}}</td>
                                <td>{{$values['post_code']}}</td>
                                <td>
                                    <a href="{{route('admin.location.edit',['id' => $values['id']])}}"
                                       class="btn btn-warning">Edit</a>
                                    <form action="{{route('admin.location.delete',['id' => $values['id']])}}"
                                          method="POST"
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
            $(document).on('click', '#searchLocations', function () {
                if (_load === false) {
                    _load = true;
                    let data = $('input[name=table_search]').val();
                    $.ajax({
                        url: '{{route('admin.location.search')}}',
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
                                        street = data[i]['street'],
                                        city = data[i]['city'],
                                        country = data[i]['country'],
                                        zip = data[i]['zip'],
                                        post_code = data[i]['post_code'],
                                        url = window.location.origin + '/admin/location/';

                                    html += '<tr>\n' +
                                        '                                <td>' + id + '</td>\n' +
                                        '                                <td>' + street + '</td>\n' +
                                        '                                <td>' + city + '</td>\n' +
                                        '                                <td>' + country + '</td>\n' +
                                        '                                <td>' + zip + '</td>\n' +
                                        '                                <td> ' + post_code + '</td>\n' +
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
                                $('.locations-data').html(html);
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

