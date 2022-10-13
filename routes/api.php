<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\PatientController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Api\ChecklistController;
use App\Http\Controllers\Api\CancerTypeController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\UserPatientsController;
use App\Http\Controllers\Api\CommonProblemController;
use App\Http\Controllers\Api\FamilyHistoryController;
use App\Http\Controllers\Api\BookingSettingController;
use App\Http\Controllers\Api\FollowupReasonController;
use App\Http\Controllers\Api\PatienFollowupController;
use App\Http\Controllers\Api\PatientBookingController;
use App\Http\Controllers\Api\PatientProblemController;
use App\Http\Controllers\Api\ExaminationFactorController;
use App\Http\Controllers\Api\PatientRiskFactorController;
use App\Http\Controllers\Api\PatientExaminationController;
use App\Http\Controllers\Api\PatientInvestigationController;
use App\Http\Controllers\Api\PatientManagmentPlanController;
use App\Http\Controllers\Api\UltraSoundScanFactorController;
use App\Http\Controllers\Api\PatientUltraSoundScanController;
use App\Http\Controllers\Api\PatientPatientBookingsController;
use App\Http\Controllers\Api\PatientFamilyHistoriesController;
use App\Http\Controllers\Api\PatientPatientProblemsController;
use App\Http\Controllers\Api\PatientPatienFollowupsController;
use App\Http\Controllers\Api\LocationBookingSettingsController;
use App\Http\Controllers\Api\LocationPatientBookingsController;
use App\Http\Controllers\Api\CancerTypeFamilyHistoriesController;
use App\Http\Controllers\Api\PatientPatientRiskFactorsController;
use App\Http\Controllers\Api\PatientPatientExaminationsController;
use App\Http\Controllers\Api\CommonProblemPatientProblemsController;
use App\Http\Controllers\Api\PatientPatientInvestigationsController;
use App\Http\Controllers\Api\PatientPatientManagmentPlansController;
use App\Http\Controllers\Api\FollowupReasonPatienFollowupsController;
use App\Http\Controllers\Api\PatientPatientUltraSoundScansController;
use App\Http\Controllers\Api\ChecklistPatientManagmentPlansController;
use App\Http\Controllers\Api\ExaminationFactorPatientExaminationsController;
use App\Http\Controllers\Api\UltraSoundScanFactorPatientUltraSoundScansController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'login'])->name('api.login');

Route::middleware('auth:sanctum')
    ->get('/user', function (Request $request) {
        return $request->user();
    })
    ->name('api.user');

