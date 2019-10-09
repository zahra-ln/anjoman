<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('patients', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name');
            $table->string('fathers_name');
            $table->double('national_code');
            $table->string('doctor');
            $table->string('sickness_type')->nullable();
            $table->string('insurance_type')->nullable();
            $table->string('insurance')->nullable();
            $table->date('date_transplant')->nullable();
            $table->string('transplant_hospital')->nullable();
            $table->string('transplant_doctor')->nullable();
            $table->string('drug')->nullable();
            $table->string('home_adres');
            $table->string('work_adres')->nullable();
            $table->double('home_phone');
            $table->double('work_phone');
            $table->double('cellphone');
            $table->double('required_phone');
            $table->double('account_number')->nullable();
            $table->double('id_shenasname');//شماره شناسنامه
            $table->date('date_birth');//تاریخ تولد
            $table->date('date_sabt');//تاریخ تولد
            $table->string('place_birth');
            $table->string('Nationality');
            $table->string('Gender');
            $table->string('marital_status');//وضعیت تاهل
            $table->string('job');//شغل
            $table->string('Wifes_job')->nullable();//شغل همسر
            $table->string('fathers_job');//شغل پدر
            $table->string('education');//تحصیلات
            $table->string('Wifes_education')->nullable();//تحصیلات همسر
            $table->string('house');//وضعیت مسکن
            $table->integer('taht_tkfol');//تحت تکفل
            $table->string('Cause_illness');//علت بیماری
            $table->string('hepatitis');//هپاتیت
            $table->string('Start_dialysis')->nullable();//شروع دیالیز
            $table->string('dialysis_hospital')->nullable();//بیمارستان پیوند
            $table->string('Hiv');//hiv
            $table->string('Onset_disease');//شروع بیماری
            $table->double('insurance_number');//شماره بیمه
            $table->string('blood_group');//گروه خونی
            $table->string('Another_disease');//بیماری دیگر
            $table->string('Insurance_mokaml');//بیمه مکمل
            $table->string('Physical_activity');//فعالیت جسمانی
            $table->string('diet');//رژیم غذایی
            $table->string('Family_his_illness');//سابقه بیماری در خانواده
            $table->date('Date_death')->nullable();//تاریخ فوت
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
