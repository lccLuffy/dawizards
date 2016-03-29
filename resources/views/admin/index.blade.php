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
                        <th class="hidden-md">更新时间</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($choices as $choice)
                        <tr>
                            <td class="hidden-md">{{$choice->user->name}}</td>
                            <td class="hidden-md">{{$choice->value}}</td>
                            <td class="hidden-md">{{$choice->updated_at->diffForHumans()}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

