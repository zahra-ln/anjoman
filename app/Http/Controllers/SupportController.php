<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index()
    {
        $supports = Support::all();
        return response()->json($supports, 200);
    }

    public function search(Request $request)
    {
        $supportInstance = new Support();
        $query = $supportInstance->newQuery();
        if($request->has('patient_id')){
            $query =Support:: where('patient_id', '=', $request->get('patient_id') );
        }
        $supports = $query->get();
        return response()->json($supports, 200);
    }

    public function show($id)
    {
        $support = Support::find($id);
        if(!$support){
            return response()->json(['message'=>'Not found'],404);
        }
        return response()->json($support, 200);
    }
/*public function search(){
        $key = request('keyword');
        $lessons = Lesson::search($key)->latest()->get();
        return view('front.section.search', compact('lessons','key'));
    }*/
    public function store(Request $request)
    {
        $support = new support();
        $support->helper = $request->get('helper');
        $support->typeofhelp = $request->get('typeofhelp');
        $support->date = $request->get('date');
        $support->amount = $request->get('amount');
        $support->patient_id = $request->get('patient_id');
        $support->save();
        return response()->json($support, 200);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $support = Support::find($id);
        $support->helper =$request->helper;
        $support->typeofhelp =$request->typeofhelp ;
        $support->date=$request->date ;
        $support->amount =$request->amount;
        $support->patient_id=$request->patient_id;
        $support -> save();
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
        $category = Support::find($id)->delete();
        return response()->json([], 200);
    }

}
