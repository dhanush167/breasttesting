<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PatientProblem;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatientProblemPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the patientProblem can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list patientproblems');
    }

    /**
     * Determine whether the patientProblem can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientProblem  $model
     * @return mixed
     */
    public function view(User $user, PatientProblem $model)
    {
        return $user->hasPermissionTo('view patientproblems');
    }

    /**
     * Determine whether the patientProblem can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create patientproblems');
    }

    /**
     * Determine whether the patientProblem can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientProblem  $model
     * @return mixed
     */
    public function update(User $user, PatientProblem $model)
    {
        return $user->hasPermissionTo('update patientproblems');
    }

    /**
     * Determine whether the patientProblem can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientProblem  $model
     * @return mixed
     */
    public function delete(User $user, PatientProblem $model)
    {
        return $user->hasPermissionTo('delete patientproblems');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientProblem  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete patientproblems');
    }

    /**
     * Determine whether the patientProblem can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientProblem  $model
     * @return mixed
     */
    public function restore(User $user, PatientProblem $model)
    {
        return false;
    }

    /**
     * Determine whether the patientProblem can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientProblem  $model
     * @return mixed
     */
    public function forceDelete(User $user, PatientProblem $model)
    {
        return false;
    }
}
