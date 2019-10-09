<?php

namespace App\Http\Controllers;

use App\letter;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;

class lettersController extends Controller
{
    public function index()
    {
        $letters = letter::all();
        return response()->json($letters, 200);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $letters = new letter();
        $letters->attach = $request->get('attach');
        $letters->shomare = $request->get('shomare');
        $letters->date = $request->get('date');
        $letters->textarea = $request->get('textarea');
        $letters-> patient_id= $request->get('patient_id');
        $letters->save();
        return response()->json("adsf", 200);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $letter = letter::find($id);
        if(!$letter){
            return response()->json(['message'=>'Not found'],404);

        }
        return response()->json($letter, 200);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient=Patient::find($id);
        return view('layouts.controller-edit',['patient'=>$patient]);
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
        $letter = letter::find($id);
        $letter->attach =$request->attach;
        $letter->shomare =$request->shomare ;
        $letter->date =$request->date;
        $letter-> textarea=$request->textarea ;
        $letter->patient_id=$request->input('patient_id') ;
        $letter -> save();
        return response()->json(['message'=>'saved successfully'], 200);
    }


    public function print(Request $request)
    {
        $letter = letter::find($request->id);
        return view('layouts.controller-printletters' , ['letter' => $letter]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = letter::find($id)->delete();
        return response()->json([], 200);
    }
}

