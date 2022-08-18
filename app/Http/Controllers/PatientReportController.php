<?php

namespace App\Http\Controllers;
use App\Models\reports;
use Illuminate\Http\Request;

class PatientReportController extends Controller
{
    function createReport(Request $req)
    {
        $report = new reports;
        $report -> patient_id=$req->patient_id;
        $report -> oximeter_reading=$req->oximeter_reading;
        $report -> body_temperature=$req->body_temperature;
        $report -> suger_level=$req->suger_level;
        $report -> bp=$req->bp;
        $report -> save();
        return redirect('/profile');
    }

    
    function covidStatusProfile($id = null)
    {
        //$Data = PatientReports::find($id);
        return view('covidStatus');
    }
}
