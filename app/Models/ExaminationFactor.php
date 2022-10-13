<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExaminationFactor extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'type'];

    protected $searchableFields = ['*'];

    protected $table = 'examination_factors';

    public function patientExaminations()
    {
        return $this->hasMany(PatientExamination::class);
    }
}
