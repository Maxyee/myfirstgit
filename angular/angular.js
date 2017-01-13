angular.module('example',[])
    .service('thisService',function(){
        this.helloWorld = function(){
            return "hello World"
        } 
        this.helloMars = function(){
            return "hello Mars"
        }
    })
    .controller('ExampleController', function($scope, thisService){
        $scope.world = thisService.helloWorld()
        $scope.mars = thisService.helloMars();
    })

    .controller('ExampleController2',function($scope, thisService){
        $scope.world = thisService.helloWorld()
        $scope.mars = thisService.helloMars();
    })