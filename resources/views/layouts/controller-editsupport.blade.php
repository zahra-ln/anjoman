<div ng-controller="SupportController">
    <div class="row">
        <div class="col">
            <div class="card min-h-400 ">
                <div class="card-header text-center"  style="background-color: #ededed !important;">
                    ویرایش کمک
                </div>
                <form ng-submit="edit()" >
                    {{csrf_field()}}
                    <div  class="d-flex mt-4 mr-4">
                        <span  style="width:90px; display: inline-block;">نهاد حمایتی : </span>
                        <input class="form-control" type="text" ng-model="helper"
                               placeholder=" نام نهاد را وارد کنید"  style="width: 300px;" required>
                    </div>
                    <br>
                    <div class="d-flex  mr-4">
                        <span  style="width: 90px;display: inline-block;">نوع کمک : </span>
                        <input  class="form-control" type="text" ng-model="typeofhelp"
                                placeholder=" نوع کمک را وارد کنید"  style="width: 300px;" required>
                    </div>
                    <br>
                    <div class="d-flex mr-4">
                        <span style="width: 90px;display: inline-block;">مبلغ کمکی : </span>
                        <input class="form-control" type="number" ng-model="amount"
                               placeholder="مبلغ را وارد کنید"  style="width: 300px;">
                    </div>
                    <br>
                    <div class="d-flex mr-4">
                        <span style="width: 90px;display: inline-block;">تاریخ : </span>
                        <input class="form-control" type="text" ng-model="date"
                               placeholder="تاریخ را وارد کنید"  style="width: 300px;" required>
                    </div>
                    <br>
                    <div  class="d-flex mt-4 mr-4">
                        <span  style="width:90px; display: inline-block;">کد بیمار: </span>
                        <input class="form-control" type="text" ng-model="patient_id"
                               placeholder=" "  style="width: 300px;" required>
                        <select ng-model="patient_id">
                            <option ng-repeat="patient in patients" value="@{{ patient.id }}">@{{ patient.name }}
                            </option>
                        </select>
                    </div>
                    <br>
                    <div class="input-group-append">
                        <button style="display: block;margin: 0 auto;width: 120px;background: darkgreen;"class="btn btn-primary mb-2" type="submit"
                                id="button-addon2">ویرایش
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>