Route::name('api.')
    ->middleware('auth:sanctum')
    ->group(function () {
        Route::apiResource('roles', RoleController::class);
        Route::apiResource('permissions', PermissionController::class);

        Route::apiResource('cancer-types', CancerTypeController::class);

        // CancerType Family Histories
        Route::get('/cancer-types/{cancerType}/family-histories', [
            CancerTypeFamilyHistoriesController::class,
            'index',
        ])->name('cancer-types.family-histories.index');
        Route::post('/cancer-types/{cancerType}/family-histories', [
            CancerTypeFamilyHistoriesController::class,
            'store',
        ])->name('cancer-types.family-histories.store');

        Route::apiResource('locations', LocationController::class);

        // Location Booking Settings
        Route::get('/locations/{location}/booking-settings', [
            LocationBookingSettingsController::class,
            'index',
        ])->name('locations.booking-settings.index');
        Route::post('/locations/{location}/booking-settings', [
            LocationBookingSettingsController::class,
            'store',
        ])->name('locations.booking-settings.store');

        // Location Patient Bookings
        Route::get('/locations/{location}/patient-bookings', [
            LocationPatientBookingsController::class,
            'index',
        ])->name('locations.patient-bookings.index');
        Route::post('/locations/{location}/patient-bookings', [
            LocationPatientBookingsController::class,
            'store',
        ])->name('locations.patient-bookings.store');

        Route::apiResource('booking-settings', BookingSettingController::class);

        Route::apiResource('checklists', ChecklistController::class);

        // Checklist Patient Managment Plans
        Route::get('/checklists/{checklist}/patient-managment-plans', [
            ChecklistPatientManagmentPlansController::class,
            'index',
        ])->name('checklists.patient-managment-plans.index');
        Route::post('/checklists/{checklist}/patient-managment-plans', [
            ChecklistPatientManagmentPlansController::class,
            'store',
        ])->name('checklists.patient-managment-plans.store');

        Route::apiResource('common-problems', CommonProblemController::class);

        // CommonProblem Patient Problems
        Route::get('/common-problems/{commonProblem}/patient-problems', [
            CommonProblemPatientProblemsController::class,
            'index',
        ])->name('common-problems.patient-problems.index');
        Route::post('/common-problems/{commonProblem}/patient-problems', [
            CommonProblemPatientProblemsController::class,
            'store',
        ])->name('common-problems.patient-problems.store');

        Route::apiResource(
            'examination-factors',
            ExaminationFactorController::class
        );

        // ExaminationFactor Patient Examinations
        Route::get(
            '/examination-factors/{examinationFactor}/patient-examinations',
            [ExaminationFactorPatientExaminationsController::class, 'index']
        )->name('examination-factors.patient-examinations.index');
        Route::post(
            '/examination-factors/{examinationFactor}/patient-examinations',
            [ExaminationFactorPatientExaminationsController::class, 'store']
        )->name('examination-factors.patient-examinations.store');

        Route::apiResource('family-histories', FamilyHistoryController::class);

        Route::apiResource('followup-reasons', FollowupReasonController::class);

        // FollowupReason Patien Followups
        Route::get('/followup-reasons/{followupReason}/patien-followups', [
            FollowupReasonPatienFollowupsController::class,
            'index',
        ])->name('followup-reasons.patien-followups.index');
        Route::post('/followup-reasons/{followupReason}/patien-followups', [
            FollowupReasonPatienFollowupsController::class,
            'store',
        ])->name('followup-reasons.patien-followups.store');

        Route::apiResource('patien-followups', PatienFollowupController::class);

        Route::apiResource('patients', PatientController::class);

        // Patient Patient Bookings
        Route::get('/patients/{patient}/patient-bookings', [
            PatientPatientBookingsController::class,
            'index',
        ])->name('patients.patient-bookings.index');
        Route::post('/patients/{patient}/patient-bookings', [
            PatientPatientBookingsController::class,
            'store',
        ])->name('patients.patient-bookings.store');

        // Patient Family Histories
        Route::get('/patients/{patient}/family-histories', [
            PatientFamilyHistoriesController::class,
            'index',
        ])->name('patients.family-histories.index');
        Route::post('/patients/{patient}/family-histories', [
            PatientFamilyHistoriesController::class,
            'store',
        ])->name('patients.family-histories.store');

        // Patient Patient Examinations
        Route::get('/patients/{patient}/patient-examinations', [
            PatientPatientExaminationsController::class,
            'index',
        ])->name('patients.patient-examinations.index');
        Route::post('/patients/{patient}/patient-examinations', [
            PatientPatientExaminationsController::class,
            'store',
        ])->name('patients.patient-examinations.store');

        // Patient Patient Investigations
        Route::get('/patients/{patient}/patient-investigations', [
            PatientPatientInvestigationsController::class,
            'index',
        ])->name('patients.patient-investigations.index');
        Route::post('/patients/{patient}/patient-investigations', [
            PatientPatientInvestigationsController::class,
            'store',
        ])->name('patients.patient-investigations.store');

        // Patient Patient Risk Factors
        Route::get('/patients/{patient}/patient-risk-factors', [
            PatientPatientRiskFactorsController::class,
            'index',
        ])->name('patients.patient-risk-factors.index');
        Route::post('/patients/{patient}/patient-risk-factors', [
            PatientPatientRiskFactorsController::class,
            'store',
        ])->name('patients.patient-risk-factors.store');

        // Patient Patient Ultra Sound Scans
        Route::get('/patients/{patient}/patient-ultra-sound-scans', [
            PatientPatientUltraSoundScansController::class,
            'index',
        ])->name('patients.patient-ultra-sound-scans.index');
        Route::post('/patients/{patient}/patient-ultra-sound-scans', [
            PatientPatientUltraSoundScansController::class,
            'store',
        ])->name('patients.patient-ultra-sound-scans.store');

        // Patient Patient Problems
        Route::get('/patients/{patient}/patient-problems', [
            PatientPatientProblemsController::class,
            'index',
        ])->name('patients.patient-problems.index');
        Route::post('/patients/{patient}/patient-problems', [
            PatientPatientProblemsController::class,
            'store',
        ])->name('patients.patient-problems.store');

        // Patient Patient Managment Plans
        Route::get('/patients/{patient}/patient-managment-plans', [
            PatientPatientManagmentPlansController::class,
            'index',
        ])->name('patients.patient-managment-plans.index');
        Route::post('/patients/{patient}/patient-managment-plans', [
            PatientPatientManagmentPlansController::class,
            'store',
        ])->name('patients.patient-managment-plans.store');

        // Patient Patien Followups
        Route::get('/patients/{patient}/patien-followups', [
            PatientPatienFollowupsController::class,
            'index',
        ])->name('patients.patien-followups.index');
        Route::post('/patients/{patient}/patien-followups', [
            PatientPatienFollowupsController::class,
            'store',
        ])->name('patients.patien-followups.store');

        Route::apiResource('patient-bookings', PatientBookingController::class);

        Route::apiResource(
            'patient-examinations',
            PatientExaminationController::class
        );

        Route::apiResource(
            'patient-investigations',
            PatientInvestigationController::class
        );

        Route::apiResource(
            'patient-managment-plans',
            PatientManagmentPlanController::class
        );

        Route::apiResource('patient-problems', PatientProblemController::class);

        Route::apiResource(
            'patient-risk-factors',
            PatientRiskFactorController::class
        );

        Route::apiResource(
            'patient-ultra-sound-scans',
            PatientUltraSoundScanController::class
        );

        Route::apiResource(
            'ultra-sound-scan-factors',
            UltraSoundScanFactorController::class
        );

        // UltraSoundScanFactor Patient Ultra Sound Scans
        Route::get(
            '/ultra-sound-scan-factors/{ultraSoundScanFactor}/patient-ultra-sound-scans',
            [
                UltraSoundScanFactorPatientUltraSoundScansController::class,
                'index',
            ]
        )->name('ultra-sound-scan-factors.patient-ultra-sound-scans.index');
        Route::post(
            '/ultra-sound-scan-factors/{ultraSoundScanFactor}/patient-ultra-sound-scans',
            [
                UltraSoundScanFactorPatientUltraSoundScansController::class,
                'store',
            ]
        )->name('ultra-sound-scan-factors.patient-ultra-sound-scans.store');

        Route::apiResource('users', UserController::class);

        // User Patients
        Route::get('/users/{user}/patients', [
            UserPatientsController::class,
            'index',
        ])->name('users.patients.index');
        Route::post('/users/{user}/patients', [
            UserPatientsController::class,
            'store',
        ])->name('users.patients.store');
    });
