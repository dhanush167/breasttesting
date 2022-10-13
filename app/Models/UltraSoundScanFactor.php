<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UltraSoundScanFactor extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name'];

    protected $searchableFields = ['*'];

    protected $table = 'ultra_sound_scan_factors';

    public function patientUltraSoundScans()
    {
        return $this->hasMany(PatientUltraSoundScan::class);
    }
}
