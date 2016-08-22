'use strict';
// 菜单列表
app.controller('menu', function($scope, $http) {
    $scope.formData = {};

    $http.get("/admin/system/get_system_menu").success(function(response) {

        $scope.names = response;

    });

    $scope.checkdelete = function () {
        alert(1);
    }
});

// 保存
app.controller('savemenu',function($scope, $http,$stateParams,$state){
   if($stateParams.state == 2){
       $http({
           method:'POST',
           url:"/admin/system/get_menu_content",
           data:{
               menu_id:$stateParams.menu_id
           },
           headers: {
               'X-CSRF-TOKEN': $('input[name="X-CSRF-TOKEN"]').val()
           },
       }).success(function(response) {
           response[0]['state'] = 2;
           response[0]['menu_id'] = $stateParams.menu_id;
           $scope.formData = response[0];


       });

   }else{
       $scope.formData = {'state':1,'pid':$stateParams.menu_id};
   }

    // form 提交操作
    $scope.processForm = function(){

        if($scope.formData['state'] == 1){
            $http({
                method:'POST',
                url:"/admin/system/_add_menu",

                data:$scope.formData,
                headers: {
                    'X-CSRF-TOKEN': $('input[name="X-CSRF-TOKEN"]').val()
                },
            }).success(function(response) {
                if(response['state'] == 1){
                    alert('Add Success');
                    $state.go('app.system.menu');
                }else{
                    alert('Add Error');
                }
            });
        }else{
            $http({
                method:'POST',
                url:"/admin/system/_update_menu",

                data:$scope.formData,
                headers: {
                    'X-CSRF-TOKEN': $('input[name="X-CSRF-TOKEN"]').val()
                },
            }).success(function(response) {
                if(response['state'] == 1){
                    alert('Update Success');
                    $state.go('app.system.menu');
                }else{
                    alert('Update Error');
                }
            });
        }
    }
});
// 删除菜单
app.controller('delmenu',function($scope,$http,$state){
    $scope.delmenu = function(id){
        $http({
            method:'POST',
            url:"/admin/system/_del_menu",
            data:id,
            headers: {
                'X-CSRF-TOKEN': $('input[name="X-CSRF-TOKEN"]').val()
            },
        }).success(function(response) {
            if(response['state'] == 1){
                alert('Del Success');
                $state.go('app.system.menu',null,{reload:true});
            }else{
                alert('Del Error');
            }
        });
    }

});
// 禁用
app.controller('disable',function($scope,$http,$state){
    $scope.disable = function(id){
        $http({
            method:'POST',
            url:"/admin/system/_disable_menu",
            data:id,
            headers: {
                'X-CSRF-TOKEN': $('input[name="X-CSRF-TOKEN"]').val()
            },
        }).success(function(response) {
            if(response['state'] == 1){
                alert('disable Success');
                $state.go('app.system.menu',null,{reload:true});
            }else{
                alert('disable Error');
            }
        });
    }

});
// 启用
app.controller('enable',function($scope,$http,$state){
    $scope.enable = function(id){
        $http({
            method:'POST',
            url:"/admin/system/_enable_menu",
            data:id,
            headers: {
                'X-CSRF-TOKEN': $('input[name="X-CSRF-TOKEN"]').val()
            },
        }).success(function(response) {
            if(response['state'] == 1){
                alert('enable Success');
                $state.go('app.system.menu',null,{reload:true});
            }else{
                alert('enable Error');
            }
        });
    }

});


