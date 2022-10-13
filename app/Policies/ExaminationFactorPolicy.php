<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ExaminationFactor;
use Illuminate\Auth\Access\HandlesAuthorization;

class ExaminationFactorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the examinationFactor can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list examinationfactors');
    }

    /**
     * Determine whether the examinationFactor can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ExaminationFactor  $model
     * @return mixed
     */
    public function view(User $user, ExaminationFactor $model)
    {
        return $user->hasPermissionTo('view examinationfactors');
    }

    /**
     * Determine whether the examinationFactor can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create examinationfactors');
    }

    /**
     * Determine whether the examinationFactor can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ExaminationFactor  $model
     * @return mixed
     */
    public function update(User $user, ExaminationFactor $model)
    {
        return $user->hasPermissionTo('update examinationfactors');
    }

    /**
     * Determine whether the examinationFactor can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ExaminationFactor  $model
     * @return mixed
     */
    public function delete(User $user, ExaminationFactor $model)
    {
        return $user->hasPermissionTo('delete examinationfactors');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ExaminationFactor  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete examinationfactors');
    }

    /**
     * Determine whether the examinationFactor can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ExaminationFactor  $model
     * @return mixed
     */
    public function restore(User $user, ExaminationFactor $model)
    {
        return false;
    }

    /**
     * Determine whether the examinationFactor can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ExaminationFactor  $model
     * @return mixed
     */
    public function forceDelete(User $user, ExaminationFactor $model)
    {
        return false;
    }
}
