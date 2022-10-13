<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookingSetting extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'location_id',
        'year',
        'weekly_working_days',
        'holidays',
        'day_start_time',
        'day_end_time',
        'slot_duration',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'booking_settings';

    protected $casts = [
        'status' => 'boolean',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
