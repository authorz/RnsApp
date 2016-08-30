<style type="text/css">
    .ng-cloak { display:none; }
</style>
<div class="bg-light lter b-b wrapper-md">
    <h1 class="m-n font-thin h3"><i class="icon-magnifier i-sm m-r-sm"></i> Set Menu</h1>
</div>
<div class="wrapper-md">
    <p>
        <a class="btn m-b-xs btn-sm btn-primary btn-addon"><i class="fa fa-plus"></i>Add</a>
        <button class="btn m-b-xs btn-sm btn-info btn-addon"><i class="fa fa-trash-o"></i>Delete</button>
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
                            <input type="checkbox" name="ids[]"><i></i>
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
                <tbody>

                <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="ids[]"><i></i></label></td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td ng-if="x.status == 0">
                        正常
                    </td>
                    <td ng-if="x.status == 1">
                        禁用
                    </td>
                    <td>
                        <button class="btn m-b-xs btn-sm btn-primary btn-addon" >Add</button>
                        <button class="btn m-b-xs btn-sm btn-info btn-addon" >Update</button>
                        <button class="btn m-b-xs btn-sm btn-info btn-danger"  >Delete</button>
                        <button ng-if="x.status == 1" class="btn m-b-xs btn-sm btn-success btn-addon">Enable</button>
                        <button ng-if="x.status == 0" class="btn m-b-xs btn-sm btn-success btn-warning">Deable</button>
                    </td>
                </tr>

                </tbody>

            </table>

        </div>

    </div>
</div>