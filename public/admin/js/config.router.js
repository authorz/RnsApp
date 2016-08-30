'use strict';

/**
 * Config for the router
 */
angular.module('app')
  .run(
    [          '$rootScope', '$state', '$stateParams',
      function ($rootScope,   $state,   $stateParams) {
          $rootScope.$state = $state;
          $rootScope.$stateParams = $stateParams;
      }
    ]
  )
  .config(
    [          '$stateProvider', '$urlRouterProvider',
      function ($stateProvider,   $urlRouterProvider) {

          $urlRouterProvider
              .otherwise('/app/dashboard');
          $stateProvider
              .state('app.dashboard', {
                  url: '/dashboard',
                  templateUrl: '/admin/dashboard',
                  resolve: {
                      deps: ['$ocLazyLoad',
                          function( $ocLazyLoad ){
                              return $ocLazyLoad.load(['js/controllers/chart.js']);
                          }]
                  }
              })

              .state('app', {
                  abstract: true,
                  url: '/app',
                  templateUrl: '/admin/public/app'
              })

              .state('app.system', {
                  url: '/system',
                  template: '<div ui-view class="fade-in-down"></div>'
              })

              .state('app.system.config', {
                  url: '/config',
                  cache:'true',
                  templateUrl: '/admin/system/system_config',
              })

              .state('app.system.menu', {
                  url: '/menu',
                  templateUrl: '/admin/system/system_menu',
                  cache:'true',
                  resolve: {
                      deps: ['uiLoad',
                          function( uiLoad ){
                              return uiLoad.load( ['js/controllers/admin/menu.js'] );
                          }]
                  }
              })

              .state('app.system.savemenu', {
                  params:{
                    'menu_id':null, 'state':null,
                  },
                  url: '/savemenu',
                  templateUrl: '/admin/system/add_menu',
                  resolve: {
                      deps: ['uiLoad',
                          function( uiLoad ){
                              return uiLoad.load( ['js/controllers/admin/menu.js'] );
                          }]
                  }
              })

              .state('app.system.delmenu', {
                  params:{
                      'menu_id':null
                  },
                  url: '/delmenu',
                  resolve: {
                      deps: ['uiLoad',
                          function( uiLoad ){
                              return uiLoad.load( ['js/controllers/admin/menu.js'] );
                          }]
                  }
              })

              .state('app.system.set', {
                  url: '/set',
                  templateUrl: '/admin/system/system_set',

              })



              .state('app.docs', {
                  url: '/docs',
                  templateUrl: '/admin/docs',

              })

              .state('app.module', {
                  url: '/module',
                  templateUrl: '/admin/module/index',

              })

              .state('lock', {
                  url: '/lock',
                  templateUrl: '/admin/lock',

              })


              .state('app.user', {
                  url: '/user',
                  templateUrl:'/admin/group/user/index',

              })

              .state('app.user.list',{
                  url:'/list',
                  templateUrl:'/admin/group/user_index',
              })


      }
    ]
  );