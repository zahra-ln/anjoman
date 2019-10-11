var app = angular.module('ToDoApp', []);
app.directive('ngConfirmClick', [
    function () {
        return {
            link: function (scope, element, attr) {
                let msg = attr.ngConfirmClick || "Are you sure?";
                let clickAction = attr.confirmedClick;
                element.bind('click', function (event) {
                    if (window.confirm(msg)) {
                        scope.$eval(clickAction)
                    }
                });
            }
        };
    }]);

app.controller('MainController', function ($scope) {
    $scope.tabs = {
        'patientTab': false,
        'categoryTab': false,
        'showTab': false,
        'show2Tab': false,
        'printmshdTab': false,
        'editTab': false,
        'supportTab': false,
        'searchsupportTab':false,
        'editsupportTab': false,
        'showsupportTab': false,
        'lettersTab': false,
        'showlettersTab': false,
        'showaletterTab': false

    };
    $scope.changeTab = function (tab, id = null) {
        if(id){
            localStorage.setItem('id', id);
        }
        angular.forEach($scope.tabs, function (key, value) {
            $scope.tabs[value] = false;
        });
        angular.forEach($scope.tabs, function (key, value) {
            if (value === tab) {
                $scope.tabs[tab] = true;
            }
        });
    }
});






function nl2br (str, is_xhtml) {
    let breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
    let b = (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1'+ breakTag +'$2');
    return b;
}

app.controller('RecordController', function ($scope, $http) {
    let id = localStorage.getItem('id');
    $http.get("http://localhost:8000/api/patients/" + id)
        .then(
            function successCallback(response) {
                $scope.name = response.data.name,
                    $scope.fathers_name = response.data.fathers_name,
                    $scope.national_code = response.data.national_code,
                    $scope.doctor = response.data.doctor,
                    $scope.id= response.data.id,
                    $scope.sickness_type = response.data.sickness_type,
                    $scope.insurance_type = response.data.insurance_type,
                    $scope.insurance = response.data.insurance,
                    $scope.date_transplant = response.data.date_transplant,
                    $scope.transplant_hospital = response.data.transplant_hospital,
                    $scope.transplant_doctor = response.data.transplant_doctor,
                    $scope.drug = response.data.drug,
                    $scope.home_adres = response.data.home_adres,
                    $scope.work_adres = response.data.work_adres,
                    $scope.home_phone = response.data.home_phone,
                    $scope.work_phone = response.data.work_phone,
                    $scope.cellphone = response.data.cellphone,
                    $scope.required_phone = response.data.required_phone,
                    $scope.account_number = response.data.account_number,
                    $scope.id_shenasname=response.data.id_shenasname,
                    $scope.date_birth=response.data.date_birth,
                    $scope.date_sabt=response.data.date_sabt,
                    $scope.place_birth=response.data.place_birth,
                    $scope.Nationality=response.data.Nationality,
                    $scope.Gender=response.data.Gender,
                    $scope.marital_status=response.data.marital_status,
                    $scope.job=response.data.job,
                    $scope.Wifes_job=response.data.Wifes_job,
                    $scope.fathers_job=response.data.fathers_job,
                    $scope.education=response.data.education,
                    $scope.Wifes_education=response.data.Wifes_education,
                    $scope.house=response.data.house,
                    $scope.taht_tkfol=response.data.taht_tkfol,
                    $scope.Cause_illness=response.data.Cause_illness,
                    $scope.hepatitis=response.data.hepatitis,
                    $scope.Start_dialysis=response.data.Start_dialysis,
                    $scope.dialysis_hospital=response.data.dialysis_hospital,
                    $scope.Hiv=response.data.Hiv,
                    $scope.Onset_disease=response.data.Onset_disease,
                    $scope.insurance_number=response.data.insurance_number,
                    $scope.blood_group=response.data.blood_group,
                    $scope.Another_disease=response.data.Another_disease,
                    $scope.Insurance_mokaml=response.data.Insurance_mokaml,
                    $scope.Physical_activity=response.data.Physical_activity,
                    $scope.diet=response.data.diet,
                    $scope.Family_his_illness=response.data.Family_his_illness,
                    $scope.Date_death=response.data.Date_death

            },
            function errorCallback(response) {
                console.log( response.data );
            }
        );
    $scope.patients = [];
    $scope.res = '';

    $scope.submit = function () {
        $http.post("http://localhost:8000/api/patiens", {
            name: $scope.name,
            fathers_name: $scope.fathers_name,
            national_code: $scope.national_code,
            doctor: $scope.doctor,
            id: $scope.id,
            sickness_type: $scope.sickness_type,
            insurance_type: $scope.insurance_type,
            insurance: $scope.insurance,
            date_transplant: $scope.date_transplant,
            transplant_hospital: $scope.transplant_hospital,
            transplant_doctor: $scope.transplant_doctor,
            drug: $scope.drug,
            home_adres: $scope.home_adres,
            work_adres: $scope.work_adres,
            home_phone: $scope.home_phone,
            work_phone: $scope.work_phone,
            cellphone: $scope.cellphone,
            required_phone: $scope.required_phone,
            account_number: $scope.account_number,
            id_shenasname:$scope.id_shenasname,
            date_birth:$scope.date_birth,
            date_sabt:$scope.date_sabt,
            place_birth:$scope.place_birth,
            Nationality:$scope.Nationality,
            Gender:$scope.Gender,
            marital_status:$scope.marital_status,
            job:$scope.job,
            Wifes_job:$scope.Wifes_job,
            fathers_job:$scope.fathers_job,
            education:$scope.education,
            Wifes_education:$scope.Wifes_education,
            house:$scope.house,
            taht_tkfol:$scope.taht_tkfol,
            Cause_illness:$scope.Cause_illness,
            hepatitis:$scope.hepatitis,
            Start_dialysis:$scope.Start_dialysis,
            dialysis_hospital:$scope.dialysis_hospital,
            Hiv:$scope.Hiv,
            Onset_disease:$scope.Onset_disease,
            insurance_number:$scope.insurance_number,
            blood_group:$scope.blood_group,
            Another_disease:$scope.Another_disease,
            Insurance_mokaml:$scope.Insurance_mokaml,
            Physical_activity:$scope.Physical_activity,
            diet:$scope.diet,
            Family_his_illness:$scope.Family_his_illness,
            Date_death:$scope.Date_death
        })
            .then(
                function successCallback(response) {
                    alert('اطلاعات با موفقیت ثبت شد');
                    $scope.getData()
                },
                function errorCallback(response) {
                    alert('خطا');
                    console.log( response.data );
                }
            );
    };
    $scope.getData = function () {
        $http.get("http://localhost:8000/api/patients/")
            .then(
                function successCallback(response) {
                    $scope.patients = response.data;
                },
                function errorCallback(response) {
                    console.log( response.data );
                }
            );
    };
    $scope.getData();
    $scope.show2Data = function () {
        $http.get("http://localhost:8000/api/patients/" +id)
            .then(
                function successCallback(response) {
                    $scope.name = response.data.name,
                        $scope.fathers_name= response.data.fathers_name,
                        $scope.national_code= response.data.national_code,
                        $scope.doctor= response.data.doctor,
                        $scope.id= response.data.id,
                        $scope.sickness_type= response.data.sickness_type,
                        $scope.insurance_type= response.data.insurance_type,
                        $scope.insurance= response.data.insurance,
                        $scope.date_transplant= response.data.date_transplant,
                        $scope .transplant_hospital= response.data.transplant_hospital,
                        $scope.transplant_doctor= response.data.transplant_doctor,
                        $scope.drug= response.data.drug,
                        $scope.home_adres= response.data.home_adres,
                        $scope.work_adres= response.data.work_adres,
                        $scope.home_phone= response.data.home_phone,
                        $scope.work_phone= response.data.work_phone,
                        $scope.cellphone= response.data.cellphone,
                        $scope.required_phone= response.data.required_phone,
                        $scope.account_number= response.data.account_number,
                        $scope.id_shenasname= response.data.id_shenasname,
                        $scope.date_birth=response.data.date_birth,
                        $scope.date_sabt=response.data.date_sabt,
                        $scope. place_birth=response.data.place_birth,
                        $scope. Nationality=response.data.Nationality,
                        $scope. Gender=response.data.Gender,
                        $scope. marital_status=response.data.marital_status,
                        $scope. job=response.data.job,
                        $scope. Wifes_job=response.data.Wifes_job,
                        $scope. fathers_job=response.data.fathers_job,
                        $scope. education=response.data.education,
                        $scope. Wifes_education=response.data.Wifes_education,
                        $scope. house=response.data.house,
                        $scope. taht_tkfol=response.data.taht_tkfol,
                        $scope. Cause_illness=response.data.Cause_illness,
                        $scope. hepatitis=response.data.hepatitis,
                        $scope. Start_dialysis=response.data.Start_dialysis,
                        $scope. dialysis_hospital=response.data.dialysis_hospital,
                        $scope. Hiv=response.data.Hiv,
                        $scope. Onset_disease=response.data.Onset_disease,
                        $scope. insurance_number=response.data.insurance_number,
                        $scope. blood_group=response.data.blood_group,
                        $scope. Another_disease=response.data.Another_disease,
                        $scope. Insurance_mokaml=response.data.Insurance_mokaml,
                        $scope. Physical_activity=response.data.Physical_activity,
                        $scope. diet=response.data.diet,
                        $scope. Family_his_illness=response.data.Family_his_illness,
                        $scope. Date_death=response.data.Date_death
                },
                function errorCallback(response) {
                    console.log( response.data );
                }
            );
    };
    $scope.show2Data();

    $scope.showData = function () {
        $http.get("http://localhost:8000/api/patients/" +$scope.id)
            .then(
                function successCallback(response) {
                    $scope.name = response.data.name,
                        $scope.fathers_name= response.data.fathers_name,
                        $scope.national_code= response.data.national_code,
                        $scope.doctor= response.data.doctor,
                        $scope.id= response.data.id,
                        $scope.sickness_type= response.data.sickness_type,
                        $scope.insurance_type= response.data.insurance_type,
                        $scope.insurance= response.data.insurance,
                        $scope.date_transplant= response.data.date_transplant,
                        $scope .transplant_hospital= response.data.transplant_hospital,
                        $scope.transplant_doctor= response.data.transplant_doctor,
                        $scope.drug= response.data.drug,
                        $scope.home_adres= response.data.home_adres,
                        $scope.work_adres= response.data.work_adres,
                        $scope.home_phone= response.data.home_phone,
                        $scope.work_phone= response.data.work_phone,
                        $scope.cellphone= response.data.cellphone,
                        $scope.required_phone= response.data.required_phone,
                        $scope.account_number= response.data.account_number,
                        $scope.id_shenasname= response.data.id_shenasname,
                        $scope.date_birth=response.data.date_birth,
                        $scope.date_sabt=response.data.date_sabt,
                        $scope. place_birth=response.data.place_birth,
                        $scope. Nationality=response.data.Nationality,
                        $scope. Gender=response.data.Gender,
                        $scope. marital_status=response.data.marital_status,
                        $scope. job=response.data.job,
                        $scope. Wifes_job=response.data.Wifes_job,
                        $scope. fathers_job=response.data.fathers_job,
                        $scope. education=response.data.education,
                        $scope. Wifes_education=response.data.Wifes_education,
                        $scope. house=response.data.house,
                        $scope. taht_tkfol=response.data.taht_tkfol,
                        $scope. Cause_illness=response.data.Cause_illness,
                        $scope. hepatitis=response.data.hepatitis,
                        $scope. Start_dialysis=response.data.Start_dialysis,
                        $scope. dialysis_hospital=response.data.dialysis_hospital,
                        $scope. Hiv=response.data.Hiv,
                        $scope. Onset_disease=response.data.Onset_disease,
                        $scope. insurance_number=response.data.insurance_number,
                        $scope. blood_group=response.data.blood_group,
                        $scope. Another_disease=response.data.Another_disease,
                        $scope. Insurance_mokaml=response.data.Insurance_mokaml,
                        $scope. Physical_activity=response.data.Physical_activity,
                        $scope. diet=response.data.diet,
                        $scope. Family_his_illness=response.data.Family_his_illness,
                        $scope. Date_death=response.data.Date_death
                },
                function errorCallback(response) {
                    console.log( response.data );
                }
            );
    };
    $scope.showData();

    $scope.search = function () {
        $http.get("http://localhost:8000/api/search/patients?name=" +$scope.name)
            .then(
                function successCallback(response) {
                    $scope.name = response.data.name,
                        $scope.fathers_name= response.data.fathers_name,
                        $scope.national_code= response.data.national_code,
                        $scope.doctor= response.data.doctor,
                        $scope.id= response.data.id,
                        $scope.sickness_type= response.data.sickness_type,
                        $scope.insurance_type= response.data.insurance_type,
                        $scope.insurance= response.data.insurance,
                        $scope.date_transplant= response.data.date_transplant,
                        $scope .transplant_hospital= response.data.transplant_hospital,
                        $scope.transplant_doctor= response.data.transplant_doctor,
                        $scope.drug= response.data.drug,
                        $scope.home_adres= response.data.home_adres,
                        $scope.work_adres= response.data.work_adres,
                        $scope.home_phone= response.data.home_phone,
                        $scope.work_phone= response.data.work_phone,
                        $scope.cellphone= response.data.cellphone,
                        $scope.required_phone= response.data.required_phone,
                        $scope.account_number= response.data.account_number,
                        $scope.id_shenasname= response.data.id_shenasname,
                        $scope.date_birth=response.data.date_birth,
                        $scope.date_sabt=response.data.date_sabt,
                        $scope. place_birth=response.data.place_birth,
                        $scope. Nationality=response.data.Nationality,
                        $scope. Gender=response.data.Gender,
                        $scope. marital_status=response.data.marital_status,
                        $scope. job=response.data.job,
                        $scope. Wifes_job=response.data.Wifes_job,
                        $scope. fathers_job=response.data.fathers_job,
                        $scope. education=response.data.education,
                        $scope. Wifes_education=response.data.Wifes_education,
                        $scope. house=response.data.house,
                        $scope. taht_tkfol=response.data.taht_tkfol,
                        $scope. Cause_illness=response.data.Cause_illness,
                        $scope. hepatitis=response.data.hepatitis,
                        $scope. Start_dialysis=response.data.Start_dialysis,
                        $scope. dialysis_hospital=response.data.dialysis_hospital,
                        $scope. Hiv=response.data.Hiv,
                        $scope. Onset_disease=response.data.Onset_disease,
                        $scope. insurance_number=response.data.insurance_number,
                        $scope. blood_group=response.data.blood_group,
                        $scope. Another_disease=response.data.Another_disease,
                        $scope. Insurance_mokaml=response.data.Insurance_mokaml,
                        $scope. Physical_activity=response.data.Physical_activity,
                        $scope. diet=response.data.diet,
                        $scope. Family_his_illness=response.data.Family_his_illness,
                        $scope. Date_death=response.data.Date_death
                },
                function errorCallback(response) {
                    console.log( response.data );
                }
            );
    };
    $scope.search();

    $scope.edit = function () {
        $http.put("http://localhost:8000/api/patients/" +$scope.id , {
            name: $scope.name,
            fathers_name: $scope.fathers_name,
            national_code: $scope.national_code,
            doctor: $scope.doctor,
            id: $scope.id,
            sickness_type: $scope.sickness_type,
            insurance_type: $scope.insurance_type,
            insurance: $scope.insurance,
            date_transplant: $scope.date_transplant,
            transplant_hospital: $scope.transplant_hospital,
            transplant_doctor: $scope.transplant_doctor,
            drug: $scope.drug,
            home_adres: $scope.home_adres,
            work_adres: $scope.work_adres,
            home_phone: $scope.home_phone,
            work_phone: $scope.work_phone,
            cellphone: $scope.cellphone,
            required_phone: $scope.required_phone,
            account_number: $scope.account_number,
            id_shenasname:$scope.id_shenasname,
            date_birth:$scope.date_birth,
            date_sabt:$scope.date_sabt,
            place_birth:$scope.place_birth,
            Nationality:$scope.Nationality,
            Gender:$scope.Gender,
            marital_status:$scope.marital_status,
            job:$scope.job,
            Wifes_job:$scope.Wifes_job,
            fathers_job:$scope.fathers_job,
            education:$scope.education,
            Wifes_education:$scope.Wifes_education,
            house:$scope.house,
            taht_tkfol:$scope.taht_tkfol,
            Cause_illness:$scope.Cause_illness,
            hepatitis:$scope.hepatitis,
            Start_dialysis:$scope.Start_dialysis,
            dialysis_hospital:$scope.dialysis_hospital,
            Hiv:$scope.Hiv,
            Onset_disease:$scope.Onset_disease,
            insurance_number:$scope.insurance_number,
            blood_group:$scope.blood_group,
            Another_disease:$scope.Another_disease,
            Insurance_mokaml:$scope.Insurance_mokaml,
            Physical_activity:$scope.Physical_activity,
            diet:$scope.diet,
            Family_his_illness:$scope.Family_his_illness,
            Date_death:$scope.Date_death
        })
            .then(
                function successCallback(response) {
                    alert('اطلاعات با موفقیت ویرایش شد');
                },
                function errorCallback(response) {
                    console.log( response.data );
                }
            );
    };
    $scope.delete = function (id) {
        $http.delete("http://localhost:8000/api/patients/" + id)
            .then(
                function successCallback(response) {
                    $scope.getData()
                },
                function errorCallback(response) {
                    console.log("مشکلی در ارتباط با سرور پیش آمده است");
                }
            );
    };
});

app.controller('LettersController', function ($scope, $http, $sce) {
    let id = localStorage.getItem('id');
    $scope.id = '';
    $scope.patient_id = '';
    $scope.patients = [];
    $scope.textarea = '';
    $scope.shomare = '';
    $scope.attach= '';
    $scope.date = '';
    $scope.letters = '';
    $scope.res = '';
    $scope.getData = function (id) {
        $http.get("http://localhost/anjoman/public/api/patients")
            .then(
                function successCallback(response) {
                    $scope.patient_id =  (response.data[0].id + "");
                    $scope.patients = response.data;
                    console.log( response.data[0].id);
                },
                function errorCallback(response) {
                    console.log("مشکلی در ارتباط با سرور پیش آمده است");
                }
            );
    };
    $scope.getData();

    $scope.submit = function () {
        $http.post("http://localhost/anjoman/public/api/letters", {
            id: $scope.id ,
            patient_id: $scope.patient_id ,
            textarea: $scope.textarea,
            shomare: $scope.shomare,
            attach: $scope.attach,
            date: $scope.date,
        })
            .then(
                function successCallback(response) {
                    alert('اطلاعات با موفقیت ثبت شد');
                    $scope.res = (response.data);
                    console.log($scope.res)

                },
                function errorCallback(response) {
                    console.log(response.data);
                }
            );
    };

    $scope.showletterData = function () {
        $http.get("http://localhost/anjoman/public/api/letters/" + id)
            .then(
                function successCallback(response) {
                        $scope.id = response.data.id,
                        $scope.patient_id = response.data.patient_id,
                        $scope.textarea = $sce.trustAsHtml(nl2br(response.data.textarea)),
                        $scope.shomare= response.data.shomare,
                        $scope.attach= response.data.attach,
                        $scope.date= response.data.date
                },
                function errorCallback(response) {
                    console.log( response.data );
                }
            );
    };
    $scope.showletterData();

    $scope.getshowletters = function () {
        $http.get("http://localhost/anjoman/public/api/letters")
            .then(
                function successCallback(response) {

                    $scope.letters = response.data;
                },
                function errorCallback(response) {
                    console.log(response.data);
                }
            );
    };
    $scope.getshowletters();

    $scope.delete = function (id) {
        $http.delete("http://localhost/anjoman/public/api/letters/" + id)
            .then(
                function successCallback(response) {
                    $scope.getshowletters()


                },
                function errorCallback(response) {
                    console.log(response.data);
                }
            );
    }; });

app.controller('SupportController', function ($scope, $http) {
    let id = localStorage.getItem('id');
    $scope.patient_id= '';
    $scope.patients = [];
    $scope.id = '';
    $scope.helper = '';
    $scope.amount = '';
    $scope.typeofhelp = '';
    $scope.date = '';
    $scope.res = '';
    $scope.supports = '';
    $scope.supportt = '';
    $scope.total = 0;
    $scope.totall = 0;
    $scope.search = function () {
        $http.get("http://localhost/anjoman/public/api/search/supports?patient_id=" +$scope.patient_id)
            .then(
                function successCallback(response) {
                    $scope.data= response.data;

                    $scope.totall=0;

                    for(i=0;i<$scope.data.length;i++){
                        $scope.totall += parseInt($scope.data[i].amount);
                    }

                },
                function errorCallback(response) {
                    console.log( response.data );
                }
            );
    };
    $scope.search();

    $scope.getData = function (id) {
        $http.get("http://localhost/anjoman/public/api/patients")
            .then(
                function successCallback(response) {
                    $scope.patient_id =  (response.data[0].id + "")
                    $scope.patients = response.data;
                    console.log( response.data[0].id);
                },
                function errorCallback(response) {
                    console.log("مشکلی در ارتباط با سرور پیش آمده است");
                }
            );
    };
    $scope.getData();

    $scope.show2Data = function () {
        $http.get("http://localhost/anjoman/public/api/supports/" +id)
            .then(
                function successCallback(response) {
                    $scope.patient_id = response.data.patient_id,
                    $scope.id = response.data.id,
                    $scope.helper= response.data.helper,
                    $scope.amount = response.data.amount,
                    $scope.typeofhelp = response.data.typeofhelp,
                    $scope.date = response.data.date
                },
                function errorCallback(response) {
                    console.log( response.data );
                }
            );
    };
    $scope.show2Data();


    $scope.submit = function () {
        $http.post("http://localhost/anjoman/public/api/supports", {
            helper: $scope.helper,
            amount: $scope.amount,
            typeofhelp: $scope.typeofhelp,
            date: $scope.date,
            patient_id: $scope.patient_id
        })
            .then(

                function successCallback(response) {
                    alert('اطلاعات با موفقیت ثبت شد');
                    $scope.res = (response.data);
                    console.log($scope.res)

                },
                function errorCallback(response) {
                    console.log(response.data);
                }
            );
    };
    $scope.edit = function () {
        $http.put("http://localhost/anjoman/public/api/supports/" +$scope.id , {
            id: $scope.id,
            patient_id: $scope.patient_id,
            helper: $scope.helper,
            amount: $scope.amount,
            typeofhelp: $scope.typeofhelp,
            date: $scope.date
        })
            .then(
                function successCallback(response) {
                    alert('اطلاعات با موفقیت ویرایش شد');
                },
                function errorCallback(response) {
                    console.log( response.data );
                }
            );
    };

    $scope.getTotal = function() {
        for(count=0;count<$scope.supports.length;count++){
            $scope.total += parseInt($scope.supports[count].amount);
        }
    };

    $scope.getshowsupport = function () {
        $http.get("http://localhost/anjoman/public/api/supports")
            .then(
                function successCallback(response) {
                    $scope.supports = response.data;
                    $scope.getTotal();
                },
                function errorCallback(response) {
                    console.log("مشکلی در ارتباط با سرور پیش آمده است");
                }
            );
    };
    $scope.getshowsupport();

    $scope.delete = function (id) {
        $http.delete("http://localhost/anjoman/public/api/supports/" + id)
            .then(
                function successCallback(response) {
                    $scope.getshowsupport()
                },
                function errorCallback(response) {
                    console.log("مشکلی در ارتباط با سرور پیش آمده است");
                }
            );
    };
});





