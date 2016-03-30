@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('partials.errors')
                @include('partials.success')
                <div class="panel panel-success">
                    <div class="panel-heading">
                        DA wizards
                    </div>
                    <div class="panel-body">

                        <a href="{{ url('impress') }}">
                            <button class="btn btn-info">工作室介绍</button>
                        </a>
                        <a href="{{ url('join') }}">
                            <button class="btn btn-success">加入我们</button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
