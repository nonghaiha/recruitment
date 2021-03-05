@extends('Admin::layout.app')

@section('title','30Shine Branch Location')

@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="box box-primary">
                <div class="box-header with-border text-center">
                    <h3 class="box-title">
                        Create Branch Location for 30Shine
                    </h3>
                </div>
                <form action="{{route('admin.location.update',['id' => $data['id']])}}" role="form" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                        @if($errors->has('street'))
                            <div class="alert alert-danger">{{ $errors->first('street') }}</div>
                        @endif
                        <div class="form-group">
                            <label for="">Street</label>
                            <input type="text" name="street" class="form-control" value="{{$data['street']}}">
                        </div>
                        @if($errors->has('city'))
                            <div class="alert alert-danger">{{ $errors->first('city') }}</div>
                        @endif
                        <div class="form-group">
                            <label for="">City:</label>
                            <input type="text" name="city" class="form-control" value="{{$data['city']}}">
                        </div>
                        @if($errors->has('country'))
                            <div class="alert alert-danger">{{ $errors->first('country') }}</div>
                        @endif
                        <div class="form-group" style="width: 30%">
                            <label for="">Country</label>
                            <select name="country" class="form-control" disabled>
                                <option value="{{$data['country']}}">{{$data['country']}}</option>
                            </select>
                        </div>
                        <div class="form-group" style="width: 30%">
                            <label for="">Zip</label>
                            <input type="text" name="zip" class="form-control" value="{{$data['zip']}}">
                        </div>
                        <div class="form-group" style="width: 30%">
                            <label for="">Post Code</label>
                            <input type="text" name="post_code" class="form-control" value="{{$data['post_code']}}">
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

