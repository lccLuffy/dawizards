@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <table id="users-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th class="hidden-md">姓名</th>
                        <th class="hidden-md">学号</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="hidden-md">{{$user->name}}</td>
                            <td class="hidden-md">{{$user->stu_num}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

