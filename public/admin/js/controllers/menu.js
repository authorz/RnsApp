'use strict';
app.controller('nav',['$scope', '$http', function($scope, $http) {
    $http.get("/admin/public/menu").success(function(response) {

        $scope.names = response;

    });
}]);