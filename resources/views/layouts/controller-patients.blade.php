<div ng-controller="RecordController">
    <div class="row" style="font-size: 15px">
        <div class="col">
            <div class="card min-h-400">
                <div class="card-header text-center">
                    لیست بیمار ها
                </div>
               <div class="card-body">
    <div class="container">
        <table  class="table table-striped" >
            <thead>
            <tr>
                <th>نام و نام خانوادگی</th>
                <th>شماره پرونده</th>
                <th>پرونده ارسالی</th>
                <th>حذف</th>
                <th>ویرایش</th>
            </tr>
            </thead>
            <tbody ng-submit="getData">
            <tr ng-repeat="patient in patients">

                <td>
                    <a class="nav-link" ng-click="changeTab('show2Tab', patient.id)" href="#">
                        <p scope="row"> @{{patient.name}}</p>
                    </a></td>

                <td> @{{patient.id}}</td>
                <td>
                    <a class="nav-link" ng-click="changeTab('printmshdTab', patient.id)" href="#">
                        <button class="btn btn-outline-primary btn-sm"
                                data-title="print" data-toggle="modal"
                                title="پرینت">
                            <i class="fa fa-print"></i>
                        </button>
                    </a>
                </td>
                <td class="table-buttons" >
                    <button confirmed-click="delete(patient.id)" ng-confirm-click="از حذف این مورد مطمئن هستید ؟"
                            class="btn btn-outline-danger btn-sm"
                            data-title="Delete" data-toggle="modal"
                            data-target="#delete" title="حذف">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
                <td>
                    <a class="nav-link" ng-click="changeTab('editTab', patient.id)" href="#">
                        <button class="btn btn-outline-primary btn-sm"
                                data-title="edit" data-toggle="modal"
                                title="ویرایش">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                    </a>
                </td>
            </tr>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>
</div>
