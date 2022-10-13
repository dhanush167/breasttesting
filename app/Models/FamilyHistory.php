<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FamilyHistory extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'patient_id',
        'cancer_type_id',
        'degree',
        'number_of_relative',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'family_histories';

    public function cancerType()
    {
        return $this->belongsTo(CancerType::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
