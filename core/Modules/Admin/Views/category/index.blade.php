@extends('Admin::layout.app')

@section('title', 'Category')

@section('content')
    <div class="col-md-12">
        <div class="row inner">
            <a href="{{route('admin.category.create')}}" class="btn btn-success c-category">Create</a>
        </div>
        <div class="row">
            <table class="table table-striped table-hover text-center">
                <thead>
                    <th>#NO</th>
                    <th style="width: 20%">Tên phòng ban</th>
                    <th style="width: 40%">Mô tả chi tiết</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($data as $key => $value)
                    <tr>
                        <td>{{ $value['id'] }}</td>
                        <td>{{ $value['name'] }}</td>
                        <td>{!! $value['description'] !!}</td>
                        <td>
                            <a href="{{route('admin.category.edit',['id' => $value['id']])}}" class="btn btn-warning">Sửa</a>
                            <form action="{{route('admin.category.delete',['id' => $value['id']])}}" method="POST" style="display: inline-block">
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
@endsection
