<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PatientRiskFactor;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatientRiskFactorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the patientRiskFactor can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list patientriskfactors');
    }

    /**
     * Determine whether the patientRiskFactor can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientRiskFactor  $model
     * @return mixed
     */
    public function view(User $user, PatientRiskFactor $model)
    {
        return $user->hasPermissionTo('view patientriskfactors');
    }

    /**
     * Determine whether the patientRiskFactor can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create patientriskfactors');
    }

    /**
     * Determine whether the patientRiskFactor can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientRiskFactor  $model
     * @return mixed
     */
    public function update(User $user, PatientRiskFactor $model)
    {
        return $user->hasPermissionTo('update patientriskfactors');
    }

    /**
     * Determine whether the patientRiskFactor can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientRiskFactor  $model
     * @return mixed
     */
    public function delete(User $user, PatientRiskFactor $model)
    {
        return $user->hasPermissionTo('delete patientriskfactors');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientRiskFactor  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete patientriskfactors');
    }

    /**
     * Determine whether the patientRiskFactor can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientRiskFactor  $model
     * @return mixed
     */
    public function restore(User $user, PatientRiskFactor $model)
    {
        return false;
    }

    /**
     * Determine whether the patientRiskFactor can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientRiskFactor  $model
     * @return mixed
     */
    public function forceDelete(User $user, PatientRiskFactor $model)
    {
        return false;
    }
}
