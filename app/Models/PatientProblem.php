<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PatientProblem extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['patient_id', 'common_problem_id'];

    protected $searchableFields = ['*'];

    protected $table = 'patient_problems';

    public function commonProblem()
    {
        return $this->belongsTo(CommonProblem::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
