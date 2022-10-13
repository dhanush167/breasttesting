<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PatientUltraSoundScan extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['patient_id', 'ultra_sound_scan_factor_id', 'value'];

    protected $searchableFields = ['*'];

    protected $table = 'patient_ultra_sound_scans';

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function ultraSoundScanFactor()
    {
        return $this->belongsTo(UltraSoundScanFactor::class);
    }
}
