<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\AboutProfile;
class AboutController extends Controller {

    public function index() {
        return view('UI.about');
    }


    public function profile(){
        return view('Admin.profile');
    }


    public function profileUpdate(Request $request){
        //$users = DB::table('about_profiles')->get();
        $users = AboutProfile::first();
        if(isset($users->id)){
            $Profile = AboutProfile::find($users->id);
            $Profile->Name = $request->Name;
            $Profile->ShortBrief = $request->ShortBrief;
            $Profile->Details = $request->Details;
            $Profile->Discover_link = $request->Discover_link;
            $Profile->Download_link = $request->Download_link;
            $Profile->Email1 = $request->Email1;
            $Profile->Email2 = $request->Email2;
            $Profile->Phone1 = $request->Phone1;
            $Profile->Phone2 = $request->Phone2;
            $Profile->Address = $request->Address;
            $Profile->Facebook_Link = $request->Facebook_Link;
            $Profile->Youtube_Link = $request->Youtube_Link;
            $Profile->Twitter_Link = $request->Twitter_Link;

            $Profile->Linkedin_Link = $request->Linkedin_Link;
            $Profile->Fiveer_Link = $request->Fiveer_Link;
            $Profile->Upwork_Link = $request->Upwork_Link;
            $Profile->Instagram_Link = $request->Instagram_Link;
            $Profile->Pinterest_Link = $request->Pinterest_Link;
            $Profile->Behance_Link = $request->Behance_Link;
            $Profile->Dribble_Link = $request->Dribble_Link;
            $Profile->Vimeo_Link = $request->Vimeo_Link;
            $Profile->Github_Link = $request->Github_Link;
            $Profile->Google_Map = $request->Google_Map;
            $Profile->stackoverflow_link = $request->stackoverflow_link;
            $Profile->save();
        }else{
            $Profile = new  AboutProfile();
            $Profile->Name = $request->Name;
            $Profile->ShortBrief = $request->ShortBrief;
            $Profile->Details = $request->Details;
            $Profile->Discover_link = $request->Discover_link;
            $Profile->Download_link = $request->Download_link;
            $Profile->Email1 = $request->Email1;
            $Profile->Email2 = $request->Email2;
            $Profile->Phone1 = $request->Phone1;
            $Profile->Phone2 = $request->Phone2;
            $Profile->Address = $request->Address;
            $Profile->Facebook_Link = $request->Facebook_Link;
            $Profile->Youtube_Link = $request->Youtube_Link;
            $Profile->Twitter_Link = $request->Twitter_Link;

            $Profile->Linkedin_Link = $request->Linkedin_Link;
            $Profile->Fiveer_Link = $request->Fiveer_Link;
            $Profile->Upwork_Link = $request->Upwork_Link;
            $Profile->Instagram_Link = $request->Instagram_Link;
            $Profile->Pinterest_Link = $request->Pinterest_Link;
            $Profile->Behance_Link = $request->Behance_Link;
            $Profile->Dribble_Link = $request->Dribble_Link;
            $Profile->Vimeo_Link = $request->Vimeo_Link;
            $Profile->Github_Link = $request->Github_Link;
            $Profile->Google_Map = $request->Google_Map;
            $Profile->stackoverflow_link = $request->stackoverflow_link;
            $Profile->save();
        }
    }

}
