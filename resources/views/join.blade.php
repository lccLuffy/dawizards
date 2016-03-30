@extends('layouts.app')
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet"/>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('partials.errors')
                @include('partials.success')
                @if(Auth::check())
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
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
    <script>
        $('#choose').select2();
    </script>
@endsection
