<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'address', 'contact_no', 'logo', 'email'];

    protected $searchableFields = ['*'];

    public function bookingSettings()
    {
        return $this->hasMany(BookingSetting::class);
    }

    public function patientBookings()
    {
        return $this->hasMany(PatientBooking::class);
    }
}
