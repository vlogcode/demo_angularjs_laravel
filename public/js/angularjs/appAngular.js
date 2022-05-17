
var app = angular.module('ngApp', ['angularUtils.directives.dirPagination']);

app.controller('myController', function($scope, $http) { //tao 1 controller


    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/listdanhsach/"
    }).then(function(response) {
        $scope.danhsach_thongke= response.data;
    });

    $scope.showmodal = function(id) {;
        $scope.id = id;
        if (id == 0) {
            $scope.danhsach_thongkes = null;
            $scope.modalTitle = "Add ";
        } else {
            $scope.modalTitle = "Edit ";
            $http({
                method: "GET",
                url: "http://127.0.0.1:8000/api/listdanhsach/" + id
            }).then(function(response) {
                $scope.danhsach_thongkes = response.data;
            });
        }
    }
    $scope.showmodals = function(id) {;

            $scope.modalTitle = "Add ";
    }


    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://127.0.0.1:8000/api/listdanhsach/" + id
            }).then(function(response) {
                $scope.danhsach_thongke = response.data;
                location.reload();
            });
        }
    }
    $scope.saveData = function() {
        if ($scope.id == 0) { //dang them tin moi
            $http({
                method: "POST",
                url: "http://127.0.0.1:8000/api/listdanhsach",
                data: $scope.danhsach_thongke,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.danhsach_thongkes = response.data;
                location.reload();

            });
        } else { //sua tin
            $http({
                method: "PUT",
                url: "http://127.0.0.1:8000/api/listdanhsach" + $scope.id,
                data: $scope.danhsach_thongke,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.danhsach_thongke = response.data;
                location.reload();

            });
        }
    }


});


