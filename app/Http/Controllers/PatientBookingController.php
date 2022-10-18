<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\PatientBooking;
use App\Http\Requests\PatientBookingStoreRequest;
use App\Http\Requests\PatientBookingUpdateRequest;
use App\Booking\SlotGenerator;
use App\Models\BookingSetting;

class PatientBookingController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', PatientBooking::class);

        $search = $request->get('search', '');

        $patientBookings = PatientBooking::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

         return view(
            'app.patient_bookings.index',
            compact('patientBookings', 'search')
        );


    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', PatientBooking::class);

        $locations = Location::pluck('name', 'id');
        $patients = Patient::pluck('reg_no', 'id');

        return view(
            'app.patient_bookings.create',
            compact('locations', 'patients')
        );
    }

    /**
     * @param \App\Http\Requests\PatientBookingStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientBookingStoreRequest $request)
    {
        $this->authorize('create', PatientBooking::class);

        $validated = $request->validated();
        /* $validated['booking_slot'] = json_encode($request->booking_slot); */

        $patientBooking = PatientBooking::create($validated);

        return redirect()
            ->route('patient-bookings.edit', $patientBooking)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientBooking $patientBooking
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, PatientBooking $patientBooking)
    {
        $this->authorize('view', $patientBooking);

        return view('app.patient_bookings.show', compact('patientBooking'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientBooking $patientBooking
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, PatientBooking $patientBooking)
    {
        $this->authorize('update', $patientBooking);

        $locations = Location::pluck('name', 'id');
        $patients = Patient::pluck('reg_no', 'id');

        return view(
            'app.patient_bookings.edit',
            compact('patientBooking', 'locations', 'patients')
        );
    }

    /**
     * @param \App\Http\Requests\PatientBookingUpdateRequest $request
     * @param \App\Models\PatientBooking $patientBooking
     * @return \Illuminate\Http\Response
     */
    public function update(
        PatientBookingUpdateRequest $request,
        PatientBooking $patientBooking
    ) {
        $this->authorize('update', $patientBooking);

        $validated = $request->validated();
        /* $validated['booking_slot'] = json_encode($request->booking_slot); */

        $patientBooking->update($validated);

        return redirect()
            ->route('patient-bookings.edit', $patientBooking)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientBooking $patientBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, PatientBooking $patientBooking)
    {
        $this->authorize('delete', $patientBooking);

        $patientBooking->delete();

        return redirect()
            ->route('patient-bookings.index')
            ->withSuccess(__('crud.common.removed'));
    }

    // load hollidays for specific location

   public function loadHolydays(Request $request){

        $location_id = $request->location_id;
        $arr_values = array();
        $bookingSettings = BookingSetting::where("location_id",$location_id)->where('status',1)->first();
        $arr_values['holidays'] = $bookingSettings->holidays;
        $arr_values['year'] = $bookingSettings->year;
        $arr_values['not_working'] = $bookingSettings->weekly_working_days;
        //var_dump($arr_values);
        return json_encode($arr_values);

    }

    public function loadAvailableBookingSlots(Request $request){

        $slotGenerator = new SlotGenerator();

        $bookedSlots = array();
        $allSlots = array();



        $dateSelected = $request->dateSelected;
        $location_id = $request->location_id;
        $allSlots = $slotGenerator->bookingSlots($location_id);
        //array_push($allSlots,$slotGenerator->bookingSlots($location_id));
        $getBookedSlots = PatientBooking::where('location_id',$location_id)->where('booking_date',$dateSelected)->where('status','1')->get();

        foreach($getBookedSlots as $booked){
             array_push($bookedSlots,$booked->booking_slot);
        }

        $avilableSlots = array_diff($allSlots, $bookedSlots);

        return json_encode($bookedSlots);
    }

}
