<div ng-controller="SupportController">
    <div class="row">
        <div class="col">
            <div class="card min-h-400">
                <div class="card-header text-center">
                   جست و جو در کمک ها
                </div>
                <form ng-submit="search()">
                    <div class="input-group mb-3" style="width: 70%">
                        <input type="text" ng-model="patient_id" class="form-control"
                               placeholder="َشماره "
                               aria-label="شماره">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit"
                                    id="button-addon2">جستجو
                            </button>
                        </div>
                    </div>
                </form>

             <div class="container">
                 <table  class="table table-striped" ng-submit="search()">
                     <thead>
                     <tr>
                         <th>نام نهاد</th>
                         <th>شماره پرونده</th>
                         <th>مبلغ</th>
                         <th>نوع کمک</th>
                         <th>تاریخ</th>
                     </tr>
                     </thead>
                     <tbody>
                     <tr ng-repeat="x in data">
                         <td> @{{x.helper}}</td>
                         <td> @{{x.patient_id}} </td>
                         <td> @{{x.amount}} </td>
                         <td> @{{x.typeofhelp}}</td>
                         <td> @{{x.date}}</td>


                     </tr>
                     </tr>
                     </tbody>
                     <tfoot>
                     <tr>
                         <th  colspan="3" ng-submit="search()">مبلغ کل : </th>
                         <td class="total-amount"> @{{ totall }} </td>
                     </tr>
                     </tfoot>
                 </table>
             </div>

        </div>
</div>
    </div></div>