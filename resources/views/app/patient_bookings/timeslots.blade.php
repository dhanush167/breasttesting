<label class="label label-required" for="booking_slot">
    Booking Slot
</label>
<select id="booking_slot" name="booking_slot" class="form-control select3" required>
    <option>Please select the time slot</option>
    @foreach ($allSlots as $label)
        <option value="{{ $label }}"
        @if (count($getBookedSlots) > 0)
            @foreach ($getBookedSlots as $bslots )
                {{ $label == $bslots->booking_slot ? 'disabled' : '' }}
            @endforeach
        @endif>{{ $label }}
        </option>
    @endforeach

</select>

<script>
     $(function() {
        $('.select3').select2()
    });
</script>
