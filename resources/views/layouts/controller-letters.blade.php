<div ng-controller="LettersController">
    <div class="row">
        <div class="col">

            <div class="card min-h-400 ">
                <div class="card-header text-center"  style="background-color: #ededed !important;">
                     نامه ها

                </div>
                    <form ng-submit="submit()" >
                        <div  class="d-flex mt-4 mr-4">
                            <span  style="width:90px; display: inline-block;">کد بیمار: </span>
                            <input class="form-control" type="text" ng-model="patient_id"
                                   placeholder=" کد بیمار را وارد کنید"  style="width: 300px;" >
                            <select ng-model="patient_id">
                                <option ng-repeat="patient in patients" value="@{{ patient.id }}">@{{ patient.name }}
                                </option>
                            </select>
                        </div>

                        <div  class="d-flex mt-4 mr-4">

                            <span  style="width:90px; display: inline-block;">پیوست: </span>
                            <input class="form-control" type="text" ng-model="attach"
                                   placeholder="پیوست نامه را وارد کنید "  style="width: 300px;" required>
                        </div>
                        <div class="d-flex  mr-4">
                            <span  style="width: 90px;display: inline-block;">شماره: </span>
                            <input  class="form-control" type="text" ng-model="shomare"
                                    placeholder=" شماره نامه را وارد کنید"  style="width: 300px;" required>
                        </div>
                        <div class="d-flex mr-4">
                            <span style="width: 90px;display: inline-block;">تاریخ : </span>
                            <input class="form-control" type="text" ng-model="date"
                                   placeholder="تاریخ نامه را وارد کنید "  style="width: 300px;" required>
                        </div>
                        <br>


                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <textarea   ng-model="textarea" rows="13" cols="110" name="text" >
                        </textarea>


                    <div class="input-group-append">
                        <button style="display: block;margin: 0 auto;width: 120px;background: darkgreen;"class="btn btn-primary mb-2" type="submit"
                                id="button-addon2">ثبت
                        </button>
                    </div>


                </form>
            </div>


        </div>
    </div>
</div>
</div>