<style type="text/css">
    .ng-cloak { display:none; }
</style>
<div class="bg-light lter b-b wrapper-md">
    <h1 class="m-n font-thin h3"><i class="icon-magnifier i-sm m-r-sm"></i> Set Menu</h1>
</div>
<div class="wrapper-md">
<p>
    <a ui-sref="app.system.savemenu({'menu_id':0,'state':1})" class="btn m-b-xs btn-sm btn-primary btn-addon"><i class="fa fa-plus"></i>Add</a>
    <button ui-sref="checkdelete()" class="btn m-b-xs btn-sm btn-info btn-addon"><i class="fa fa-trash-o"></i>Delete</button>
    <button class="btn m-b-xs btn-sm btn-success btn-addon"><i class="fa fa-minus"></i>Enable</button>
    <button class="btn m-b-xs btn-sm btn-warning btn-addon"><i class="fa fa-circle"></i>Disable</button>
</p>
<div class="panel panel-default">

    <div class="row wrapper">

        <div class="col-sm-3">
            <div class="input-group">
                <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped b-t b-light">
            <thead>
            <tr>
                <th style="width:20px;">
                    <label class="i-checks m-b-none">
                        <input ng-model="formData.id" type="checkbox" name="ids[]"><i></i>
                    </label>
                </th>
                <th>Id</th>
                <th>Menu Title</th>
                <th>Url</th>
                <th>Icon</th>
                <th>Sort</th>
                <th>State</th>
                <th style="width:340px;"></th>
            </tr>
            </thead>
            <tbody ng-controller="menu">

            <tr ng-repeat="x in names">
                <td><label class="i-checks m-b-none"><input  value="@{{ x.id }}"  ng-model="formData.id" type="checkbox" name="ids[]"><i></i></label></td>
                <td>@{{ x.id }}</td>
                <td>@{{ x.title2 }}</td>
                <td>@{{ x.url }}</td>
                <td>@{{ x.icon }}</td>
                <td>@{{ x.sort }}</td>
                <td ng-if="x.status == 0">
                    正常
                </td>
                <td ng-if="x.status == 1">
                    禁用
                </td>
                <td>
                    <button class="btn m-b-xs btn-sm btn-primary btn-addon" ui-sref="app.system.savemenu({'menu_id':x.id,'state':1})">Add</button>
                    <button class="btn m-b-xs btn-sm btn-info btn-addon" ui-sref="app.system.savemenu({'menu_id':x.id,'state':2})">Update</button>
                    <button class="btn m-b-xs btn-sm btn-info btn-danger" ng-controller="delmenu" ng-click="delmenu(x.id)" >Delete</button>
                    <button ng-if="x.status == 1" class="btn m-b-xs btn-sm btn-success btn-addon" ng-controller="enable" ng-click="enable(x.id)">Enable</button>
                    <button ng-if="x.status == 0" class="btn m-b-xs btn-sm btn-success btn-warning" ng-controller="disable" ng-click="disable(x.id)">Deable</button>
                </td>
            </tr>

            </tbody>

        </table>

    </div>

</div>
    </div>