var app = angular.module('ngApp', []);

app.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});


 // Khai báo controller `thongKeSanPhamController`


 app.controller('myController', function($scope, $http) {
   // Dữ liệu
   $scope.title = "tung";
   $scope.danhsach_top3_sanpham_moinhat = [];


   $http({
       url: "{{ route('api.thongke.top3_sanpham_moinhat') }}",
       method: "GET"
   }).then(function successCallback(response) {

     $scope.danhsach_top3_sanpham_moinhat = response.data.result;
     console.log(response.data.result);
     console.log($scope.danhsach_top3_sanpham_moinhat);

   },
   );

 });
