'use strict';


angular.module('app', [
    'ngAnimate',
    'ngCookies',
    'ngResource',
    'ngSanitize',
    'ngTouch',
    'ngStorage',
    'ui.router',
    'ui.bootstrap',
    'ui.load',
    'ui.jq',
    'ui.validate',
    'oc.lazyLoad',
    'pascalprecht.translate'
]);

function formController($scope, $http) {



    // create a blank object to hold our form information

    // $scope will allow this to pass between controller and view

    $scope.formData = {};



    // process the form

    $scope.processForm = function() {



    };



}
