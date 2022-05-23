
var app = angular.module('ngApp', ['angularUtils.directives.dirPagination']);

app.controller('myController', function($scope, $http) { //tao 1 controller


    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/listdanhsach/"
    }).then(function(response) {
        $scope.users= response.data;
    });

    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.danhsach_thongkes = null;
            $scope.modalTitle = "Add";
        } else {
            $scope.modalTitle = "Edit";
            $http({
                method: "GET",
                url: "http://127.0.0.1:8000/listdanhsach/" + id
            }).then(function(response) {
                $scope.user = response.data;
            });
        }
    }



    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://127.0.0.1:8000/listdanhsach/" + id
            }).then(function(response) {
                $scope.danhsach_thongke = response.data;
                location.reload();
            });
        }
    }
    $scope.saveData = function() {
        if ($scope.id == 0) { //dang
            $http({
                method: "POST",
                url: "http://127.0.0.1:8000/listdanhsach/",
                data: $scope.user,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.user = response.data;
                console.log(response.data);
                location.reload();
            },function(response){
                alert("lỗi");
                console.log(response);
            });
        } else { //sua
            $http({
                method:"PUT",
                url: "http://127.0.0.1:8000/listdanhsach/" + $scope.id,
                data: $scope.user,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.user = response.data;
                console.log(response.data);
                location.reload();

            },function(response){
                alert("lỗi");
                console.log(response);
            });
        }
    }


});


