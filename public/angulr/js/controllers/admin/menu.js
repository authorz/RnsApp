'use strict';

app.controller('menu', function($scope, $http) {
    $http.get("/admin/system/get_system_menu").success(function(response) {

        $scope.names = response;

    });
});