var app = angular.module('ToDoApp', []);

app.controller('MainController', function ($scope) {
    $scope.tabs = {
        'taskTab': false,
        'categoryTab': false
    };
    $scope.changeTab = function (tab) {
        angular.forEach($scope.tabs ,function (key, value) {
                $scope.tabs[key] = false;
        });
        angular.forEach($scope.tabs ,function (key, value) {
           if (value === tab) {
               $scope.tabs[tab] = true;
           }
        });
    }
});
app.controller('ToDoController', function ($scope, $http) {
    $scope.title = '';
    $scope.tasks = [];
    $scope.completedTasks = [];

    $scope.getTasks = function () {
        $http.get("http://localhost:8000/api/tasks")
            .then(
                function successCallback(response) {
                    $scope.tasks = response.data;
                },
                function errorCallback(response) {
                    console.log("مشکلی در ارتباط با سرور پیش آمده است");
                }
            );
    };
    $scope.getTasks();

    $scope.getCompletedTasks = function () {
        $http.get("http://localhost:8000/api/completed-tasks")
            .then(
                function successCallback(response) {
                    $scope.completedTasks = response.data;
                },
                function errorCallback(response) {
                    console.log("مشکلی در ارتباط با سرور پیش آمده است");
                }
            );
    };
    $scope.getCompletedTasks();

    $scope.submit = function () {
        $http.post("http://localhost:8000/api/tasks", {
            title: $scope.title
        })
            .then(
                function successCallback(response) {
                    $scope.tasks.push(response.data);
                    $scope.title = '';
                },
                function errorCallback(response) {
                    console.log("مشکلی در ارتباط با سرور پیش آمده است");
                }
            );
    };

    $scope.done = function (id) {
        $http.post("http://localhost:8000/api/done-task", {
            id: id
        })
            .then(
                function successCallback(response) {
                    $scope.getTasks();
                    $scope.getCompletedTasks();
                },
                function errorCallback(response) {
                    console.log("مشکلی در ارتباط با سرور پیش آمده است");
                }
            );
    };

    $scope.delete = function (id) {
        $http.delete("http://localhost:8000/api/tasks/" + id)
            .then(
                function successCallback(response) {
                    $scope.getTasks();
                    $scope.getCompletedTasks();
                },
                function errorCallback(response) {
                    console.log("مشکلی در ارتباط با سرور پیش آمده است");
                }
            );
    };
});
app.controller('CategoryController', function ($scope, $http) {

});