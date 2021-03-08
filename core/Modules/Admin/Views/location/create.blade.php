@extends('Admin::layout.app')

@section('title','30Shine Branch Location')

@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="box box-primary">
                <div class="box-header with-border text-center">
                    <h3 class="box-title">
                        Tạo cơ sở mới cho 30Shine
                    </h3>
                </div>
                <form action="{{route('admin.location.store')}}" role="form" method="POST">
                    @csrf
                    <div class="box-body">
                        @if($errors->has('street'))
                            <div class="alert alert-danger">{{ $errors->first('street') }}</div>
                        @endif
                        <div class="form-group">
                            <label for="">Đường</label>
                            <input type="text" name="street" class="form-control" value="{{old('street')}}">
                        </div>
                            @if($errors->has('city'))
                                <div class="alert alert-danger">{{ $errors->first('city') }}</div>
                            @endif
                        <div class="form-group">
                            <label for="">Thành phố:</label>
                            <input type="text" name="city" class="form-control" value="{{old('city')}}">
                        </div>
                            @if($errors->has('country'))
                                <div class="alert alert-danger">{{ $errors->first('country') }}</div>
                            @endif
                        <div class="form-group" style="width: 30%">
                            <label for="">Quốc gia</label>
                            <select name="country" class="form-control">
                                @foreach($countries as $country)
                                    <option value="{{$country}}">{{$country}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" style="width: 30%">
                            <label for="">Mã bưu chính</label>
                            <input type="text" name="zip" class="form-control" value="{{old('zip')}}">
                        </div>
                        <div class="form-group" style="width: 30%">
                            <label for="">Mã bưu điện</label>
                            <input type="text" name="post_code" class="form-control" value="{{old('post_code')}}">
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

