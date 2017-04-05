var app = angular.module('myapp', []);

app.controller('formController', function ($scope, $http) {

    $scope.x = 10;
    
    $scope.name;
    $scope.countrycode = "";
    $scope.regex = 'm';
    $scope.formsubmitted = false;
    $scope.submitted = false;
    $scope.countryList = {};
    $scope.religionList = {};
    $scope.genders = [{id: "1", name: "male"}, {id: "2", name: "femail"}];
    $scope.selectedGender={id:"2"};
    $scope.submitForm = function ($event, $valid) {
        //alert(isValid);
        if (!$valid) {
            $event.preventDefault();
        }
    };
    $scope.updateCountry = function (country) {
        console.log(country);
        var country = $('#livein :selected');
        var countryName = country.text();
        var countryId = country.val();
        $scope.countrycode = ("+" + $scope.countryList[countryId - 1].code);
        var result = $.grep($scope.countryList, function(e){ return e.id == country; });
        alert(result[0].code);
    };

    $scope.getCountryList = function () {
        $http({
            method: "GET",
            url: baseurl + "Db_ajax/get_country_list"
        }).then(function mySucces(response) {
            $scope.countryList = response.data;
        }, function myError(response) {
            alert(response.statusText);
        });
    };
    $scope.getReligionList = function () {
        $http({
            method: "GET",
            url: baseurl + "Db_ajax/get_religion_list"
        }).then(function mySucces(response) {
            $scope.religionList = response.data;
        }, function myError(response) {
            alert(response.statusText);
        });
    };
    $scope.getLanList = function () {
        $http({
            method: "GET",
            url: baseurl + "Db_ajax/get_lan_list"
        }).then(function mySucces(response) {
            $scope.lanList = response.data;
        }, function myError(response) {
            alert(response.statusText);
        });
    };
    $scope.selectData = function () {
        if(jsonData){
            $scope.name=jsonData.name;
            $scope.gender={id:jsonData.gender};
            $scope.religion_list={id:jsonData.religion};
            $scope.lan_list={id:jsonData.lan};
            $scope.email=jsonData.email;
            $scope.password=jsonData.password;
            $scope.country_list={id:jsonData.country};
           // $scope.fnumber=jsonData.;
            
        }
    };

    $scope.getCountryList();
    $scope.getReligionList();
    $scope.getLanList();
    $scope.selectData();

});
