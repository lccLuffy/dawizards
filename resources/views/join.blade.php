@extends('layouts.app')
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet"/>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('partials.success')
                <div class="panel panel-success">
                    <div class="panel-heading">
                        注意
                    </div>
                    <div class="panel-body">
                        <h3>4月1日之前填写,5号给出面试名单
                        </h3>
                    </div>
                </div>
                @include('choose')
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
