<div class="app-aside hidden-xs bg-dark" >
    <div class="aside-wrap">
        <div class="navi-wrap">
            <!-- user -->
            <div class="clearfix hidden-xs text-center hide" id="aside-user">
                <div class="dropdown wrapper">
                    <a ui-sref="app.page.profile">
                <span class="thumb-lg w-auto-folded avatar m-t-sm">
                  <img src="/admin/img/a0.jpg" class="img-full" alt="...">
                </span>
                    </a>
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
                <span class="clear">
                  <span class="block m-t-sm">
                    <strong class="font-bold text-lt">John.Smith</strong>
                    <b class="caret"></b>
                  </span>
                  <span class="text-muted text-xs block">Art Director</span>
                </span>
                    </a>
                    <!-- dropdown -->
                    <ul class="dropdown-menu animated fadeInRight w hidden-folded">
                        <li class="wrapper b-b m-b-sm bg-info m-t-n-xs">
                            <span class="arrow top hidden-folded arrow-info"></span>
                            <div>
                                <p>300mb of 500mb used</p>
                            </div>
                            <progressbar value="60" type="white" class="progress-xs m-b-none dker"></progressbar>
                        </li>
                        <li>
                            <a href>Settings</a>
                        </li>
                        <li>
                            <a ui-sref="app.page.profile">Profile</a>
                        </li>
                        <li>
                            <a href>
                                <span class="badge bg-danger pull-right">3</span>
                                Notifications
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a ui-sref="access.signin">Logout</a>
                        </li>
                    </ul>
                    <!-- / dropdown -->
                </div>
                <div class="line dk hidden-folded"></div>
            </div>
            <!-- / user -->

            <!-- nav -->
            <nav ui-nav class="navi">
                <ul class="nav">
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
                            <span class="font-bold" translate="aside.nav.DASHBOARD">System</span>
                        </a>
                        <ul class="nav nav-sub dk">
                            <li class="nav-sub-header">
                                <a href>
                                    <span translate="aside.nav.DASHBOARD">系统</span>
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
                            <span class="font-bold" translate="aside.nav.DASHBOARD">Group</span>
                        </a>
                        <ul class="nav nav-sub dk">
                            <li class="nav-sub-header">
                                <a href>
                                    <span translate="aside.nav.DASHBOARD">Group</span>
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

                    @foreach ($menu as $value)
                    <li>
                        <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                            <b class="badge bg-info pull-right">0</b>
                            <i class="glyphicon {{ $value['list']['icon'] }}"></i>
                            <span>{{ $value['list']['name'] }}</span>
                        </a>
                        <ul class="nav nav-sub dk">
                            <li class="nav-sub-header">
                                <a href>
                                    <span>{{ $value['list']['name'] }}</span>
                                </a>
                            </li>
                            @foreach($value['list']['menu'] as $item)
                            <li ui-sref-active="active">
                                <a href="user_management">
                                    <span>{{ $item['name'] }}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach



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
                        <a ui-sref="app.docs" href="{{ url('/admin/module/index') }}">
                            <i class="icon-question icon"></i>
                            <span translate="aside.nav.your_stuff.DOCUMENTS">module</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- nav -->

            <!-- aside footer -->
            <div class="wrapper m-t">
                <div class="text-center-folded">
                    <span class="pull-right pull-none-folded">60%</span>
                    <span class="hidden-folded" translate="aside.MILESTONE">Milestone</span>
                </div>
                <div class="progress progress-xxs m-t-sm dk">
                    <div class="progress-bar progress-bar-info" style="width: 60%;">
                    </div>
                </div>
                <div class="text-center-folded">
                    <span class="pull-right pull-none-folded">35%</span>
                    <span class="hidden-folded" translate="aside.RELEASE">Release</span>
                </div>
                <div class="progress progress-xxs m-t-sm dk">
                    <div class="progress-bar progress-bar-primary" style="width: 35%;">
                    </div>
                </div>
            </div>
            <!-- / aside footer -->
        </div>
    </div>
</div>