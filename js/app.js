var app = angular.module('myapp', []);

app.controller('formController', function ($scope, $http, $filter) {

    $scope.x = 10;
    $scope.brideList = [];
    $scope.selectedLoc = "Colombo";
    $scope.brides = {
        "peoples": [
            {
                "loc": "jaffna",
                "brides": [
                    {
                        "name": "saduni",
                        "phone": "0657567",
                        "country": "srilanka",
                        "age": "21",
                        "id": 1
                    },
                    {
                        "name": "madu",
                        "phone": "071765674",
                        "country": "srilanka",
                        "age": "25",
                        "id": 2
                    },
                    {
                        "name": "tharini",
                        "phone": "071656574",
                        "country": "srilanka",
                        "age": "26",
                        "id": 3
                    },
                    {
                        "name": "nemesha",
                        "phone": "07165764",
                        "country": "srilanka",
                        "age": "28",
                        "id": 4
                    },
                    {
                        "name": "amaya",
                        "phone": "0756546",
                        "country": "srilanka",
                        "age": "23",
                        "id": 5
                    }
                ],
                "grooms": [
                    {
                        "name": "milan",
                        "phone": "071784574",
                        "country": "srilanka",
                        "age": "21",
                        "id": 6
                    },
                    {
                        "name": "nadun",
                        "phone": "07174327",
                        "country": "srilanka",
                        "age": "24",
                        "id": 7
                    },
                    {
                        "name": "sahan",
                        "phone": "07109654",
                        "country": "srilanka",
                        "age": "23",
                        "id": 8
                    },
                    {
                        "name": "manaoj",
                        "phone": "076565674",
                        "country": "srilanka",
                        "age": "27",
                        "id": 9
                    },
                    {
                        "name": "thimira",
                        "phone": "0716565",
                        "country": "srilanka",
                        "age": "22",
                        "id": 10
                    }
                ]
            },
            {
                "loc": "Colombo",
                "brides": [
                    {
                        "name": "sujani",
                        "phone": "071784574",
                        "country": "srilanka",
                        "age": "21",
                        "id": 11
                    },
                    {
                        "name": "sashini",
                        "phone": "071237674",
                        "country": "srilanka",
                        "age": "25",
                        "id": 12
                    },
                    {
                        "name": "nethu",
                        "phone": "07434374",
                        "country": "srilanka",
                        "age": "23",
                        "id": 13
                    },
                    {
                        "name": "iresha",
                        "phone": "07187864",
                        "country": "srilanka",
                        "age": "28",
                        "id": 14
                    },
                    {
                        "name": "ayesha",
                        "phone": "0433534",
                        "country": "srilanka",
                        "age": "21",
                        "id": 15
                    }
                ],
                "grooms": [
                    {
                        "name": "kusal",
                        "phone": "071784574",
                        "country": "srilanka",
                        "age": "24",
                        "id": 16
                    },
                    {
                        "name": "praboda",
                        "phone": "071784574",
                        "country": "srilanka",
                        "age": "21",
                        "id": 17
                    },
                    {
                        "name": "heshan",
                        "phone": "07154656",
                        "country": "srilanka",
                        "age": "28",
                        "id": 18
                    },
                    {
                        "name": "sunil",
                        "phone": "6566565",
                        "country": "srilanka",
                        "age": "24",
                        "id": 19
                    },
                    {
                        "name": "nethma",
                        "phone": "7657675",
                        "country": "srilanka",
                        "age": "21",
                        "id": 20
                    }
                ]
            },
               {
                "loc": "Galle",
                "brides": [
                    {
                        "name": "nirosha",
                        "phone": "677676",
                        "country": "srilanka",
                        "age": "32",
                        "id": 21
                    },
                    {
                        "name": "malithi",
                        "phone": "6767676",
                        "country": "srilanka",
                        "age": "29",
                        "id": 22
                    },
                    {
                        "name": "nanuni",
                        "phone": "453354",
                        "country": "srilanka",
                        "age": "23",
                        "id": 23
                    },
                    {
                        "name": "sashi",
                        "phone": "87554654",
                        "country": "srilanka",
                        "age": "23",
                        "id": 24
                    },
                    {
                        "name": "nimeshi",
                        "phone": "0433534",
                        "country": "srilanka",
                        "age": "21",
                        "id": 25
                    }
                ],
                "grooms": [
                    {
                        "name": "kasun",
                        "phone": "071784574",
                        "country": "srilanka",
                        "age": "18",
                        "id": 26
                    },
                    {
                        "name": "nadun",
                        "phone": "071784574",
                        "country": "srilanka",
                        "age": "21",
                        "id": 27
                    },
                    {
                        "name": "sujan",
                        "phone": "434878",
                        "country": "srilanka",
                        "age": "27",
                        "id": 28
                    },
                    {
                        "name": "perera",
                        "phone": "4343443",
                        "country": "srilanka",
                        "age": "29",
                        "id": 29
                    },
                    {
                        "name": "rahal",
                        "phone": "7657675",
                        "country": "srilanka",
                        "age": "20",
                        "id": 30
                    }
                ]
            }
        ]
    };
    $scope.name;
    $scope.countrycode = "";
    $scope.regex = 'm';
    $scope.formsubmitted = false;
    $scope.submitted = false;
    $scope.countryList = [];
    $scope.religionList = [];
    $scope.profileForList = [];
    $scope.genders = [{id: "1", name: "Male"}, {id: "2", name: "Femail"}];
    $scope.submitForm = function ($event, $valid) {
        //alert(isValid);
        if (!$valid) {
            $event.preventDefault();
        }
    };
    $scope.updateCountry = function (country) {
        console.log(country);
        var result = $.grep($scope.countryList, function (e) {
            return e.id == country;
        });
        if (result[0] && result[0].code) {
            $scope.countrycode = ("+" + result[0].code);
        } else {
            $scope.countrycode = ("code");
        }

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
    $scope.getprofileForList = function () {
        $http({
            method: "GET",
            url: baseurl + "Db_ajax/get_profile_for_list"
        }).then(function mySucces(response) {
            $scope.profileForList = response.data;
        }, function myError(response) {
            alert(response.statusText);
        });
    };
    $scope.selectData = function () {
        if (typeof jsonData !== 'undefined') {
            $scope.name = jsonData.name;
            $scope.gender = {id: jsonData.gender + ""};
            $scope.religion_list = {id: jsonData.religion + ""};
            $scope.lan_list = {id: jsonData.lan + ""};
            $scope.email = jsonData.email;
            $scope.country_list = {id: jsonData.country + ""};
            // $scope.fnumber=jsonData.;

        }
    };
    $scope.showdetails = function (location) {
        var found = $filter('filter')($scope.brides.peoples, {"loc": location}, false);
        if (found.length) {
            $scope.brideList =(found[0]);
        } else {
            $scope.brideList = [];
        }
        console.log($scope.brideList);
    }

    $scope.loadBrides = function (event) {
        //alert(event.target.innerHTML);
        $scope.selectedLoc = event.target.innerHTML;
        $scope.showdetails($scope.selectedLoc);
    }

    $scope.getCountryList();
    $scope.getReligionList();
    $scope.getLanList();
    $scope.getprofileForList();
    $scope.selectData();
    $scope.showdetails("colombo");

});
