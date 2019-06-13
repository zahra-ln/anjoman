<div ng-controller="SupportController">
    <div class="row">
        <div class="col">
            <div class="card min-h-400">
                <div class="card-header text-center">
                    ثبت کمک ها

                </div>
                <form ng-submit="submit()" method="post">
                    {{csrf_field()}}
                    <div>
                        <span  style="width: 105px;display: inline-block;">نهاد حمایتی : </span>
                        <input type="text" ng-model="helper"
                               placeholder=" نام نهاد را وارد کنید:"
                        >
                    </div>
                    <br>

                    <div>
                        <span  style="width: 105px;display: inline-block;">نوع کمک : </span>
                    <input type="text" ng-model="typeofhelp"
                           placeholder=" نوع کمک را وارد کنید:"
                    >
                    </div>
                    <br>

                    <div>

                        <span style="width: 105px;display: inline-block;">مبلغ کمکی : </span>
                    <input type="number" ng-model="amount"
                           placeholder="مبلغ را وارد کنید:"
                    >
                    </div>
                        <br>

                    <div>
                    <span style="width: 105px;display: inline-block;">تاریخ : </span>
                    <input type="number" ng-model="date"
                           placeholder="تاریخ را وارد کنید:"
                    >

                    </div>
                    <br>

                    <div>
                        <span style="width: 105px;display: inline-block;">کد بیمار : </span>
                    <input type="number" ng-model="patient_id"
                           placeholder=" کد بیمار را وارد کنید:"
                    >
                    </div>
                    <br>
                    <div class="input-group-append">
                        <button style="display: block;margin: 0 auto;width: 188px;background: darkgreen;" class="btn btn-primary" type="submit"
                                id="button-addon2">ثبت
                        </button>
                    </div>


                </form>


            </div>
        </div>
    </div>
</div>