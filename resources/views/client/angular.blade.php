<script src="{{ asset('js/angularjs/angular.min.js') }}"></script>
{{-- <script src="{{ asset('js/angularjs/appAngular.js') }}"></script> --}}
<script>
    var app = angular.module('ngApp', []);

    app.config(function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });



     app.controller('myController', function($scope, $http) {

       $scope.title = "tung";
       $scope.danhsach_thongke = [];


       $http({
           url: "{{ route('apithongke') }}",
           method: "GET"
       }).then(function successCallback(response) {

         $scope.danhsach_thongke = response.data.result;
         console.log(response.data.result);
         console.log($scope.danhsach_thongke);

       },
       );

     });

      </script>
