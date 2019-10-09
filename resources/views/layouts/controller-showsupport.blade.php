<div ng-controller="SupportController">
    <div class="row" style="font-size: 15px">
        <div class="col">
            <div class="card min-h-400">
                <div class="card-header text-center">
                    نمایش کمک ها
                </div>
                <div class="card-body">
                    <div class="container">
                        <table  class="table table-striped" >
                            <thead>
                            <tr>
                                <th style="width: 20px">شماره</th>
                                <th>نهاد حمایتی</th>
                                <th>نوع حمایت</th>
                                <th>مبلغ</th>
                                <th>تاریخ</th>
                                <th>شماره پرونده بیمار</th>
                                <th class="table-buttons">
                                    حذف
                                </th>
                                <th class="table-buttons">
                                    ویرایش
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="support in supports track by $index">
                                <th>@{{ $index + 1 }}</th>
                                <th scope="row">@{{support.helper}}</td>
                                <td>@{{support.typeofhelp}}</td>
                                <td>@{{support.amount}}</td>
                                <td>@{{support.date}}</td>
                                <td>@{{support.patient_id}}</td>
                                <td class="table-buttons">
                                    <button confirmed-click="delete(support.id)" ng-confirm-click="از حذف این مورد مطمئن هستید ؟"
                                            class="btn btn-outline-danger btn-sm"
                                            data-title="Delete" data-toggle="modal"
                                            data-target="#delete" title="حذف"><i
                                                class="fas fa-trash"></i>
                                    </button>
                                </td>
                                <td>
                                    <a class="nav-link" ng-click="changeTab('editsupportTab', support.id)" href="#">
                                        <button class="btn btn-outline-primary btn-sm"
                                                data-title="edit" data-toggle="modal"
                                                title="ویرایش">
                                            <i class="fas fa-pencil-alt"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th  colspan="3" ng-submit="getTotal">مبلغ کل : </th>
                                <td class="total-amount"> @{{ total }} </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


