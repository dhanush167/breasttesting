<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PatientExamination extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['patient_id', 'examination_factor_id', 'value'];

    protected $searchableFields = ['*'];

    protected $table = 'patient_examinations';

    public function examinationFactor()
    {
        return $this->belongsTo(ExaminationFactor::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
