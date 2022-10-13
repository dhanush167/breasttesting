<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UltraSoundScanFactor;
use Illuminate\Auth\Access\HandlesAuthorization;

class UltraSoundScanFactorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the ultraSoundScanFactor can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list ultrasoundscanfactors');
    }

    /**
     * Determine whether the ultraSoundScanFactor can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\UltraSoundScanFactor  $model
     * @return mixed
     */
    public function view(User $user, UltraSoundScanFactor $model)
    {
        return $user->hasPermissionTo('view ultrasoundscanfactors');
    }

    /**
     * Determine whether the ultraSoundScanFactor can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create ultrasoundscanfactors');
    }

    /**
     * Determine whether the ultraSoundScanFactor can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\UltraSoundScanFactor  $model
     * @return mixed
     */
    public function update(User $user, UltraSoundScanFactor $model)
    {
        return $user->hasPermissionTo('update ultrasoundscanfactors');
    }

    /**
     * Determine whether the ultraSoundScanFactor can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\UltraSoundScanFactor  $model
     * @return mixed
     */
    public function delete(User $user, UltraSoundScanFactor $model)
    {
        return $user->hasPermissionTo('delete ultrasoundscanfactors');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\UltraSoundScanFactor  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete ultrasoundscanfactors');
    }

    /**
     * Determine whether the ultraSoundScanFactor can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\UltraSoundScanFactor  $model
     * @return mixed
     */
    public function restore(User $user, UltraSoundScanFactor $model)
    {
        return false;
    }

    /**
     * Determine whether the ultraSoundScanFactor can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\UltraSoundScanFactor  $model
     * @return mixed
     */
    public function forceDelete(User $user, UltraSoundScanFactor $model)
    {
        return false;
    }
}
