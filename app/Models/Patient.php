<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'user_id',
        'reg_no',
        'reg_date',
        'age',
        'gender',
        'marital_status',
        'children',
        'address',
        'reason_for_visit',
        'pmhx',
        'pshx',
        'pre_pap_date',
        'pre_pap_result',
        'pre_uss_date',
        'pre_uss_result',
        'pre_hpv_date',
        'pre_hpv_result',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'reg_date' => 'date',
        'children' => 'boolean',
        'pre_pap_date' => 'date',
        'pre_uss_date' => 'date',
        'pre_hpv_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function patientBookings()
    {
        return $this->hasMany(PatientBooking::class);
    }

    public function familyHistories()
    {
        return $this->hasMany(FamilyHistory::class);
    }

    public function patientExaminations()
    {
        return $this->hasMany(PatientExamination::class);
    }

    public function patientInvestigations()
    {
        return $this->hasMany(PatientInvestigation::class);
    }

    public function patientRiskFactors()
    {
        return $this->hasMany(PatientRiskFactor::class);
    }

    public function patientUltraSoundScans()
    {
        return $this->hasMany(PatientUltraSoundScan::class);
    }

    public function patientProblems()
    {
        return $this->hasMany(PatientProblem::class);
    }

    public function patientManagmentPlans()
    {
        return $this->hasMany(PatientManagmentPlan::class);
    }

    public function patienFollowups()
    {
        return $this->hasMany(PatienFollowup::class);
    }
}
