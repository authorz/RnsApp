<div class="bg-light lter b-b wrapper-md">
    <h1 class="m-n font-thin h3"><i class="icon-magnifier i-sm m-r-sm"></i> Save Menu</h1>
</div>
<div class="wrapper-md">
    <div class="row" ng-controller="savemenu">
        <div class="col-sm-12">
            <div class="panel panel-default">

                <div class="panel-body">
                    <form role="form" ng-submit="processForm()">
                        <input type="hidden" value="{{ csrf_token() }}" name="X-CSRF-TOKEN">
                        <div class="form-group">
                            <label>上级菜单</label>
                            <select ng-model="formData.pid"  class="form-control m-b">
                                <option value="0">顶级菜单</option>
                                @foreach($menuData as $value)
                                <option value="{{ $value['id'] }}">{{ $value['title2'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>菜单名称</label>
                            <input type="text" class="form-control" ng-model="formData.title" placeholder="Title" >
                        </div>
                        <div class="form-group">
                            <label>链接</label>
                            <input type="text" class="form-control" ng-model="formData.url" placeholder="Url">
                        </div>
                        <div class="form-group">
                            <label>图标</label>
                            <input type="text" class="form-control" ng-model="formData.icon" placeholder="Icon">
                        </div>
                        <div class="form-group">
                            <label>排序</label>
                            <input type="text" class="form-control" ng-model="formData.sort" placeholder="Sort">
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        <button type="button" class="btn btn-sm btn-primary" onClick="javascript: history.go(-1);">Return</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>