<!-- list -->
<ul class="nav" >
    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
        <span translate="aside.nav.HEADER">Navigation</span>
    </li>
    <li>
        <a href class="auto">
      <span class="pull-right text-muted">
        <i class="fa fa-fw fa-angle-right text"></i>
        <i class="fa fa-fw fa-angle-down text-active"></i>
      </span>
            <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
            <span class="font-bold">System</span>
        </a>
        <ul class="nav nav-sub dk">
            <li class="nav-sub-header">
                <a href>
                    <span>System</span>
                </a>
            </li>
            <li ui-sref-active="active">
                <a ui-sref="app.dashboard-v1">
                    <span>系统设置</span>
                </a>
            </li>
            <li ui-sref-active="active">
                <a ui-sref="app.dashboard-v1">
                    <span>菜单设置</span>
                </a>
            </li>
            <li ui-sref-active="active">
                <a ui-sref="app.dashboard-v1">
                    <span>配置管理</span>
                </a>
            </li>
            <li ui-sref-active="active">
                <a ui-sref="app.dashboard-v2">
                    <b class="label bg-info pull-right">1</b>
                    <span>系统更新</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href class="auto">
                          <span class="pull-right text-muted">
                            <i class="fa fa-fw fa-angle-right text"></i>
                            <i class="fa fa-fw fa-angle-down text-active"></i>
                          </span>
            <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
            <span class="font-bold" >Group</span>
        </a>
        <ul class="nav nav-sub dk">
            <li class="nav-sub-header">
                <a href>
                    <span >Group</span>
                </a>
            </li>
            <li ui-sref-active="active">
                <a ui-sref="app.dashboard-v1">
                    <span>管理员管理</span>
                </a>
            </li>
            <li ui-sref-active="active">
                <a ui-sref="app.dashboard-v1">
                    <span>组管理</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
            <i class="glyphicon glyphicon-th-large icon text-success"></i>
            <span class="font-bold">Apps</span>
        </a>
        <ul class="nav nav-sub dk">
            <li class="nav-sub-header">
                <a href>
                    <span>Apps</span>
                </a>
            </li>
            <li ui-sref-active="active">
                <a ui-sref="apps.note">
                    <span>接口管理</span>
                </a>
            </li>
            <li ui-sref-active="active">
                <a ui-sref="apps.contact">
                    <span>接口日志</span>
                </a>
            </li>
            <li ui-sref-active="active">
                <a ui-sref="app.weather">
                    <span>数据统计</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="line dk"></li>

    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
        <span translate="aside.nav.components.COMPONENTS">Modules</span>
    </li>
    <div ng-controller="nav">
        <li ng-repeat="x in names">
            <a href class="auto">
              <span class="pull-right text-muted">
                  <i class="fa fa-fw fa-angle-right text"></i>
                  <i class="fa fa-fw fa-angle-down text-active"></i>
              </span>
                <b class="badge bg-info pull-right">0</b>
                <i class="glyphicon @{{ x.list.icon }}"></i>
                <span>@{{ x.list.name }}</span>
            </a>
            <ul class="nav nav-sub dk">
                <li class="nav-sub-header">
                    <a href>
                        <span>@{{ x.list.name }}</span>
                    </a>
                </li>
                <li ui-sref-active="active" ng-repeat="y in x.list.menu">
                    <a ui-sref="layout.app">
                        <span>@{{ y.name }}</span>
                    </a>
                </li>
            </ul>
        </li>
    </div>

    <li class="line dk hidden-folded"></li>

    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
        <span translate="aside.nav.your_stuff.YOUR_STUFF">Your Stuff</span>
    </li>
    <li>
        <a ui-sref="app.page.profile">
            <i class="icon-user icon text-success-lter"></i>
            <b class="badge bg-success pull-right">30%</b>
            <span translate="aside.nav.your_stuff.PROFILE">Profile</span>
        </a>
    </li>
    <li>
        <a ui-sref="app.docs">
            <i class="icon-question icon"></i>
            <span>Module</span>
        </a>
    </li>
    <li>
        <a ui-sref="app.docs">
            <i class="icon-question icon"></i>
            <span >Documents</span>
        </a>
    </li>
</ul>
<!-- / list -->
<script>
    app.controller('nav', function($scope, $http) {
        $http.get("/admin/public/menu").success(function(response) {

            $scope.names = response;

        });
    });
</script>