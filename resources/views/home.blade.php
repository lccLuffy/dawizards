@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('partials.errors')
                @include('partials.success')
                @if(Auth::check())
                    @if(Auth::user()->choices()->where('type',1)->count() > 0)
                        <div class="panel panel-default">
                            <div class="panel-heading">{{Auth::user()->name}}的选择是(重新提交可以修改)</div>

                            <div class="panel-body">
                                <p class="caption">{{Auth::user()->choices()->where('type',1)->first()->value}}</p>
                            </div>
                        </div>
                    @endif
                    @include('choose')
                @else
                    <div class="panel panel-default">
                        <div class="panel-heading">Da Wizards</div>

                        <div class="panel-body">
                            <p class="caption">请<a href="{{url('login')}}">登录</a>或者<a href="{{url('register')}}">注册</a>
                            </p>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
