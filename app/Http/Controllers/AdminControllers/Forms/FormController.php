<?php

namespace App\Http\Controllers\AdminControllers\Forms;

use App\Http\Controllers\Controller;
use App\Models\Forms\AccidentWaiver;
use App\Models\Forms\DoctorReview;
use App\Models\Forms\Insurance;
use App\Models\Forms\MedicalAssessment;
use App\Models\Forms\MedicalHistory;
use App\Models\Forms\PassportImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function medical_assessment()
    {
        $data= MedicalAssessment::orderBy('created_at','desc')->get();
        // dd('ttst',$data);
        return view('admin.forms.medical-assessment',compact('data'));
    }
    public function medicalAssessment($id)
    {
        $medical = MedicalAssessment::where('id',$id)->first();
        $history = MedicalHistory::where('medical_assessment_id',$medical->id)->first();
        $doctor = DoctorReview::where('medical_assessment_id',$medical->id)->first();
        // dd( $medical,$history,$doctor);
        return view('admin.forms.medical-assessment-detail',compact('medical','history','doctor'));
    }
    
    public function medicalAssessment_delete($id)
    {
        $medical = MedicalAssessment::findOrFail($id);
        $medical->delete();

        return redirect()->back()->with('message','Deleted Successful.');
    }
    public function accident_waiver()
    {
        $data= AccidentWaiver::orderBy('created_at','desc')->get();
        // dd('ttst',$data);
        return view('admin.forms.accident-waiver',compact('data'));
    }
    public function accidentWaiver($id)
    {
        $waiver = AccidentWaiver::where('id',$id)->first();
        // dd( $waiver);
        return view('admin.forms.accident-waiver-detail',compact('waiver'));
    }
    public function accidentWaiver_delete($id)
    {
        $accident = AccidentWaiver::findOrFail($id);
        $accident->delete();

        return redirect()->back()->with('message','Deleted Successful.');
    }
    public function insurance()
    {
        $data= Insurance::orderBy('created_at','desc')->get();
        // dd('ttst',$data);
        return view('admin.forms.insurance',compact('data'));
    }
    public function insuranceDetail($id)
    {
        $insurance = Insurance::where('id',$id)->first();
        $passports = PassportImage::where('insurance_application_id',$insurance->id)->get();
        // dd( $insurance,$passports);
        return view('admin.forms.insurance-detail',compact('insurance','passports'));
    }
    public function insurance_delete($id)
    {
        $insurance = Insurance::findOrFail($id);
        // Delete second passport if exists
        if ($insurance->second_passport && Storage::disk('public')->exists('insurance/passports/' . $insurance->second_passport)) {
            Storage::disk('public')->delete('insurance/passports/' . $insurance->second_passport);
        }

        // Delete related passport images
        foreach ($insurance->passports as $passport) {
            if ($passport->file_name && Storage::disk('public')->exists('insurance/passports/' . $passport->file_name)) {
                Storage::disk('public')->delete('insurance/passports/' . $passport->file_name);
            }
            $passport->delete(); // remove record from DB
        }
        $insurance->delete();

        return redirect()->back()->with('message','Deleted Successful.');
    }
}
