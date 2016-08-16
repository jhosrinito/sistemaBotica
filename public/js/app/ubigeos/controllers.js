(function(){
    angular.module('ubigeos.controllers',[])
        .controller('UbigeoController',['$scope', '$routeParams','$location','crudService' ,'$filter','$route','$log',
            function($scope, $routeParams,$location,crudService,$filter,$route,$log){
                $scope.ubigeos = [];
                $scope.ubigeo = {};
                $scope.errors = null;
                $scope.success;
                $scope.query = '';

                $scope.toggle = function () {
                    $scope.show = !$scope.show; 
                };

                $scope.pageChanged = function() {
                    if ($scope.query.length > 0) {
                        crudService.search('ubigeos',$scope.query,$scope.currentPage).then(function (data){
                        $scope.ubigeos = data.data;
                    });
                    }else{
                        crudService.paginate('ubigeos',$scope.currentPage).then(function (data) {
                            $scope.ubigeos = data.data;
                        });
                    }
                };


                var id = $routeParams.id;

                if(id)
                {
                    crudService.byId(id,'ubigeos').then(function (data) {
                        $scope.ubigeo = data;
                    });
                }else{
                    crudService.paginate('ubigeos',1).then(function (data) {
                        $scope.ubigeos = data.data;
                        $scope.maxSize = 5;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                        $scope.itemsperPage = 15;

                    });
                }

                

                $scope.searchUbigeo = function(){
                if ($scope.query.length > 0) {
                    crudService.search('ubigeos',$scope.query,1).then(function (data){
                        $scope.ubigeos = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }else{
                    crudService.paginate('ubigeos',1).then(function (data) {
                        $scope.ubigeos = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }
                    
                };

                $scope.createUbigeo = function(){
                    //$scope.atribut.estado = 1;
                    if ($scope.ubigeoCreateForm.$valid) {
                        crudService.create($scope.ubigeo, 'ubigeos').then(function (data) {
                          
                            if (data['estado'] == true) {
                                $scope.success = data['nombres'];
                                alert('grabado correctamente');
                                $location.path('/ubigeos');

                            } else {
                                $scope.errors = data;

                            }
                        });
                    }
                }


                $scope.editUbigeo = function(row){
                    $location.path('/ubigeos/edit/'+row.id);
                };

                $scope.updateUbigeo = function(){

                    if ($scope.ubigeoCreateForm.$valid) {
                        crudService.update($scope.ubigeo,'ubigeos').then(function(data)
                        {
                            if(data['estado'] == true){
                                $scope.success = data['nombres'];
                                alert('editado correctamente');
                                $location.path('/ubigeos');
                            }else{
                                $scope.errors =data;
                            }
                        });
                    }
                };
                 $scope.validanomUbigeo=function(texto){
                   if(texto!=undefined){
                        crudService.validar('ubigeos',texto).then(function (data){
                            if(data.codigo!=undefined){
                                alert("Codigo Ubigeo Registrado!!");
                                $scope.ubigeo.codigo='';
                            }
                        });
                    }
               }
                $scope.deleteUbigeo= function(row){
                    
                    $scope.ubigeo = row;
                }

                $scope.cancelUbigeo = function(){
                    $scope.ubigeo = {};
                }

                $scope.destroyUbigeo = function(){
                    crudService.destroy($scope.ubigeo,'ubigeos').then(function(data)
                    {
                        if(data['estado'] == true){
                            $scope.success = data['nombre'];
                            $scope.ubigeo = {};
                            //alert('hola');
                            $route.reload();

                        }else{
                            $scope.errors = data;
                        }
                    });
                }
            }]);
})();
