<div class="panel panel-default text-center">
    <div class="panel-heading" style="font-size: 24px;">DA wizards 招新报名表</div>
    <div class="panel-body" style="font-size: large;">
        <form class="form-horizontal" method="post" action="{{url('choose/store')}}">
            {!! csrf_field() !!}
            <input name="type" value="1" type="hidden">
            <div class="col-md-10 col-md-offset-1">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">学号</span> <input class="form-control" type="text"
                                                                         disabled value="{{$user->stu_num}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">姓名</span><input class="form-control" type="text"
                                                                        disabled value="{{$user->name}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">专业</span> <input disabled class="form-control"
                                                                         type="text"
                                                                         name="phone_number"
                                                                         value="{{$user_info->专业}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">邮箱</span> <input class="form-control" type="email"
                                                                         name="address"
                                                                         value="{{$user->address}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">你自学过什么?</label>
                    <textarea class="form-control" id="exampleInputEmail1" rows="2"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">项目经历</label>
                    <textarea class="form-control" id="exampleInputEmail1" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">进入工作室后,想要学到什么?</label>
                    <textarea class="form-control" id="exampleInputEmail1" rows="2"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">你的脑袋什么颜色?</label>
                    <textarea class="form-control" id="exampleInputEmail1" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">你对哪些方向感兴趣</span>
                        <select class="form-control" id="choose" multiple>
                            <option value="IOS开发">IOS开发</option>
                            <option value="安卓开发">安卓开发</option>
                            <option value="游戏制作" selected>游戏制作</option>
                            <option value="WEB开发">WEB开发</option>
                            <option value="动漫制作">动漫制作</option>
                            <option value="美工">美工</option>
                        </select>
                    </div>
                </div>


                <div class="col-md-10">
                    <div class="form-group">
                        <div class="input-group">
                            <button type="submit" class="btn btn-default form-control">提交</button>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
    <div class="panel-footer" style="font-size: large;">DA Wizards工作室</div>
</div>