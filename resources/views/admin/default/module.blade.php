@extends('admin.default.template.basic')
@section('app-content')
    <button type="button" class="btn btn-primary" style="margin: 15px">上传模块(要求.zip 格式)</button>
    <div class="row" style="margin-top: 10px">
        @foreach($menu as $value)
        <div class="col-sm-6 col-md-2">
            <div class="thumbnail">
                <img src="/module/{{ $value['module'] }}/{{ $value['cover'] }}" alt="...">
                <div class="caption">
                    <h3>{{ $value['title'] }}</h3>
                    <p>{{ $value['describe'] }}</p>
                    <p>
                        <a href="#" class="btn btn-primary" role="button">安装</a>
                        <a href="#" class="btn btn-default" role="button">查看</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@stop
