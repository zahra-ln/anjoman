<style>
    #d1{display:inline;}
</style>
<div ng-controller="RecordController">
    <div class="row">
        <div class="col">
            <div class="card min-h-400">
                <div class="card-header ">
                    <div style="float: right; width:40%;height: 10%" ><img src="images/a.jpg" width=" 80" height="70"></div>
<br>
                    انجمن خیریه حمایت از بیماران کلیوی
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     شهرستان قاینات

                </div>
                <div id="d1" class="card-body" ng-submit="show2Data()">
                <div   style="float: right" >


                </div>

                    <div   style="float: right;width: 300px" >
                        <div>نام بیمار  : @{{name}} </div><br>
                        <div>نام پدر : @{{fathers_name}}</div><br>
                        <div>تاریخ تولد : @{{ date_birth }}</div><br>
                        <div>جنسیت: @{{Gender  }}</div><br>
                        <div>وضعیت تاهل : @{{marital_status  }}</div><br>
                        <div>شغل پدر : @{{ fathers_job }}</div><br>
                        <div>آدرس منزل : @{{home_adres}}</div><br>
                        <div>تلفن محل کار : @{{work_phone}}</div><br>
                        <div>علت بیماری : @{{ Cause_illness }}</div><br>
                        <div>هپاتیت : @{{ hepatitis }}</div><br>
                        <div>نام پزشک : @{{doctor}}</div><br>
                        <div>شروع دیالیز : @{{ Start_dialysis }}</div><br>
                        <div>نوع بیمه : @{{insurance_type}}</div><br>
                        <div> فعالیت جسمانی : @{{  Physical_activity}}</div><br>
                        <div> &nbsp; دارو های دیالیز : @{{drug}}</div><br>
                        <div>فوت : @{{Date_death}}</div><br>
                    </div>
                    <div   style="float: right;width: 300px" >
                        <div>شماره پرونده: @{{id}}</div><br>
                        <div>شماره شناسنامه : @{{id_shenasname}}</div><br>
                        <div>محل تولد : @{{ place_birth }}</div><br>
                        <div>تحصیلات : @{{  education}}</div><br>
                        <div>تحت تکلف : @{{  taht_tkfol}}</div><br>
                        <div>تحصیلات همسر : @{{Wifes_education  }}</div><br>
                        <div>آدرس محل کار : @{{work_adres}}</div><br>
                        <div>تلفن همراه : @{{cellphone}}</div><br>
                        <div>شروع بیماری : @{{  Onset_disease}}</div><br>
                        <div>Hiv : @{{ Hiv }}</div><br>
                        <div>تاریخ پیوند : @{{date_transplant}}</div><br>
                        <div>بیمارستان دیالیز : @{{dialysis_hospital  }}</div><br>
                        <div>شماره بیمه : @{{insurance_number  }}</div><br>
                        <div>  رژیم غذایی: @{{ diet }}</div><br>
                        <div>بیماری دیگر : @{{Another_disease  }}</div><br>
                    </div>
                    <div style="float: right">
                        <div>تاریخ ثبت: @{{date_sabt  }}</div><br>
                        <div>کد ملی : @{{national_code}}</div><br>
                        <div>ملیت : @{{Nationality  }}</div><br>
                        <div>وضعیت مسکن : @{{ house }}</div><br>
                        <div>شغل : @{{job  }}</div><br>
                        <div>شغل همسر : @{{ Wifes_job }}</div><br>
                        <div>تلفن منزل : @{{home_phone}}</div><br>
                        <div>تلفن ضروری : @{{required_phone}}</div><br>
                        <div>گروه خون : @{{blood_group  }}</div><br>
                        <div>نوع بیماری : @{{insurance}}</div><br>
                        <div>بیمارستان پیوند : @{{transplant_hospital}} </div><br>
                        <div>تحت پوشش : @{{sickness_type}}</div><br>
                        <div> بیمه مکمل : @{{Insurance_mokaml  }}</div><br>
                        <div> سابقه بیماری در خانواده : @{{  Family_his_illness}}</div><br>
                        <div>شماره حساب : @{{account_number}}</div><br>
                    <div style="float: left">
                        <a class="nav-link" ng-click="changeTab('editTab', patient.id)" href="#">
                            <button class="btn btn-outline-danger btn-sm"
                                    data-title="edit" data-toggle="modal"
                                    title="ویرایش">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                        </a>
                    </div></div>

                </div>
                </div>
            </div>
            </div>

        </div>
</div>
