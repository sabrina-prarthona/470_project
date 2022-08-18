<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facedes\Hash;
use App\Models\patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PatientController extends Controller
{
    function login(Request $req)
    {
        
        $user = patients::where('email',$req->input('email'))->get();
            if(($user[0]->password)==$req->input('password'))
            {
                $req->session()->put('user', $user[0]->id);
                $req->session()->put('name', $user[0]->name);
                $req->session()->put('phone', $user[0]->contact_number);
                $req->session()->put('age', $user[0]->age);
                return view('profile');
                
            }
            else{
                return "username and password not matched";
            }
            
    }

    function signup(Request $req)
    {
        $patient = new patients;
        $patient -> nid=$req->nid;
        $patient -> email=$req->email;
        $patient -> password=$req->password;
        $patient -> name=$req->name;
        $patient -> age=$req->age;
        $patient -> gender=$req->gender;
        $patient -> address=$req->address;
        $patient -> occupation=$req->occupation;
        $patient -> contact_number=$req->Contact_number;
        $patient -> vaccination_status=$req->vaccination_status;
        $patient -> vaccination_date=$req->vaccination_date;
        $patient -> vescription=$req->vescription;
        $patient -> save();
        return redirect('/login');
    }

    function editProfile($id = null)
    {
        $editData = patients::find($id);
        return view('edit',compact('editData'));
    }
    
    function updateProfile(Request $req, $id)
    {
        $patient = patients::find($id);
        $patient -> nid=$req->nid;
        $patient -> email=$req->email;
        $patient -> password=$req->password;
        $patient -> name=$req->name;
        $patient -> age=$req->age;
        $patient -> gender=$req->gender;
        $patient -> address=$req->address;
        $patient -> occupation=$req->occupation;
        $patient -> contact_number=$req->Contact_number;
        $patient -> vaccination_status=$req->vaccination_status;
        $patient -> vaccination_date=$req->vaccination_date;
        $patient -> vescription=$req->vescription;
        $patient->save();
        return redirect('/profile');
    }

    function logout(Request $req)
    {
        $req->session()->flush();
       
        return view('/login');
    }
    
}
