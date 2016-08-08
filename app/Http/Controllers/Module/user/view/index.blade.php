@extends('admin.default.template.basic')
@section('app-content')
    <button type="button" class="btn btn-primary" style="margin: 15px">上传模块(要求.zip 格式)</button>
    <div class="row" style="margin-top: 10px">
        <div class="col-sm-6 col-md-2">
            <div class="thumbnail">
                <img src="/admin/img/a0.jpg" alt="...">
                <div class="caption">
                    <h3>module</h3>
                    <p>这是解释干什么的</p>
                    <p>
                        <a href="#" class="btn btn-primary" role="button">安装</a>
                        <a href="#" class="btn btn-default" role="button">查看</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
@stop
