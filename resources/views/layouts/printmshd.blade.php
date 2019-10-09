<style>
    #d1{display:inline; margin-top: 40px}
    #d2{display:inline; }
    #d3{display:inline; }
    #d4{display:inline; }
</style>
<div ng-controller="RecordController">
    <div class="row">
        <div class="col">
            <div class="card min-h-400" style="font-size: 23px ">
                <div class="card-header " style="font-size: 20px">
                    <div style="float: right; width:40%;height: 10%" >
                        <img src="images/a.jpg" width=" 80" height="70"></div>
                    انجمن خیریه حمایت از بیماران کلیوی
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     شهرستان قاینات
                </div>
                <div class="card-body" ng-submit="show2Data">
                    <div id="d1">
                        <div   style="float: right;width: 300px" >
                            <div>نام بیمار  : @{{name}} </div><br>
                            <div>نام پدر : @{{fathers_name}}</div><br>
                            <div>تاریخ تولد : @{{ date_birth }}</div><br>
                            <div>جنسیت: @{{Gender  }}</div><br>
                            <div>وضعیت تاهل : @{{marital_status  }}</div><br>
                            <div>شغل پدر : @{{ fathers_job }}</div><br>
                        </div>
                        <div   style="float: right;width: 320px" >
                            <div>شماره پرونده: @{{id}}</div><br>
                            <div>ش-شناسنامه : @{{id_shenasname}}</div><br>
                            <div>محل تولد : @{{ place_birth }}</div><br>
                            <div>تحصیلات : @{{  education}}</div><br>
                            <div>تحت تکلف : @{{  taht_tkfol}}</div><br>
                            <div>تحصیلات همسر : @{{Wifes_education  }}</div><br>
                        </div>
                        <div style="float: right">
                            <div>تاریخ ثبت: @{{date_sabt  }}</div><br>
                            <div>کد ملی : @{{national_code}}</div><br>
                            <div>ملیت : @{{Nationality  }}</div><br>
                            <div>وضعیت مسکن : @{{ house }}</div><br>
                            <div>شغل : @{{job  }}</div><br>
                            <div>شغل همسر : @{{ Wifes_job }}</div><br>
                        </div>
                    </div>
                    <div id="d2">
                        <div style="float: right;width: 1000px"><div>
                            آدرس منزل : @{{home_adres}}</div><br>
                        </div>
                    </div>

                    <div id="d4">
                        <div style="float: right;width: 600px;"><div>
                            آدرس محل کار : @{{work_adres}}</div>
                        </div><br>
                        <div style="float: right;width: 300px" >
                            <div>تلفن منزل : @{{home_phone}}</div>
                        </div><br>
                    </div><br>

                    <div id="d3">
                        <div style="float: right;width: 300px" >
                            <div style="margin-top: 30px">تلفن همراه : @{{cellphone}}</div><br>
                            <div>علت بیماری : @{{ Cause_illness }}</div><br>
                            <div>هپاتیت : @{{ hepatitis }}</div><br>
                            <div>شروع دیالیز : @{{ Start_dialysis }}</div><br>
                            <div>نوع بیمه : @{{insurance_type}}</div><br>
                            <div> فعالیت جسمانی : @{{  Physical_activity}}</div><br>
                        </div>

                        <div style="float: right;width: 300px">
                            <div style="margin-top: 30px">تلفن ضروری : @{{required_phone}}</div><br>
                            <div>شروع بیماری : @{{  Onset_disease}}</div><br>
                            <div>Hiv : @{{ Hiv }}</div><br>
                            <div>بیمارستان دیالیز : @{{dialysis_hospital  }}</div><br>
                            <div>شماره بیمه : @{{insurance_number  }}</div><br>
                            <div>  رژیم غذایی: @{{ diet }}</div><br>
                        </div>

                        <div style="float: right;width: 320px">
                            <div style="margin-top: 30px">تلفن محل کار : @{{work_phone}}</div><br>
                            <div>گروه خون : @{{blood_group  }}</div><br>
                            <div>بیماری دیگر : @{{Another_disease  }}</div><br>
                            <div>تحت پوشش : @{{sickness_type}}</div><br>
                            <div> بیمه مکمل : @{{Insurance_mokaml  }}</div><br>
                            <div> سابقه بیماری در خانواده : @{{  Family_his_illness}}</div><br>

                        </div>
                    </div></div>
                    <div> &nbsp; دارو های دیالیز : @{{drug}}</div><br>

                </div>
        </div>

                    </div></div>
</div>
</div>
</div>