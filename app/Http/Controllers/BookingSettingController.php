<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\BookingSetting;
use App\Http\Requests\BookingSettingStoreRequest;
use App\Http\Requests\BookingSettingUpdateRequest;

class BookingSettingController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', BookingSetting::class);

        $search = $request->get('search', '');

        $bookingSettings = BookingSetting::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.booking_settings.index',
            compact('bookingSettings', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', BookingSetting::class);

        $locations = Location::pluck('name', 'id');

        return view('app.booking_settings.create', compact('locations'));
    }

    /**
     * @param \App\Http\Requests\BookingSettingStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingSettingStoreRequest $request)
    {
        $this->authorize('create', BookingSetting::class);

        $validated = $request->validated();
        //$validated['holidays'] = json_encode($request->holidays);

        $bookingSetting = BookingSetting::create($validated);

        return redirect()
            ->route('booking-settings.edit', $bookingSetting)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BookingSetting $bookingSetting
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, BookingSetting $bookingSetting)
    {
        $this->authorize('view', $bookingSetting);

        return view('app.booking_settings.show', compact('bookingSetting'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BookingSetting $bookingSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, BookingSetting $bookingSetting)
    {
        $this->authorize('update', $bookingSetting);

        $locations = Location::pluck('name', 'id');

        return view(
            'app.booking_settings.edit',
            compact('bookingSetting', 'locations')
        );
    }

    /**
     * @param \App\Http\Requests\BookingSettingUpdateRequest $request
     * @param \App\Models\BookingSetting $bookingSetting
     * @return \Illuminate\Http\Response
     */
    public function update(
        BookingSettingUpdateRequest $request,
        BookingSetting $bookingSetting
    ) {
        $this->authorize('update', $bookingSetting);

        $validated = $request->validated();

        //$validated['holidays'] = json_encode($request->holidays);

        $bookingSetting->update($validated);

        return redirect()
            ->route('booking-settings.edit', $bookingSetting)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BookingSetting $bookingSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, BookingSetting $bookingSetting)
    {
        $this->authorize('delete', $bookingSetting);

        $bookingSetting->delete();

        return redirect()
            ->route('booking-settings.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
