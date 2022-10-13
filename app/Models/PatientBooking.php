<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PatientBooking extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'patient_id',
        'location_id',
        'booking_date',
        'booking_slot',
        'booked_by',
        'booked_via',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'patient_bookings';

    protected $casts = [
        'booking_date' => 'date',
    ];

    

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
