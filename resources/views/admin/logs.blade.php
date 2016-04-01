@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <table id="users-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th class="hidden-md">操作者</th>
                        <th class="hidden-md">内容</th>
                        <th class="hidden-md">时间</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($logs as $log)
                        <tr>
                            <td class="hidden-md">{{$log->user->name}}</td>
                            <td class="hidden-md">{{$log->content}}</td>
                            <td class="hidden-md">{{$log->created_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

