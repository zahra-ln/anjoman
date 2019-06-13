<div ng-controller="IndexRecordController">
    <div class="row">
        <div class="col">
            <div class="card min-h-400">
                <div class="card-header text-center">
                    لیست بیمار ها
                </div>
                <div class="card-body">
                    <form class="form-inline md-form mr-auto mb-4">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn aqua-gradient btn-rounded btn-sm my-0" type="submit">Search</button>
                    </form>

                    <div class="container">
                        <table  class="table table-striped" >

                            <thead>
                            <tr>
                                <th>نام و نام خانوادگی</th>
                                <th>شماره پرونده</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>ali</td>
                                <td>123</td>
                                <td class="table-buttons">
                                    <button class="btn btn-outline-primary btn-sm" data-title="Edit"
                                            data-toggle="modal"
                                            data-target="#edit" title="ویرایش"><i
                                                class="fas fa-pencil-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>mmd</td>
                                <td>1234</td>
                                <td class="table-buttons">
                                    <button class="btn btn-outline-primary btn-sm" data-title="Edit"
                                            data-toggle="modal"
                                            data-target="#edit" title="ویرایش"><i
                                                class="fas fa-pencil-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr ng-repeat="patient in patients">
                                <td scope="row"> @{{patient.name}}</td>
                                <td> @{{patient.id}}</td>
                                <td class="table-buttons">
                                    <button class="btn btn-outline-primary btn-sm" data-title="Edit"
                                            data-toggle="modal"
                                            data-target="#edit" title="ویرایش"><i
                                                class="fas fa-pencil-alt"></i>
                                    </button>
                                    <button class="btn btn-outline-primary btn-sm" data-title="Edit"
                                            data-toggle="modal"
                                            data-target="#delete" title="حذف"><i
                                                class="fa fa-trash"></i>
                                    </button>
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
