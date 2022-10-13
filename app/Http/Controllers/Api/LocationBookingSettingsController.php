<?php

namespace App\Http\Controllers\Api;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookingSettingResource;
use App\Http\Resources\BookingSettingCollection;

class LocationBookingSettingsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Location $location
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Location $location)
    {
        $this->authorize('view', $location);

        $search = $request->get('search', '');

        $bookingSettings = $location
            ->bookingSettings()
            ->search($search)
            ->latest()
            ->paginate();

        return new BookingSettingCollection($bookingSettings);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Location $location
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Location $location)
    {
        $this->authorize('create', BookingSetting::class);

        $validated = $request->validate([
            'year' => ['required', 'numeric'],
            'holidays' => ['required', 'string'],
            'weekly_working_days' => ['required', 'string'],
            'day_start_time' => ['required', 'date_format:H:i:s'],
            'day_end_time' => ['required', 'date_format:H:i:s'],
            'slot_duration' => ['required', 'numeric'],
            'status' => ['required', 'boolean'],
        ]);

        $bookingSetting = $location->bookingSettings()->create($validated);

        return new BookingSettingResource($bookingSetting);
    }
}
