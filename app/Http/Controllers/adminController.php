<?php

namespace App\Http\Controllers;
use App\Models\admins;
use App\Models\reports;
use App\Models\patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class adminController extends Controller
{
    function adminLogin(Request $req)
    {
            $user = admins::where('email',$req->input('email'))->get();
            if(($user[0]->password)==$req->input('password'))
            {
                $req->session()->put('user', $user[0]->id);
                $req->session()->put('name', $user[0]->name);
                $req->session()->put('phone', $user[0]->contact_number);
                $req->session()->put('age', $user[0]->age);
                
                return redirect('/adminProfile');
                
            }
            else{
                return "username and password not matched";
            }
    }
    //show all patient

    function ShowData()
    {
        $showData = patients::all();
        return view('viewAllUser',['members'=>$showData]);
    }
    //show patient data by id
    function ShowPatientData($userid=null)
    {
        
        $showData = patients::find($userid);
        return view('viewPatientData',compact('showData'));
    }

    //Delete data
    function deleteData($id=null)
    {
        $deleteData = patients::find($id);
        $deleteData -> delete();
        Session::flash('msg','data delete successfully');
        return redirect('/viewAllUser');
    }
    
    function ShowAdminData()
    {
        $showAdminData = admins::all();
        return view('adminProfile',compact('showAdminData'));
        //return view('adminProfile',['members'=>$showAdminData]);
    }

    function ShowPatientStatus($userid=null)
    {
        
        $Datareport = reports::find($userid);
        return view('viewCovidStatus', compact('Datareport'));
    }

    function logout(Request $req)
    {
        $req->Session()->flush();
       
        return view('/adminlogin');
    }
}
