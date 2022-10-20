<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\CancerTypeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\CommonProblemController;
use App\Http\Controllers\FamilyHistoryController;
use App\Http\Controllers\BookingSettingController;
use App\Http\Controllers\FollowupReasonController;
use App\Http\Controllers\PatienFollowupController;
use App\Http\Controllers\PatientBookingController;
use App\Http\Controllers\PatientProblemController;
use App\Http\Controllers\ExaminationFactorController;
use App\Http\Controllers\PatientRiskFactorController;
use App\Http\Controllers\PatientExaminationController;
use App\Http\Controllers\PatientInvestigationController;
use App\Http\Controllers\PatientManagmentPlanController;
use App\Http\Controllers\UltraSoundScanFactorController;
use App\Http\Controllers\PatientUltraSoundScanController;

use App\Http\Controllers\LandingPageController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();



Route::prefix('/admin')
    ->middleware(['auth', 'user-access:admin'])
    ->group(function () {
        Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);

        Route::resource('cancer-types', CancerTypeController::class);
        Route::resource('locations', LocationController::class);
        Route::resource('booking-settings', BookingSettingController::class);
        Route::resource('checklists', ChecklistController::class);
        Route::resource('common-problems', CommonProblemController::class);
        Route::resource(
            'examination-factors',
            ExaminationFactorController::class
        );
        Route::resource('family-histories', FamilyHistoryController::class);
        Route::resource('followup-reasons', FollowupReasonController::class);
        Route::resource('patien-followups', PatienFollowupController::class);
        Route::resource('patients', PatientController::class);
        Route::resource('patient-bookings', PatientBookingController::class);
        Route::resource(
            'patient-examinations',
            PatientExaminationController::class
        );
        Route::resource(
            'patient-investigations',
            PatientInvestigationController::class
        );
        Route::resource(
            'patient-managment-plans',
            PatientManagmentPlanController::class
        );
        Route::resource('patient-problems', PatientProblemController::class);
        Route::resource(
            'patient-risk-factors',
            PatientRiskFactorController::class
        );
        Route::resource(
            'patient-ultra-sound-scans',
            PatientUltraSoundScanController::class
        );
        Route::resource(
            'ultra-sound-scan-factors',
            UltraSoundScanFactorController::class
        );
        Route::resource('users', UserController::class);

        Route::post('/getLocationHolidays',[PatientBookingController::class, 'loadHolydays'])->name('location.hollidays');

        Route::post('/getAvailableSlots',[PatientBookingController::class, 'loadAvailableBookingSlots'])->name('availableslots');

    });


    Route::middleware(['auth', 'user-access:patient'])->group(function () {
        Route::get('/client-feedback',[LandingPageController::class,'client_feedback'])->name('client_feedback');
        /*resources*/
        Route::get('/Institutions-with-functioning-Breast-Clinics', [LandingPageController::class,'Institutions_with_functioning_Breast_Clinics'])->name('resources.institutions_with_functioning');
        Route::get('/Mammography-Centers-in-Sri-lanka', [LandingPageController::class,'Mammography_Centers_in_Sri_lanka'])->name('resources.Mammography_Centers_in_Sri_lanka');
        Route::get('/Videos',[LandingPageController::class,'Videos'])->name('resources.Videos');
        Route::get('/profile',[LandingPageController::class,'patientProfile'])->name('patient.profile');

        /** Start my brest check */
        Route::get('/check-at-home',[LandingPageController::class,'checkAtHome'])->name('brestcheck.at_home');
    });



    /*home page*/
Route::get('/',[LandingPageController::class,'index'])->name('front');
Route::get('/what-happens-at-your-screen', [LandingPageController::class,'what_happens_at_your_screen'])->name('what_happens_at_your_screen');
Route::get('/breast-cancer-and-screening', [LandingPageController::class,'breast_cancer_and_screening'])->name('breast_cancer_and_screening');
Route::get('/special-request', [LandingPageController::class,'special_request'])->name('special_request');

Route::get('/get-involved', [LandingPageController::class,'get_involved'])->name('get_involved');


/*What Happens at Your Breast Screening*/
Route::get('/before-screening',[LandingPageController::class,'before_screening'])->name('before_screening');
Route::get('/should-i-be-screened',[LandingPageController::class,'should_i_be_screened'])->name('should_i_be_screened');
Route::get('/the-cope-of-our-program',[LandingPageController::class,'the_scope_of_our_program'])->name('the_scope_of_our_program');
Route::get('/at-screening',[LandingPageController::class,'at_screening'])->name('at_screening');
Route::get('/after-screening',[LandingPageController::class,'after_screening'])->name('after_screening');

Route::get('/your-stories',[LandingPageController::class,'your_stories'])->name('your_stories');

/*Breast Cancer and Screening*/
Route::get('/your-screening-choice',[LandingPageController::class,'your_screening_choice'])->name('your_screening_choice');
Route::get('/measuring-the-success-of-our-breast-screening-program',[LandingPageController::class,'measuring_the_success_of_our_breast_screening_program'])->name('measuring_the_success_of_our_breast_screening_program');
Route::get('/your-breast-cancer-risk',[LandingPageController::class,'your_best_cancer_risk'])->name('your_breast_cancer_risk');
Route::get('/reducing-your-risk',[LandingPageController::class,'reducing_your_risk'])->name('reducing_your_risk');
Route::get('/signs-and-symptoms-of-breast-cancer',[LandingPageController::class,'signs_and_symptoms_of_breast_cancer'])->name('signs_and_symptoms_of_breast_cancer');

/*Special Request */
Route::get('/group-bookings',[LandingPageController::class,'group_bookings'])->name('group_bookings');
Route::get('/In-your-workplace',[LandingPageController::class,'In_your_workplace'])->name('In_your_workplace');

/*get involved*/
Route::get('/volunteers',[LandingPageController::class,'volunteers'])->name('volunteers');
Route::get('/consumer-network',[LandingPageController::class,'consumer_network'])->name('consumer_network');

/*news*/
Route::get('/news', [LandingPageController::class,'news'])->name('news');


/*about us*/
Route::get('/our-programme',[LandingPageController::class,'our_programme'])->name('our_programme');
Route::get('/our-purpose',[LandingPageController::class,'our_purpose'])->name('our_purpose');
Route::get('/cancer-early-detection-centre',[LandingPageController::class,'cancer_early_detection_centre'])->name('cancer_early_detection_centre');
Route::get('/governance',[LandingPageController::class,'governance'])->name('governance');



/*locations*/
Route::get('/locations',[LandingPageController::class,'locations'])->name('locations');
Route::get('/contact',[LandingPageController::class,'contact'])->name('contact');

/*get updated*/
/* Route::get('/institutions-with-functioning-breast-clinics-in-sri-lanka',[LandingPageController::class,'institutions_with_functioning_breast_clinics_in_sri_lanka'])->name('institutions_with_functioning_breast_clinics_in_sri_lanka');
Route::get('/mammography-centers-in-sri-lanka',[LandingPageController::class,'mammography_centers_in_sri_lanka_get_updated'])->name('mammography_centers_in_sri_lanka_get_updated'); */

