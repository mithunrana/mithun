<?php

namespace App\Http\Controllers;
use App\Portfolio;
use App\PrivacyPolicyModel;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function privacyPolicyManage(){
        $PrivacyPolices = PrivacyPolicyModel::get();
        return view('Admin.privacy policy manage',compact('PrivacyPolices'));
    }

    public function index(){
        $PrivacyPolices = PrivacyPolicyModel::where('Active_Status',1)->get();
        return view('UI.privacy-policy',compact('PrivacyPolices'));
    }

    public function add(){
        return view('Admin.privacy policy add');
    }

    public function store(Request $request){
        $this->validate($request,[
            'PrivacyPolicyTitle' => 'required',
            'PrivacyPolicyContent' => 'required',
        ]);
        PrivacyPolicyModel::Create($request->all());
        return redirect()->to('admin/manage-privacy-policy')->with('message','Privacy Policy Added Successfully');
    }

    public function edit($id){
        $PrivacyPolicy = PrivacyPolicyModel::where('id',$id)->first();
        return view('Admin.privacy policy edit',compact('PrivacyPolicy'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'PrivacyPolicyTitle' => 'required',
            'PrivacyPolicyContent' => 'required',
        ]);
        $PrivacyPolicy = PrivacyPolicyModel::where('id',$id)->first();
        $PrivacyPolicy->PrivacyPolicyTitle = $request->PrivacyPolicyTitle;
        $PrivacyPolicy->PrivacyPolicyContent = $request->PrivacyPolicyContent;
        $PrivacyPolicy->save();
        return redirect()->to('admin/manage-privacy-policy')->with('message','Privacy Policy Update Successfully');
    }

    public function delete($id){
        $PrivacyPolicy = PrivacyPolicyModel::find($id);
        $PrivacyPolicy->delete();
        return redirect()->to('admin/manage-privacy-policy')->with('message','Privacy Policy Delete Successfully');
        return view('Admin.');
    }

    public function activeDeactive($privacyId,$statusid){
        $PrivacyId = $privacyId;
        $status = $statusid;
        if($status==0){
            $PrivacyPolicy =  PrivacyPolicyModel::findOrFail($PrivacyId);
            $PrivacyPolicy->Active_Status = '1';
            $PrivacyPolicy->save();
            return redirect()->to('admin/manage-privacy-policy')->with('message','Privacy Active Successfully');
        }else{
            $PrivacyPolicy =  PrivacyPolicyModel::findOrFail($PrivacyId);
            $PrivacyPolicy->Active_Status = '0';
            $PrivacyPolicy->save();
            return redirect()->to('admin/manage-privacy-policy')->with('message','Privacy Deactive Successfully');
        }
    }
}
