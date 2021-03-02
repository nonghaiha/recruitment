@extends('Admin::layout.app')

@section('content')
        <div class="col-md-12">
            <div class="row">
                <div class="box box-primary">
                    <div class="box-header with-border text-center">
                        <h3 class="box-title">
                            Create Department of 30Shine
                        </h3>
                    </div>
                    <form action="{{route('admin.category.store')}}" role="form" method="POST">
                        @csrf
                        <div class="box-body">
                            @if($errors->has('name'))
                                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                            @endif
                            <div class="form-group">
                                <label for="nameCategory">Name</label>
                                <input type="text" name="name" id="nameCategory" placeholder="Enter name of Department" class="form-control" value="{{old('name')}}">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
                            </div>
                            @if($errors->has('tag'))
                                <div class="alert alert-danger">{{ $errors->first('tag') }}</div>
                            @endif
                            <div class="form-group">
                                <label for="">Tag</label>
                                <input type="text" name="tag" id="tagCategory" class="form-control" value="{{old('tag')}}">
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
        $(function(){

            //CONFIG CKEDITOR
            CKEDITOR.replace('description',function(){

            });
        });
    </script>
@endsection
