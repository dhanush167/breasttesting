<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PatientManagmentPlan extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['checklist_id', 'patient_id', 'date'];

    protected $searchableFields = ['*'];

    protected $table = 'patient_managment_plans';

    protected $casts = [
        'date' => 'date',
    ];

    public function checklist()
    {
        return $this->belongsTo(Checklist::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
