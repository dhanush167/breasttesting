<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PatientManagmentPlan;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatientManagmentPlanPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the patientManagmentPlan can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list patientmanagmentplans');
    }

    /**
     * Determine whether the patientManagmentPlan can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientManagmentPlan  $model
     * @return mixed
     */
    public function view(User $user, PatientManagmentPlan $model)
    {
        return $user->hasPermissionTo('view patientmanagmentplans');
    }

    /**
     * Determine whether the patientManagmentPlan can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create patientmanagmentplans');
    }

    /**
     * Determine whether the patientManagmentPlan can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientManagmentPlan  $model
     * @return mixed
     */
    public function update(User $user, PatientManagmentPlan $model)
    {
        return $user->hasPermissionTo('update patientmanagmentplans');
    }

    /**
     * Determine whether the patientManagmentPlan can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientManagmentPlan  $model
     * @return mixed
     */
    public function delete(User $user, PatientManagmentPlan $model)
    {
        return $user->hasPermissionTo('delete patientmanagmentplans');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientManagmentPlan  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete patientmanagmentplans');
    }

    /**
     * Determine whether the patientManagmentPlan can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientManagmentPlan  $model
     * @return mixed
     */
    public function restore(User $user, PatientManagmentPlan $model)
    {
        return false;
    }

    /**
     * Determine whether the patientManagmentPlan can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientManagmentPlan  $model
     * @return mixed
     */
    public function forceDelete(User $user, PatientManagmentPlan $model)
    {
        return false;
    }
}
