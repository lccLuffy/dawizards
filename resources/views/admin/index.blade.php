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
                        <th class="hidden-md">专业</th>
                        <th class="hidden-md">邮箱</th>
                        <th class="hidden-md">自学过</th>
                        <th class="hidden-md">项目经历</th>
                        <th class="hidden-md">想要学到什么</th>
                        <th class="hidden-md">脑袋什么颜色</th>
                        <th class="hidden-md">感兴趣方向</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($joins as $join)
                        <tr>
                            <td class="hidden-md">{{$join->name}}</td>
                            <td class="hidden-md">{{$join->stu_num}}</td>
                            <td class="hidden-md">{{$join->major}}</td>
                            <td class="hidden-md">{{$join->email}}</td>
                            <td class="hidden-md">{{$join->hasLearned}}</td>
                            <td class="hidden-md">{{$join->experience}}</td>
                            <td class="hidden-md">{{$join->wantLearn}}</td>
                            <td class="hidden-md">{{$join->brainColor}}</td>
                            <td class="hidden-md">{{$join->choose}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

