<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{

   public function index(){
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


}
