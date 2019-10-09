<div ng-controller="RecordController">
    <div class="row">
        <div class="col">
            <div class="card min-h-400">
                <div class="card-header text-center">
                    ثبت نام بیمار</div>
                <div class="card-body">
                    <form ng-submit="submit()" class="form-inline" >
                        <div class="input-group mb-3" >
                            <h6>نام بیمار:&nbsp;&nbsp;&nbsp;</h6>
                            <input   type="text" ng-model="name" class="form-control"
                                     placeholder="نام بیمار">
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3" >
                            <h6>شماره پرونده:</h6>
                            <input type="text" ng-model="id" class="form-control"
                                   placeholder="شماره پرونده"
                                   aria-label="شماره پرونده">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>نام پدر:&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                            <input type="text" ng-model="fathers_name" class="form-control"
                                   placeholder="نام پدر"
                                   aria-label="نام پدر">
                        </div>
                        <div class="input-group mb-3">
                            <h6>کد ملی:&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                            <input type="text" ng-model="national_code" class="form-control"
                                   placeholder="کد ملی"
                                   aria-label="کد ملی">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>شماره شناسنامه:</h6>
                            <input type="text" ng-model="id_shenasname" class="form-control"
                                   placeholder="شماره شناسنامه"
                                   aria-label="شماره شناسنامه">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>تاریخ ثبت:&nbsp;</h6>
                            <input type="text" ng-model="date_sabt" class="form-control"
                                   placeholder="تاریخ ثبت"
                                   aria-label="تاریخ ثبت">
                        </div>
                        <div class="input-group mb-3">
                            <h6>ملیت: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                            <input type="text" ng-model="Nationality" class="form-control"
                                   placeholder="ملیت"
                                   aria-label="ملیت">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6> &nbsp;&nbsp;&nbsp;&nbsp; تاریخ تولد:</h6>
                            <input type="text" ng-model="date_birth" class="form-control"
                                   placeholder="تاریخ تولد"
                                   aria-label="تاریخ تولد">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>&nbsp;&nbsp;محل تولد:</h6>
                            <input type="text" ng-model="place_birth" class="form-control"
                                   placeholder="محل تولد"
                                   aria-label="محل تولد">
                        </div>
                        <div class="input-group mb-3">
                            <h6>جنسیت:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                            <input type="text" ng-model="Gender" class="form-control"
                                   placeholder="جنسیت"
                                   aria-label="جنسیت">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>وضعیت تاهل:</h6>
                            <input type="text" ng-model="marital_status" class="form-control"
                                   placeholder="وضعیت تاهل"
                                   aria-label="وضعیت تاهل">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>تحت تکفل:</h6>
                            <input type="text" ng-model="taht_tkfol" class="form-control"
                                   placeholder="تحت تکفل"
                                   aria-label="تحت تکفل">
                        </div>
                        <div class="input-group mb-3">
                            <h6>تحصیلات :&nbsp;&nbsp;</h6>
                            <input type="text" ng-model="education" class="form-control"
                                   placeholder="  تحصیلات "
                                   aria-label="تحصیلات ">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>شغل:</h6>
                            <input type="text" ng-model="job" class="form-control"
                                   placeholder="شغل"
                                   aria-label="شغل">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>شغل پدر:</h6>
                            <input type="text" ng-model="fathers_job" class="form-control"
                                   placeholder="شغل پدر"
                                   aria-label=" شغل پدر">
                        </div>
                        <div class="input-group mb-3">
                            <h6>شغل همسر:</h6>
                            <input type="text" ng-model="Wifes_job" class="form-control"
                                   placeholder="  شغل همسر"
                                   aria-label="شغل همسر">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>تحصیلات همسر:</h6>
                            <input type="text" ng-model="Wifes_education" class="form-control"
                                   placeholder="  تحصیلات همسر"
                                   aria-label="تحصیلات همسر">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>وضعیت مسکن:</h6>
                            <input type="text" ng-model="house" class="form-control"
                                   placeholder="  وضعیت مسکن"
                                   aria-label="وضعیت مسکن">
                        </div>
                        <div class="input-group mb-3" style="width: 465px">
                            <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;پزشک:&nbsp;&nbsp;&nbsp;</h6>
                            <input type="text" ng-model="doctor" class="form-control"
                                   placeholder="پزشک"
                                   aria-label="پزشک">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>تحت پوشش:</h6>
                            <select ng-model="sickness_type">
                                placeholder="نحت پوشش"
                                aria-label="تحت پوشش"
                                <option value="کمیته امداد">کمیته امداد</option>
                                <option value="بهزیستی">بهزیستی</option>

                                <input type="text" ng-model="sickness_type" class="form-control"
                                       placeholder="سایر"
                                       aria-label="سایر">
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;نوع بیمه:</h6>
                            <select ng-model="insurance_type">
                                placeholder="نوع بیمه"
                                aria-label="نوع بیمه"
                                <option value="خدمات درمانی">خدمات درمانی</option>
                                <option value="نیروهای مصلح">نیروهای مصلح</option>
                                <option value="تامین اجتماعی">تامین اجتماعی</option>
                            </select>
                            <input type="text" ng-model="insurance_type" class="form-control"
                                   placeholder="سایر"
                                   aria-label="سایر">
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>نوع بیماری:</h6>
                            <select ng-model="insurance">
                                placeholder="نوع بیماری"
                                aria-label="نوع بیماری"
                                <option value="دیالیز خونی">دیالیز خونی</option>
                                <option value=" دیالیز صفاقی">دیالیز صفاقی</option>
                                <option value="پیوند کلیه">پیوند کلیه</option>
                                <option value="مزمن کلیوی">مزمن کلیوی</option>
                                <input type="text" ng-model="insurance" class="form-control"
                                       placeholder="سایر"
                                       aria-label="سایر">
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <h6>شماره بیمه:&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                            <input type="text" ng-model="insurance_number" class="form-control"
                                   placeholder="شماره بیمه"
                                   aria-label="شماره بیمه">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>بیمه مکمل:</h6>
                            <input type="text" ng-model="Insurance_mokaml" class="form-control"
                                   placeholder="بیمه مکمل"
                                   aria-label="بیمه مکمل">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>تاریخ پیوند:</h6>
                            <input type="text" ng-model="date_transplant" class="form-control"
                                   placeholder="تاریخ پیوند"
                                   aria-label="تاریخ پیوند">
                        </div>
                        <div class="input-group mb-3">
                            <h6>بیمارستان پیوند:</h6>
                            <input type="text" ng-model="transplant_hospital" class="form-control"
                                   placeholder="بیمارستان پیوند"
                                   aria-label="بیمارستات پیوند">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>پزشک پیوند:</h6>
                            <input type="text" ng-model="transplant_doctor" class="form-control"
                                   placeholder="پزشک پیوند"
                                   aria-label="پزشک پیوند">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>داروهای مصرفی:</h6>
                            <input type="text" ng-model="drug" class="form-control"
                                   placeholder="دارو های مصرفی"
                                   aria-label="دارو های مصرفی">
                        </div>
                        <div class="input-group mb-3">
                            <h6>آدرس منزل:&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                            <input type="text" ng-model="home_adres" class="form-control"
                                   placeholder="آدرس منزل"
                                   aria-label="آدرس منزل">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>آدرس محل کار:</h6>
                            <input type="text" ng-model="work_adres" class="form-control"
                                   placeholder="آدرس محل کار"
                                   aria-label="آدرس محل کار">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>تلفن منزل :&nbsp;&nbsp;</h6>
                            <input type="text" ng-model="home_phone" class="form-control"
                                   placeholder="تلفن منزل"
                                   aria-label="تلفن منرل">
                        </div>
                        <div class="input-group mb-3">
                            <h6>تلفن محل کار :</h6>
                            <input type="text" ng-model="work_phone" class="form-control"
                                   placeholder="تلفن محل کار"
                                   aria-label="تلفن محل کار">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>همراه:</h6>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" ng-model="cellphone" class="form-control"
                                   placeholder="همراه"
                                   aria-label="همراه">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>تلفن ضروری:</h6>
                            <input type="text" ng-model="required_phone" class="form-control"
                                   placeholder="تلفن ضروری"
                                   aria-label="تلفن ضروری">
                        </div>
                        <div class="input-group mb-3">
                            <h6>علت بیماری:&nbsp;&nbsp;</h6>
                            <input type="text" ng-model="Cause_illness" class="form-control"
                                   placeholder="علت بیماری"
                                   aria-label="علت بیماری">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>شروع بیماری:</h6>
                            <input type="text" ng-model="Onset_disease" class="form-control"
                                   placeholder="شروع بیماری"
                                   aria-label="شروع بیماری">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>گروه خون:</h6>
                            <input type="text" ng-model="blood_group" class="form-control"
                                   placeholder="گروه خون"
                                   aria-label="گروه خون">
                        </div>
                        <div class="input-group mb-3">
                            <h6>هپاتیت:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                            <input type="text" ng-model="hepatitis" class="form-control"
                                   placeholder="هپاتیت"
                                   aria-label="هپاتیت">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>Hiv:</h6>
                            <input type="text" ng-model="Hiv" class="form-control"
                                   placeholder="Hiv"
                                   aria-label="Hiv">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>بیماری دیگر:</h6>
                            <input type="text" ng-model="Another_disease" class="form-control"
                                   placeholder="بیماری دیگر"
                                   aria-label="بیماری دیگر">
                        </div>
                        <div class="input-group mb-3">
                            <h6>شروع دیالیز:&nbsp;&nbsp;</h6>
                            <input type="text" ng-model="Start_dialysis" class="form-control"
                                   placeholder="شروع دیالیز"
                                   aria-label="شروع دیالیز">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>بیمارستان دیالیز:</h6>
                            <input type="text" ng-model="dialysis_hospital" class="form-control"
                                   placeholder="بیمارستان دیالیز"
                                   aria-label="بیمارستان دیالیز">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>فعالیت جسمانی:</h6>
                            <input type="text" ng-model="Physical_activity" class="form-control"
                                   placeholder="فعالیت جسمانی"
                                   aria-label="فعالیت جسمانی">
                        </div>
                        <div class="input-group mb-3">
                            <h6>رژیم غذایی:&nbsp;&nbsp;&nbsp;</h6>
                            <input type="text" ng-model="diet" class="form-control"
                                   placeholder="رژیم غدایی"
                                   aria-label="رژیم غدایی">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>سابقه بیماری در خانواده:&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                            <input type="text" ng-model="Family_his_illness" class="form-control"
                                   placeholder="سابقه بیماری در خانواده"
                                   aria-label="سابقه بیماری در خانواده">
                        </div>
                        &nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3">
                            <h6>شماره حساب:&nbsp;&nbsp; </h6>
                            <input type="text" ng-model="account_number" class="form-control"
                                   placeholder="شماره حساب"
                                   aria-label="شماره حساب">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group mb-3" style="width: 380px">
                            <h6>تاریخ فوت:&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                            <input type="text" ng-model="Date_death" class="form-control"
                                   placeholder="تاریخ فوت"
                                   aria-label="تاریخ فوت">
                        </div>&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-append" >
                            <button class="btn btn-primary" type="submit"
                                    id="button-addon2">ثبت
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
