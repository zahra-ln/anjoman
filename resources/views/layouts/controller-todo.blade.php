<div ng-controller="ToDoController">
    <div class="row">
        <div class="col">
            <div class="card min-h-400">
                <div class="card-header text-center">
                    کارها
                </div>
                <div class="card-body">
                    <form ng-submit="submit()">
                        <div class="input-group mb-3">
                            <input type="text" ng-model="title" class="form-control"
                                   placeholder="کار جدیدی وارد کنید"
                                   aria-label="کار جدیدی وارد کنید">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit"
                                        id="button-addon2">ثبت
                                </button>
                            </div>
                        </div>
                    </form>
                    <table class="table">
                        <tbody>
                        <tr ng-repeat="task in tasks track by $index">
                            <th scope="row">@{{ $index + 1 }}</th>
                            <td>@{{ task.title }}</td>
                            <td class="table-buttons">
                                <button class="btn btn-outline-primary btn-sm" data-title="Edit"
                                        data-toggle="modal"
                                        data-target="#edit" title="ویرایش"><i
                                            class="fas fa-pencil-alt"></i>
                                </button>
                            </td>
                            <td class="table-buttons">
                                <button ng-click="done(task.id)"
                                        class="btn btn-outline-success btn-sm"
                                        data-title="Complete" data-toggle="modal"
                                        data-target="#complete" title="انجام شده"><i
                                            class="fas fa-check"></i>
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
                                <button confirmed-click="delete(task.id)" ng-confirm-click="از حذف این مورد مطمئن هستید ؟"
                                        class="btn btn-outline-danger btn-sm"
                                        data-title="Delete" data-toggle="modal"
                                        data-target="#delete" title="حذف"><i
                                            class="fas fa-trash"></i>
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