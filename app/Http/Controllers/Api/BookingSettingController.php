<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\BookingSetting;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookingSettingResource;
use App\Http\Resources\BookingSettingCollection;
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
            ->paginate();

        return new BookingSettingCollection($bookingSettings);
    }

    /**
     * @param \App\Http\Requests\BookingSettingStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingSettingStoreRequest $request)
    {
        $this->authorize('create', BookingSetting::class);

        $validated = $request->validated();

        $bookingSetting = BookingSetting::create($validated);

        return new BookingSettingResource($bookingSetting);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BookingSetting $bookingSetting
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, BookingSetting $bookingSetting)
    {
        $this->authorize('view', $bookingSetting);

        return new BookingSettingResource($bookingSetting);
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

        $bookingSetting->update($validated);

        return new BookingSettingResource($bookingSetting);
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

        return response()->noContent();
    }
}
