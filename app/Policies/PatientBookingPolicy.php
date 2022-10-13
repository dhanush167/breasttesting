<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PatientBooking;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatientBookingPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the patientBooking can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list patientbookings');
    }

    /**
     * Determine whether the patientBooking can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientBooking  $model
     * @return mixed
     */
    public function view(User $user, PatientBooking $model)
    {
        return $user->hasPermissionTo('view patientbookings');
    }

    /**
     * Determine whether the patientBooking can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create patientbookings');
    }

    /**
     * Determine whether the patientBooking can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientBooking  $model
     * @return mixed
     */
    public function update(User $user, PatientBooking $model)
    {
        return $user->hasPermissionTo('update patientbookings');
    }

    /**
     * Determine whether the patientBooking can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientBooking  $model
     * @return mixed
     */
    public function delete(User $user, PatientBooking $model)
    {
        return $user->hasPermissionTo('delete patientbookings');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientBooking  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete patientbookings');
    }

    /**
     * Determine whether the patientBooking can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientBooking  $model
     * @return mixed
     */
    public function restore(User $user, PatientBooking $model)
    {
        return false;
    }

    /**
     * Determine whether the patientBooking can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientBooking  $model
     * @return mixed
     */
    public function forceDelete(User $user, PatientBooking $model)
    {
        return false;
    }
}
