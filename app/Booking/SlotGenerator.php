<?php

namespace App\Booking;
use App\Models\BookingSetting;
use Carbon\CarbonPeriod;

class SlotGenerator{

    public function bookingSlots($location_id){

        $bookingDetails = BookingSetting::where('location_id',$location_id)->where('status',1)->firstOrFail();

        $dayStartTime = $bookingDetails->day_start_time;
        $dayEndTime = $bookingDetails->day_end_time;
        $slotDuration = $bookingDetails->slot_duration.' minutes';

        $period = new CarbonPeriod($dayStartTime, $slotDuration, $dayEndTime); // for create use 24 hours format later change format
            $slots = [];
            foreach($period as $item){
                array_push($slots,$item->format("h:i A"));
            }

            return $slots;

    }


}

?>
