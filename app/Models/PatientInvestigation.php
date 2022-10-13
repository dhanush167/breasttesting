<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PatientInvestigation extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['patient_id', 'pap', 'hpv_dna'];

    protected $searchableFields = ['*'];

    protected $table = 'patient_investigations';

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
