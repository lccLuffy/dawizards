@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">

                <table id="users-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th class="hidden-md">姓名</th>
                        <th class="hidden-md">选项</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($choices as $choice)
                        <tr>
                            <th class="hidden-md">{{$choice->user->name}}</th>
                            <th class="hidden-md">{{$choice->value}}</th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

