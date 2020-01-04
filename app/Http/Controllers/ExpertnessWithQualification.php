<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Expertness;
use App\Qualification;
class ExpertnessWithQualification extends Controller
{

    public function addExpertness(){
        return view('Admin.expertness add');
    }

    public function storeExpertness(Request $request){
        Expertness::Create($request->all());
        return redirect()->to('manage-expertness')->with('message','Expertness Successfully Added');
    }

    public function manageExpertness(){
        $Expertness = Expertness::get();
        return view('Admin.expertness manage',compact('Expertness'));
    }


    public function editExpertness($id){
        $Expertness = Expertness::findOrFail($id);
        return view('Admin.expertness edit',compact('Expertness'));
    }


    public function updateExpertness($id){
        $Expertness = Expertness::findOrFail($id);
        $Expertness->Name = request('Name');
        $Expertness->Percentage = request('Percentage');
        $Expertness->save();
        return redirect()->to('manage-expertness')->with('message','Expertness Successfully Update');
    }

    public function deleteExpertness($id){
        $Qualification = Expertness::find($id);
        $Qualification->delete();
        return redirect()->to('manage-expertness')->with('message','Expertness delete Successfully');
    }






    public function addQualification(){
        return view('Admin.qualification add');
    }

    public function editQualification($id){
        $Qualification = Qualification::findOrFail($id);
        return view('Admin.qualification edit',compact('Qualification'));
    }

    public function updateQualification($id){
        $Qualification = Qualification::findOrFail($id);
        $Qualification->Degree = request('Degree');
        $Qualification->Session = request('Session');
        $Qualification->Result = request('Result');
        $Qualification->save();
        return redirect()->to('manage-qualification')->with('message','Qualification Update Successfully');
    }

    public function manageQualification(){
        $Qualifications = Qualification::get();
        return view('Admin.qualification manage',compact('Qualifications'));
    }

    public function storeQualification(Request $request){
        Qualification::Create($request->all());
        return redirect()->to('manage-qualification')->with('message','Qualification Successfully Added');
    }

    public function deleteQualification($id){
        $Qualification = Qualification::find($id);
        $Qualification->delete();
        return redirect()->to('manage-qualification')->with('message','Qualification delete Successfully');
    }


}
