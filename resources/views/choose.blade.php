<div class="panel panel-default text-center">
    <div class="panel-heading" style="font-size: 24px;">调查</div>
    <div class="panel-body" style="font-size: large;">
        <form class="form-horizontal" method="post" action="{{url('choose/store')}}">
            {!! csrf_field() !!}
            <input name="type" value="1" type="hidden">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">学号</span> <input class="form-control" type="text"
                                                                         disabled="true" value="{{$user->stu_num}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">姓名</span> <input class="form-control" type="text"
                                                                         disabled="true" value="{{$user->name}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">专业</span> <input disabled="true" class="form-control"
                                                                         type="text"
                                                                         name="phone_number"
                                                                         value="{{$user_info->专业}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">邮箱</span> <input class="form-control" type="text" name="address"
                                                                         value="{{$user->address}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">你自学过什么?*</label>
                    <textarea class="form-control" id="exampleInputEmail1" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">项目经历*</label>
                    <textarea class="form-control" id="exampleInputEmail1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">进入工作室后,想要学到什么?*</label>
                    <textarea class="form-control" id="exampleInputEmail1" rows="3"></textarea>
                </div>
                <p>你对哪个方向感兴趣？</p>
                <div class="radio form-group">
                    <label>
                        <input type="radio" name="option" id="ios" value="IOS开发" class="form-controller">
                        <span>IOS开发</span>
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" name="option" id="android" value="安卓开发">
                        <span>安卓开发</span>
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" name="option" id="optionsRadios3" value="游戏制作">
                        <span>游戏制作</span>
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" name="option" id="optionsRadios4" value="WEB开发">
                        <span>WEB开发</span>
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="option" id="optionsRadios5" value="动漫制作">
                        <span>动漫制作</span>
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="option" id="optionsRadios5" value="动漫制作">
                        <span>美工</span>
                    </label>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <button type="submit" class="btn btn-default">提交</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="panel-footer" style="font-size: large;">DA Wizards工作室</div>
</div>