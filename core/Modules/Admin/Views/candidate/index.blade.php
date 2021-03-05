@extends('Admin::layout.app')

@section('title', 'Candidates')

@section('content')
    <div class="col-md-12">
        <div class="row">
            <table class="table table-striped table-hover text-center">
                <thead>
                <th>#NO</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Apply Job</th>
                </thead>
                <tbody>
                @foreach($data as $key => $value)
                    <tr>
                        <td>{{ $value['id'] }}</td>
                        <td>{{ $value['name'] }}</td>
                        <td>{!! $value['description'] !!}</td>
                        <td>
                            <a href="{{route('admin.category.edit',['id' => $value['id']])}}" class="btn btn-warning">Edit</a>
                            <form action="{{route('admin.category.delete',['id' => $value['id']])}}" method="POST" style="display: inline-block">
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
@endsection
