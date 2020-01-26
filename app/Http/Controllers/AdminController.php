<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\IncomeingMail;
use App\User;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Mail;
use App\Expertness;
use Barryvdh\DomPDF\Facade as PDF;
class AdminController extends Controller
{

   public function index(){
       $About = User::first();
      return view('Admin.main admin panel');
   }

    public function passwordUpdate(){
        $id = auth()->id();
        $User = User::where('id',$id)->first();
        return view('Admin.setting',compact('User'));
    }

    public function updatePassword(Request $request){
        $id =  auth()->id();
        $User =  User::findOrFail($id);
        if($request->password==''){
            $User->name = $request->name;
            $User->email = $request->email;
            $User->save();
            return redirect()->to('admin/admin-panel')->with('message','Information Update Successfully');
        }else{
            $User->password = Hash::make($request->password);
            $User->name = $request->name;
            $User->email = $request->email;
            $User->save();
            return redirect()->to('admin/admin-panel')->with('message','Information Update Successfully');
        }
    }

    public function sendMail(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'subject' => 'required',
            'name' => 'required',
            'message' => 'required',
        ]);
        $email = $request->email;
        $name = $request->name;
        $subject = $request->subject;
        $message = $request->message;
        $incomeMailAddress = "mithunrana.developer@gmail.com";


        Mail::to($email)->send(new ContactMail($subject,$message,$name));
        Mail::to($incomeMailAddress)->send(new IncomeingMail($subject,$message,$name,$email));
        Session::flash("success");
        return redirect()->to('contact-mithun-rana');

    }


    public function generatePdf(){
       $Expertness = Expertness::get();
        $pdf = PDF::loadView('UI.expertnesslist',compact('Expertness'))->setPaper('a4','portrait');
        return $pdf->stream('ExpertnessList.pdf',$Expertness);
    }

}
