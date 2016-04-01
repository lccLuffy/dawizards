@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                @include('partials.errors')
                @include('partials.success')
                <div class="panel panel-default">
                    <div class="panel-heading">
                        信息统计
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-responsive">
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

                <table id="join-table" class="table table-striped table-bordered table-responsive">
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
                        <th class="hidden-md">时间</th>
                        <th class="hidden-md">操作</th>
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
                            <td class="hidden-md">{{$join->updated_at->format('m-d H:i')}}</td>
                            <td>
                                {{--  <button type="button" class="btn btn-danger btn-md" data-toggle="modal"
                                          data-target="#modal-delete">
                                      <i class="fa fa-times-circle"></i>
                                      Delete
                                  </button>--}}
                                <button class="btn btn-danger btn-sm"
                                        onclick="deleteJoin('{{ $join->id }}','{{ $join->name }}')"
                                        {{--data-toggle="modal" data-target="#modal-delete"--}}>
                                    <i class="fa fa-trash-o"></i> 删除
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- 确认删除 --}}
    <div class="modal fade" id="modal-delete" tabIndex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        ×
                    </button>
                    <h4 class="modal-title">Excuse me??</h4>
                </div>
                <div class="modal-body">
                    <p class="lead">
                        <i class="fa fa-question-circle fa-lg"></i>
                        确定删除
                        <strong id="stu_name"></strong>
                        的报名表吗?
                    </p>
                </div>
                <div class="modal-footer">
                    <form id="deleteForm" method="POST" action="{{url('choose',13)}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-times-circle"></i> Yes
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="http://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
    <script>
        $('#join-table').DataTable()

        function deleteJoin(id, name) {
            $('#stu_name').text(name)
            $('#deleteForm').attr("action", '{{url('/')}}' + '/choose/' + id)
            $('#modal-delete').modal()
        }
    </script>

@endsection

