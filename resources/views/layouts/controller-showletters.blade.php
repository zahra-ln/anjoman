<div ng-controller="LettersController">
                <div class="row" style="font-size: 15px">
                    <div class="col">
                        <div class="card min-h-400">
                            <div class="card-header text-center">          نمایش نامه ها</div>
                            <div class="card-body">
                                <div class="container">
                                    <table  class="table table-striped" >
                                        <thead >
                                        <tr>
                                            <th scope="row" style="width: 30px">شماره</th>
                                            <th scope="row"style="width: 90px">کد بیمار</th>
                                            <th style="width: 100px">پیوست</th>
                                            <th scope="row" style="width: 150px">شماره</th>
                                            <th style="width: 150px">تاریخ</th>
                                            <th style="width: 150px">پرینت</th>

                                            <th class="table-buttons">ویرایش</th>
                                            <th class="table-buttons">حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr ng-repeat="letter in letters track by $index">
                                            <th>@{{ $index + 1 }}</th>
                                            <th scope="row">@{{letter.patient_id}}</th>
                                            <td>@{{letter.attach}}</td>
                                            <td>
                                                @{{letter.shomare}}
                                            </td>
                                            <td>@{{letter.date}}</td>

                                            <td>
                                                <a class="nav-link" ng-click="changeTab('showaletterTab', letter.id)" href="#">
                                                    <button class="btn btn-outline-primary btn-sm"
                                                            data-title="print" data-toggle="modal"
                                                            title="پرینت">
                                                        <i class="fa fa-print"></i>
                                                    </button>
                                                </a></td>

                                            <td>
                                                <a class="nav-link" ng-click="changeTab('editletterTab', letter.id)" href="#">
                                                    <button class="btn btn-outline-primary btn-sm"
                                                            data-title="edit" data-toggle="modal"
                                                            title="ویرایش">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </button>
                                                </a></td>
                                            <td>
                                                <button confirmed-click="delete(letter.id)" ng-confirm-click="از حذف این مورد مطمئن هستید ؟"
                                                        class="btn btn-outline-danger btn-sm"
                                                        data-title="Delete" data-toggle="modal"
                                                        data-target="#delete" title="حذف"><i
                                                            class="fas fa-trash"></i>
                                                </button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
