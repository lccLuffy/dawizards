<div class="panel panel-default text-center">
    <div class="panel-heading" style="font-size: 24px;">DA wizards 招新报名表</div>
    <div class="panel-body" style="font-size: large;">
        <form class="form-horizontal" method="post" action="{{url('choose/store')}}">
            {!! csrf_field() !!}
            <div class="col-md-12">
                <div class="form-group{{ $errors->has('stu_num') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <span class="input-group-addon">学号</span> <input name="stu_num" class="form-control"
                                                                         type="number" value="{{ old("stu_num") }}">
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <span class="input-group-addon">姓名</span><input name="name" class="form-control" type="text"
                                                                        value="{{ old("name") }}">
                    </div>
                </div>
                <div class="form-group{{ $errors->has('major') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <span class="input-group-addon">专业</span> <input name="major" class="form-control"
                                                                         value="{{ old("major") }}">
                    </div>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <span class="input-group-addon">邮箱</span> <input class="form-control" type="email"
                                                                         name="email" value="{{ old("email") }}">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('hasLearned') ? ' has-error' : '' }}">
                    <label for="hasLearned">你自学过什么，有什么特长?</label>
                    <textarea class="form-control" id="hasLearned" name="hasLearned"
                              rows="2"> {{ old("hasLearned") }}</textarea>
                </div>

                <div class="form-group{{ $errors->has('experience') ? ' has-error' : '' }}">
                    <label for="experience">项目经历</label>
                    <textarea placeholder="没有填无" class="form-control" id="experience" name="experience"
                              rows="2">{{ old("experience") }}</textarea>
                </div>
                <div class="form-group{{ $errors->has('wantLearn') ? ' has-error' : '' }}">
                    <label for="wantLearn">进入工作室后,想要学到什么?</label>
                    <textarea class="form-control" id="wantLearn" name="wantLearn"
                              rows="2">{{ old("wantLearn") }}</textarea>
                </div>

                <div class="form-group{{ $errors->has('brainColor') ? ' has-error' : '' }}">
                    <label for="brainColor">你的脑袋什么颜色?</label>
                    <textarea class="form-control" id="brainColor" name="brainColor"
                              rows="2">{{ old("brainColor") }}</textarea>
                </div>
                <div class="form-group{{ $errors->has('choose') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <span class="input-group-addon">感兴趣方向</span>
                        <select class="form-control" id="choose" name="choose">
                            <option value="IOS开发">IOS开发</option>
                            <option value="安卓开发">安卓开发</option>
                            <option value="游戏制作" selected>游戏制作</option>
                            <option value="WEB开发">WEB开发</option>
                            <option value="动漫制作">动漫制作</option>
                            <option value="美工">美工</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <button type="submit" class="btn btn-success form-control">提交</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="panel-footer" style="font-size: large;">DA Wizards工作室</div>
</div>