@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 200px;">
        @include('partials.errors')
        @include('partials.success')
        <div class="panel panel-primary text-center">
            <div class="panel-heading" style="font-size: 24px;">调查</div>
            <div class="panel-body" style="font-size: large;">
                <form class="form-horizontal" method="post" action="{{url('choose/store')}}">
                    {!! csrf_field() !!}
                    <div class="radio form-group">
                        <label>
                            <span>学号</span><input type="text" name="stu_num" id="ios" class="form-controller" value="{{old('stu_num')}}">
                        </label>
                    </div>
                    <div class="radio form-group">
                        <label>
                            <input type="radio" name="option" id="ios" value="ios" class="form-controller">
                            <span>iOS开发</span>
                        </label>
                    </div>

                    <div class="radio" >
                        <label>
                            <input type="radio" name="option" id="android" value="android">
                            <span>安卓开发</span>
                        </label>
                    </div>

                    <div class="radio">
                        <label>
                            <input type="radio" name="option" id="optionsRadios3" value="game">
                            <span>游戏制作</span>
                        </label>
                    </div>

                    <div class="radio">
                        <label>
                            <input type="radio" name="option" id="optionsRadios4" value="web">
                            <span>WEB开发</span>
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="option" id="optionsRadios5" value="comic">
                            <span>动漫制作</span>
                        </label>
                    </div>

                    <div class="radio form-group">
                        <label>
                            <input type="radio" name="option" id="optionsRadios5" value="other">
                            <span>有其他事情,这学期不参加工作室的项目</span>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-default" style="margin: 20px;">提交</button>
                </form>
            </div>
            <div class="panel-footer" style="font-size: large;">DA Wizards工作室</div>
        </div>



    </div>
@stop