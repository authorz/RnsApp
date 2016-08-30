<!-- list -->
<ul class="nav" >
    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
        <span translate="aside.nav.HEADER">Navigation</span>
    </li>
    <span ng-controller="menu">
    <li ng-repeat="y in menu">
        <a href class="auto">
      <span class="pull-right text-muted">
        <i class="fa fa-fw fa-angle-right text"></i>
        <i class="fa fa-fw fa-angle-down text-active"></i>
      </span>
            <i class="glyphicon @{{ y.icon }}"></i>
            <span class="font-bold">@{{ y.title }}</span>
        </a>
        <ul class="nav nav-sub dk" ng-controller="menu">
            <li class="nav-sub-header">
                <a href>
                    <span>@{{ y.title }}</span>
                </a>
            </li>
            <li ui-sref-active="active" ng-repeat="x in y._child">
                <a ui-sref="@{{ x.url }}">
                    <span>@{{ x.title }}</span>
                </a>
            </li>

        </ul>
    </li>
    </span>
    <li class="line dk"></li>

    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
        <span translate="aside.nav.components.COMPONENTS">Modules</span>
    </li>
    <span ng-controller="nav" >
        <li ng-repeat="x in names">
            <a href class="auto">
              <span class="pull-right text-muted">
                  <i class="fa fa-fw fa-angle-right text"></i>
                  <i class="fa fa-fw fa-angle-down text-active"></i>
              </span>

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
                    <a ui-sref="@{{ y.url }}">
                        <span>@{{ y.name }}</span>
                    </a>
                </li>
            </ul>
        </li>
    </span>

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
        <a ui-sref="app.module">
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

    app.controller('menu', function($scope, $http) {
        $http.get("/admin/system/get_left_menu").success(function(response) {

            $scope.menu = response;

        });
    });
</script>