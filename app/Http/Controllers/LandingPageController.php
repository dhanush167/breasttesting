<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\PatientBooking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{

    public function index()
    {
        return view('front.index');
    }


    public function what_happens_at_your_screen()
    {
        return view('front.what_happens_at_your_screen');
    }

    public function breast_cancer_and_screening()
    {
        return view('front.breast_cancer_and_screening');
    }

    public function special_request()
    {
        return view('front.special_request');
    }

    public function resources()
    {
        return view('front.resources');
    }

    public function get_involved()
    {
        return view('front.get_involved');
    }

    public function news()
    {
        return view('front.news');
    }

    /*Breast cancer and screening*/

    public function your_screening_choice()
    {
        return view('front.breast_cancer_and_screening.your_screening_choice');
    }

    public function your_best_cancer_risk()
    {
        return view('front.breast_cancer_and_screening.your_best_cancer_risk');
    }

    public function reducing_your_risk()
    {
        return view('front.breast_cancer_and_screening.reducing_your_risk');
    }

    public function measuring_the_success_of_our_breast_screening_program()
    {
        return view('front.breast_cancer_and_screening.measuring_the_success_of_our_breast_screening_program');
    }

    /*get involved*/

    public function your_stories()
    {
        return view('front.what_happens_at_your_screen.your_stories');
    }

    public function group_bookings()
    {
        return view('front.special_request.group_bookings');
    }

    public function In_your_workplace()
    {
        return view('front.special_request.In_your_workplace');
    }


    /* public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    } */

    public function before_screening()
    {
        return view('front.what_happens_at_your_screen.before_screening');
    }

    public function client_feedback()
    {
        return view('front.what_happens_at_your_screen.client_feedback');
    }

    public function at_screening()
    {
        return view('front.what_happens_at_your_screen.at_screening');
    }

    public function after_screening()
    {
        return view('front.what_happens_at_your_screen.after_screening');
    }

    public function signs_and_symptoms_of_breast_cancer()
    {
        return view('front.breast_cancer_and_screening.signs_and_symptoms_of_breast_cancer');
    }

    public function should_i_be_screened()
    {
        return view('front.what_happens_at_your_screen.should_I_be_screened');
    }

    public function the_scope_of_our_program()
    {
        return view('front.what_happens_at_your_screen.the_scope_of_our_program');
    }

    public function volunteers()
    {
        return view('front.get_involved.Volunteers');
    }

    public function consumer_network()
    {
        return view('front.get_involved.Consumer_Network');
    }

    /*about us*/

    public function our_programme()
    {
          return view('front.about_us.Our_programme');
    }

    public function our_purpose()
    {
          return view('front.about_us.Our_purpose');
    }

    public function cancer_early_detection_centre()
    {
         return view('front.about_us.Cancer_early_detection_centre');
    }

    public function governance()
    {
         return view('front.about_us.Governance');
    }


    /*resources*/

    public function Institutions_with_functioning_Breast_Clinics()
    {
        return view('front.resources.Institutions_with_functioning_Breast_Clinics_in_Sri_Lanka');
    }

    public function Mammography_Centers_in_Sri_lanka()
    {
        return view('front.resources.Mammography_Centers_in_Sri_Lanka');
    }

   public function Videos()
   {
       return view('front.resources.Videos');
   }

   public function locations()
   {
       return view('front.locations');
   }

   public function contact()
   {
       return view('front.contact');
   }

   public function institutions_with_functioning_breast_clinics_in_sri_lanka()
   {
       return view('front.get_updated.institutions_with_functioning_breast_clinics_in_sri_lanka');
   }

   public function mammography_centers_in_sri_lanka_get_updated()
   {
       return view('front.get_updated.mammography_centers_in_sri_lanka');
   }

   public function checkAtHome(){
        return view('front.brest_checking.check_at_home');
   }

   /**
    * Manage Patient Profile
    */

   public function patientProfile(){

        $user_id = Auth::user()->id;
        //echo $user_id;

        $userDetails = User::where('id',$user_id)->first();
        $patientDetails = Patient::where('user_id',$user_id)->first();
        $patientBookingDetails = PatientBooking::where('patient_id',$patientDetails->id)->first();

        return view('front.profile.dashboard',compact('userDetails','patientDetails','patientBookingDetails'));

   }

   public function bookAppointment(){

   }




}
