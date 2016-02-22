<div class="panel panel-default text-center">
    <div class="panel-heading" style="font-size: 24px;">调查</div>
    <div class="panel-body" style="font-size: large;">
        <form class="form-horizontal" method="post" action="{{url('choose/store')}}">
            {!! csrf_field() !!}
            <input name="type" value="1" type="hidden">
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

            <div class="radio form-group">
                <label>
                    <input type="radio" name="option" id="optionsRadios5" value="不参加工作室的项目">
                    <span>有其他事情,这学期不参加工作室的项目</span>
                </label>
            </div>

            <button type="submit" class="btn btn-default" style="margin: 20px;">提交</button>
        </form>
    </div>
    <div class="panel-footer" style="font-size: large;">DA Wizards工作室</div>
</div>