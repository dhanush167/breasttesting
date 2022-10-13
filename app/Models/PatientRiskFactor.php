<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PatientRiskFactor extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'patient_id',
        'age_of_menarche',
        'lrmp',
        'ocp',
        'hrt',
        'age_of_menopause',
        'post_menopausal_bleeding',
        'betel_chewing',
        'areca_nut',
        'smoking',
        'alcohol',
        'other_risk_factor',
        'sexual_hx',
        'occupation_radiation',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'patient_risk_factors';

    protected $casts = [
        'occupation_radiation' => 'boolean',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
