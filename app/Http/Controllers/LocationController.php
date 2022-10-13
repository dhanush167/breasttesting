<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\LocationStoreRequest;
use App\Http\Requests\LocationUpdateRequest;

class LocationController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Location::class);

        $search = $request->get('search', '');

        $locations = Location::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.locations.index', compact('locations', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Location::class);

        return view('app.locations.create');
    }

    /**
     * @param \App\Http\Requests\LocationStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(LocationStoreRequest $request)
    {
        $this->authorize('create', Location::class);

        $validated = $request->validated();
        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('public');
        }

        $location = Location::create($validated);

        return redirect()
            ->route('locations.edit', $location)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Location $location
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Location $location)
    {
        $this->authorize('view', $location);

        return view('app.locations.show', compact('location'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Location $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Location $location)
    {
        $this->authorize('update', $location);

        return view('app.locations.edit', compact('location'));
    }

    /**
     * @param \App\Http\Requests\LocationUpdateRequest $request
     * @param \App\Models\Location $location
     * @return \Illuminate\Http\Response
     */
    public function update(LocationUpdateRequest $request, Location $location)
    {
        $this->authorize('update', $location);

        $validated = $request->validated();
        if ($request->hasFile('logo')) {
            if ($location->logo) {
                Storage::delete($location->logo);
            }

            $validated['logo'] = $request->file('logo')->store('public');
        }

        $location->update($validated);

        return redirect()
            ->route('locations.edit', $location)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Location $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Location $location)
    {
        $this->authorize('delete', $location);

        if ($location->logo) {
            Storage::delete($location->logo);
        }

        $location->delete();

        return redirect()
            ->route('locations.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
