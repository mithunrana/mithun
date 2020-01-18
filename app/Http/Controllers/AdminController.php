<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\IncomeingMail;
use App\User;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Mail;
class AdminController extends Controller
{

   public function index(){
       $About = User::first();
      return view('Admin.main admin panel');
   }

    public function passwordUpdate(){
        return view('Admin.setting');
    }

    public function updatePassword(Request $request){
       $id =  auth()->id();
       $User =  User::findOrFail($id);
        $User->password = Hash::make($request->password);
        $User->save();
        return redirect()->to('admin-panel')->with('message','Password Update Successfully');
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
        return back();

        /*if(Mail::to($email)->send(new ContactMail($subject,$message,$name))){
            //Mail::to($incomeMailAddress)->send(new IncomeingMail($subject,$message,$name));
            Session::flash("success");
            return back();
        }else{
            Session::flash("failmessage");
            return back();
        }*/

    }


}
