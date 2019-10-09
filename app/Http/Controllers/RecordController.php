<?php
namespace App\Http\Controllers;
use App\Patient;
use App\Http\Requests\record;
use Illuminate\Http\Request;
class RecordController extends Controller
{

    public function index()
    {
        $patients = Patient::all();
        return response()->json($patients, 200);
    }

    public function search(Request $request)
    {
        $patientInstance = new Patient();
        $query = $patientInstance->newQuery();
        if($request->has('name')){
            $query->where('name','LIKE','%'.$request->get('name').'%');
        }
        $patients = $query->first();
        return response()->json($patients, 200);
    }

    public function store(record $request)
    {
        $patients = Patient::create($request->all());
        return response()->json($patients, 200);
    }

    public function show($id)
    {
        $patient = Patient::find($id);
        if(!$patient){
            return response()->json(['message'=>'Not found'],404);

        }
        return response()->json($patient, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* public function edit($id)
     {
         $patient = Patient::find($id);
         return view("layouts.controller-edit",['patient'=>$patient]);
     }*/

    public function update(Request $request, $id)
    {
        $patient = Patient::find($id);
        $patient->name =$request->name ;
        $patient->fathers_name =$request->fathers_name ;
        $patient->national_code =$request->national_code ;
        $patient-> doctor=$request->doctor;
        $patient->sickness_type =$request->sickness_type ;
        $patient->insurance_type =$request->insurance_type ;
        $patient-> insurance=$request->insurance ;
        $patient->date_transplant =$request->date_transplant ;
        $patient-> transplant_hospital=$request->transplant_hospital ;
        //$patient->transplant_doctor=$request->transplant_doctor ;
        $patient->drug =$request->drug ;
        $patient->home_adres =$request->home_adres ;
        $patient-> work_adres=$request->work_adres ;
        $patient-> home_phone=$request->home_phone ;
        $patient->work_phone =$request->work_phone ;
        $patient->date_sabt =$request->date_sabt ;
        $patient->cellphone =$request->cellphone ;
        $patient->required_phone =$request->required_phone ;
        $patient->account_number =$request->account_number ;
        $patient->id_shenasname =$request-> id_shenasname;
        $patient->date_birth =$request->date_birth ;
        $patient->place_birth =$request->place_birth ;
        $patient-> marital_status=$request-> marital_status;
        $patient->job =$request-> job;
        $patient->Wifes_job =$request->Wifes_job ;
        $patient->fathers_job =$request->fathers_job ;
        $patient-> education=$request-> education;
        $patient->Wifes_education =$request->Wifes_education ;
        $patient->house =$request->house ;
        $patient-> taht_tkfol=$request->taht_tkfol ;
        $patient->Cause_illness =$request->Cause_illness ;
        $patient-> hepatitis=$request->hepatitis ;
        $patient->Start_dialysis =$request->Start_dialysis ;
        $patient-> Onset_disease=$request->Onset_disease ;
        $patient->insurance_number =$request->insurance_number ;
        $patient->blood_group =$request->blood_group ;
        $patient-> Another_disease=$request->Another_disease ;
        $patient->Insurance_mokaml =$request->Insurance_mokaml ;
        $patient->Physical_activity =$request->Physical_activity ;
        $patient->diet =$request->diet ;
        $patient->Family_his_illness =$request->Family_his_illness ;
        $patient->Date_death =$request->Date_death ;
        $patient->Gender =$request->Gender ;
        $patient->date_sabt =$request->date_sabt ;
        $patient->Nationality =$request->Nationality ;
        $patient->dialysis_hospital =$request-> dialysis_hospital;
        $patient -> save();
        return response()->json(['message'=>'saved successfully'], 200);

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patients = Patient::find($id)->delete();
        if(!$patients){
            return response()->json(['message'=>'Not found'],404);
        }
        return response()->json(['message'=>'deleted successfully'], 200);
    }
}






