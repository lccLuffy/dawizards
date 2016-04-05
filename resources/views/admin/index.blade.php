@extends('layouts.admin')
@section('css')
    <link href="http://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
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
                                @if(isset($data) && in_array($join->email,$data))
                                    <button class="btn btn-success btn-sm"
                                            onclick="sendEmail('{{ $join->name }}','{{ $join->email }}')">
                                        <i class="fa fa-send"></i> 已发送
                                    </button>
                                @else
                                    <button class="btn btn-default btn-sm"
                                            onclick="sendEmail('{{ $join->name }}','{{ $join->email }}')">
                                        <i class="fa fa-send"></i> 邮件
                                    </button>
                                @endif

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
    {{-- 发邮件 --}}
    <div class="modal fade" id="modal-send" tabIndex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        ×
                    </button>
                    <h4 class="modal-title">Send Email</h4>
                </div>
                <form id="deleteForm" method="POST" action="{{url('send/email')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="modal-body">
                        <p class="lead">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">邮箱</span>
                                <input id="input-send-email" class="form-control"
                                       readonly
                                       name="address">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">姓名</span>
                                <input id="input-send-name" class="form-control"
                                       readonly
                                       name="name">
                            </div>
                        </div>
                        <div class="form-group" style="width: 100%">
                            <div class="input-group" style="width: 100%">
                                <textarea rows="5" name="content" style="width: 100%;font-size: 20px"
                                          id="email-content"></textarea>
                            </div>
                        </div>

                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-send-o"></i> Send
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="http://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
    <script>
        $('#join-table').DataTable({
            "aaSorting": [
                [9, "desc"]
            ],
            "iDisplayLength": 100,
        })

        function deleteJoin(id, name) {
            $('#stu_name').text(name)
            $('#deleteForm').attr("action", '{{url('/')}}' + '/choose/' + id)
            $('#modal-delete').modal()
        }
        function sendEmail(name, email) {
            $('#input-send-email').attr('value', email);
            $('#input-send-name').attr('value', name);
            $('#email-content').text(name + '同学你好，恭喜你已经进入正式考核阶段啦。' +
                    '请尽快加入我们的考核群：472985724 我们将在群里发布后续通知.DA wizards期待你的加入！');
            $('#modal-send').modal()
        }
    </script>

@endsection

