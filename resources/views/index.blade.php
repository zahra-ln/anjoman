<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.rtl.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/fontawesome.min.css') }}">

    <title>ToDo List</title>


</head>
<body ng-app="ToDoApp">
<div class="container" ng-controller="ToDoController">
    <div class="row" id="main-row">
        <div class="col">
            <div class="card min-h-400">
                <div class="card-header text-center">
                    کارها
                </div>
                <div class="card-body">
                    <form ng-submit="submit()">
                        <div class="input-group mb-3">
                            <input type="text" ng-model="title" class="form-control" placeholder="کار جدیدی وارد کنید"
                                   aria-label="کار جدیدی وارد کنید">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" id="button-addon2">ثبت</button>
                            </div>
                        </div>
                    </form>
                    <table class="table">
                        <tbody>
                        <tr ng-repeat="task in tasks track by $index">
                            <th scope="row">@{{ $index + 1 }}</th>
                            <td>@{{ task.title }}</td>
                            <td class="table-buttons">
                                <button class="btn btn-outline-primary btn-sm" data-title="Edit" data-toggle="modal"
                                        data-target="#edit" title="ویرایش"><i class="fas fa-pencil-alt"></i>
                                </button>
                            </td>
                            <td class="table-buttons">
                                <button ng-click="done(task.id)" class="btn btn-outline-success btn-sm" data-title="Complete" data-toggle="modal"
                                        data-target="#complete" title="انجام شده"><i class="fas fa-check"></i>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col align-self-center">
            <div class="card border-primary min-h-400">
                <div class="card-header text-center">
                    کارهای انجام شده
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                        <tr ng-repeat="task in completedTasks">
                            <th scope="row">@{{ $index + 1 }}</th>
                            <td>@{{ task.title }}</td>
                            <td class="table-buttons">
                                <button ng-click="delete(task.id)" class="btn btn-outline-danger btn-sm" data-title="Delete" data-toggle="modal"
                                        data-target="#delete" title="حذف"><i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ URL::asset('js/angular.min.js') }}"></script>
<script src="{{ URL::asset('js/index.js') }}"></script>
<script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
</body>
</html>
