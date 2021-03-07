@extends('Admin::layout.app')

@section('title','30Shine Job')

@section('bodyID','job')

@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="box box-primary">
                <div class="box-header with-border text-center">
                    <h3 class="box-title">
                        Create Job of 30Shine
                    </h3>
                </div>
                <form action="{{route('admin.job.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        @if($errors->has('branch_location'))
                            <div class="alert alert-danger">{{ $errors->first('branch_location') }}</div>
                        @endif
                        <div class="form-group">
                            <label for="">Branch Location:</label>
                            <select name="branch_location" id="" class="form-control" style="width: 20%">
                                @foreach($locations as $location)
                                    <option value="{{$location['id']}}">{{ $location['street'] . ',' . $location['city'] . ',' . $location['country'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->has('category_id'))
                            <div class="alert alert-danger">{{ $errors->first('category_id') }}</div>
                        @endif
                        <div class="form-group">
                            <label for="">Department:</label>
                            <select name="category_id" id="" class="form-control" style="width: 20%">
                                @foreach($categories as $category)
                                    <option value="{{$category['id']}}">{{$category['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->has('title'))
                            <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                        @endif
                        <div class="form-group">
                            <label for="">Title:</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label for="">Description:</label>
                            <textarea name="description" id="description" cols="30" rows="10"
                                      class="form-control"></textarea>
                        </div>
                            @if($errors->has('jd'))
                                <div class="alert alert-danger">{{ $errors->first('jd') }}</div>
                            @endif
                        <div class="form-group">
                            <label for="importJD">Import JD:</label>
                            <input type="file" id="importJD" accept=".pdf" name="jd">
                        </div>
                        <div class="form-group" style="width: 20%">
                            <label for="">Number of Employees:</label>
                            <input type="number" class="form-control" name="number_of_employees">
                        </div>
                        <div class="form-group">
                            <label for="">Salary:</label>
                            <input type="number" class="form-control" name="salary">
                        </div>
                        <div class="form-group">
                            <label>Applied At:</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker1" name="applied_at">
                            </div>
                            <!-- /.input group -->
                        </div>
                        @if($errors->has('ended_at'))
                            <div class="alert alert-danger">{{ $errors->first('ended_at') }}</div>
                        @endif
                        <div class="form-group">
                            <label>Ended At:</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker2" name="ended_at">
                            </div>
                            <!-- /.input group -->
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
            $('#datepicker1').datepicker({
                locale: 'en',
                autoclose: true,
            });
            $('#datepicker2').datepicker({
                locale: 'en',
                autoclose: true,
            });

            CKEDITOR.replace('description');

            $('#importJD').on('change',function () {
                console.log($(this)[0].files[0]);
            })
        });
    </script>
@endsection
