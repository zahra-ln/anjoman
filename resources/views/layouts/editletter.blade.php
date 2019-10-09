<div ng-controller="LettersController">
    <div class="row">
        <div class="col">
            <div class="card min-h-400 ">
                <div class="card-header text-center"  style="background-color: #ededed !important;">
                    ویرایش نامه </div>
                <form ng-submit="editletter()" >
                    <div  class="d-flex mt-4 mr-4">
                        <span  style="width:90px; display: inline-block;">کد بیمار: </span>
                        <input class="form-control" type="text" ng-model="patient_id"
                               placeholder=" "  style="width: 300px;" required>
                    </div>
                    <div  class="d-flex mt-4 mr-4">
                        <span  style="width:90px; display: inline-block;">پیوست: </span>
                        <input class="form-control" type="text" ng-model="attach"
                               placeholder=" "  style="width: 300px;" required>
                    </div>
                    <div class="d-flex  mr-4">
                        <span  style="width: 90px;display: inline-block;">شماره: </span>
                        <input  class="form-control" type="text" ng-model="shomare"
                                placeholder=" "  style="width: 300px;" required>
                    </div>
                    <div class="d-flex mr-4">
                        <span style="width: 90px;display: inline-block;">تاریخ : </span>
                        <input class="form-control" type="text" ng-model="date"
                               placeholder=" "  style="width: 300px;" required>
                    </div>
                    <br>
                    <textarea  class="description ckeditor" id="edit" ng-model="textarea" rows="10" cols="80" name="text" >
                        متن را وارد کنید...</textarea>


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
</div>