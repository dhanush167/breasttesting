<?php

namespace App\Policies;

use App\Models\User;
use App\Models\BookingSetting;
use Illuminate\Auth\Access\HandlesAuthorization;

class BookingSettingPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the bookingSetting can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list bookingsettings');
    }

    /**
     * Determine whether the bookingSetting can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\BookingSetting  $model
     * @return mixed
     */
    public function view(User $user, BookingSetting $model)
    {
        return $user->hasPermissionTo('view bookingsettings');
    }

    /**
     * Determine whether the bookingSetting can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create bookingsettings');
    }

    /**
     * Determine whether the bookingSetting can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\BookingSetting  $model
     * @return mixed
     */
    public function update(User $user, BookingSetting $model)
    {
        return $user->hasPermissionTo('update bookingsettings');
    }

    /**
     * Determine whether the bookingSetting can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\BookingSetting  $model
     * @return mixed
     */
    public function delete(User $user, BookingSetting $model)
    {
        return $user->hasPermissionTo('delete bookingsettings');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\BookingSetting  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete bookingsettings');
    }

    /**
     * Determine whether the bookingSetting can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\BookingSetting  $model
     * @return mixed
     */
    public function restore(User $user, BookingSetting $model)
    {
        return false;
    }

    /**
     * Determine whether the bookingSetting can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\BookingSetting  $model
     * @return mixed
     */
    public function forceDelete(User $user, BookingSetting $model)
    {
        return false;
    }
}
