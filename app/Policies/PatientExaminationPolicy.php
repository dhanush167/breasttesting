<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PatientExamination;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatientExaminationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the patientExamination can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list patientexaminations');
    }

    /**
     * Determine whether the patientExamination can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientExamination  $model
     * @return mixed
     */
    public function view(User $user, PatientExamination $model)
    {
        return $user->hasPermissionTo('view patientexaminations');
    }

    /**
     * Determine whether the patientExamination can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create patientexaminations');
    }

    /**
     * Determine whether the patientExamination can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientExamination  $model
     * @return mixed
     */
    public function update(User $user, PatientExamination $model)
    {
        return $user->hasPermissionTo('update patientexaminations');
    }

    /**
     * Determine whether the patientExamination can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientExamination  $model
     * @return mixed
     */
    public function delete(User $user, PatientExamination $model)
    {
        return $user->hasPermissionTo('delete patientexaminations');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientExamination  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete patientexaminations');
    }

    /**
     * Determine whether the patientExamination can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientExamination  $model
     * @return mixed
     */
    public function restore(User $user, PatientExamination $model)
    {
        return false;
    }

    /**
     * Determine whether the patientExamination can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PatientExamination  $model
     * @return mixed
     */
    public function forceDelete(User $user, PatientExamination $model)
    {
        return false;
    }
}
