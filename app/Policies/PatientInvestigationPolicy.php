<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PatientInvestigation;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatientInvestigationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the patientInvestigation can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list patientinvestigations');
    }

    /**
     * Determine whether the patientInvestigation can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientInvestigation  $model
     * @return mixed
     */
    public function view(User $user, PatientInvestigation $model)
    {
        return $user->hasPermissionTo('view patientinvestigations');
    }

    /**
     * Determine whether the patientInvestigation can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create patientinvestigations');
    }

    /**
     * Determine whether the patientInvestigation can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientInvestigation  $model
     * @return mixed
     */
    public function update(User $user, PatientInvestigation $model)
    {
        return $user->hasPermissionTo('update patientinvestigations');
    }

    /**
     * Determine whether the patientInvestigation can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientInvestigation  $model
     * @return mixed
     */
    public function delete(User $user, PatientInvestigation $model)
    {
        return $user->hasPermissionTo('delete patientinvestigations');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientInvestigation  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete patientinvestigations');
    }

    /**
     * Determine whether the patientInvestigation can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientInvestigation  $model
     * @return mixed
     */
    public function restore(User $user, PatientInvestigation $model)
    {
        return false;
    }

    /**
     * Determine whether the patientInvestigation can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientInvestigation  $model
     * @return mixed
     */
    public function forceDelete(User $user, PatientInvestigation $model)
    {
        return false;
    }
}
