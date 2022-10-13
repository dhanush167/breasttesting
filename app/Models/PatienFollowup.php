<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PatienFollowup extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'patient_id',
        'followup_reason_id',
        'other_comments',
        'date',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'patien_followups';

    protected $casts = [
        'date' => 'date',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function followupReason()
    {
        return $this->belongsTo(FollowupReason::class);
    }
}
