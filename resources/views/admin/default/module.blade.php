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
                        <a href="javascript:;" class="btn btn-primary alerts" role="button" >安装</a>
                        <a href="javascript:;" class="btn btn-default alerts" role="button" >查看</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
        <script>
            $('.alerts').on('click', function(){
                layer.open({
                    type: 1,
                    skin: 'layui-layer-rim', //加上边框
                    area: ['420px', '240px'], //宽高
                    content: 'html内容'
                });
            });
        </script>
    </div>
@stop
