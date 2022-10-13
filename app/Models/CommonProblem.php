<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommonProblem extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['short_code', 'problem'];

    protected $searchableFields = ['*'];

    protected $table = 'common_problems';

    public function patientProblems()
    {
        return $this->hasMany(PatientProblem::class);
    }
}
