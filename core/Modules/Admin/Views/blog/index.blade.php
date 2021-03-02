@extends('Admin::layout.app')

@section('bodyID','blog')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Responsive Hover Table</h3>

                    <div class="box-tools">
                        <a href="{{route('admin.blog.create')}}" class="btn btn-info">Create</a>
                        <div class="input-group input-group-sm hidden-xs" style="width: 300px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody><tr>
                            <th>ID</th>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Jobs</th>
                            <th>Publish At</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>News 1</td>
                            <td>des 1</td>
                            <td>Job 1</td>
                            <td>11-7-2014</td>
                            <td><span class="label label-success">Approved</span></td>
                            <td>
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
