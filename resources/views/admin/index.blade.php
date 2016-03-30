@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        信息统计
                    </div>
                    <div class="panel-body">
                        <table id="users-table" class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th class="hidden-md">总人数</th>
                                <th class="hidden-md">IOS</th>
                                <th class="hidden-md">Android</th>
                                <th class="hidden-md">Web</th>
                                <th class="hidden-md">游戏</th>
                                <th class="hidden-md">动漫</th>
                                <th class="hidden-md">美工</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="hidden-md">{{ $info['count'] }}</td>
                                <td class="hidden-md">{{ $info['ios'] }}</td>
                                <td class="hidden-md">{{ $info['android'] }}</td>
                                <td class="hidden-md">{{ $info['web'] }}</td>
                                <td class="hidden-md">{{ $info['game'] }}</td>
                                <td class="hidden-md">{{ $info['comic'] }}</td>
                                <td class="hidden-md">{{ $info['paint'] }}</td>

                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

                <table id="users-table" class="table table-striped table-bordered table-responsive">
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

