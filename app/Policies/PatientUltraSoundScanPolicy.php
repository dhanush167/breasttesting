<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PatientUltraSoundScan;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatientUltraSoundScanPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the patientUltraSoundScan can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list patientultrasoundscans');
    }

    /**
     * Determine whether the patientUltraSoundScan can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientUltraSoundScan  $model
     * @return mixed
     */
    public function view(User $user, PatientUltraSoundScan $model)
    {
        return $user->hasPermissionTo('view patientultrasoundscans');
    }

    /**
     * Determine whether the patientUltraSoundScan can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create patientultrasoundscans');
    }

    /**
     * Determine whether the patientUltraSoundScan can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientUltraSoundScan  $model
     * @return mixed
     */
    public function update(User $user, PatientUltraSoundScan $model)
    {
        return $user->hasPermissionTo('update patientultrasoundscans');
    }

    /**
     * Determine whether the patientUltraSoundScan can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientUltraSoundScan  $model
     * @return mixed
     */
    public function delete(User $user, PatientUltraSoundScan $model)
    {
        return $user->hasPermissionTo('delete patientultrasoundscans');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientUltraSoundScan  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete patientultrasoundscans');
    }

    /**
     * Determine whether the patientUltraSoundScan can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientUltraSoundScan  $model
     * @return mixed
     */
    public function restore(User $user, PatientUltraSoundScan $model)
    {
        return false;
    }

    /**
     * Determine whether the patientUltraSoundScan can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientUltraSoundScan  $model
     * @return mixed
     */
    public function forceDelete(User $user, PatientUltraSoundScan $model)
    {
        return false;
    }
}
