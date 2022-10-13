<?php

namespace App\Policies;

use App\Models\User;
use App\Models\CancerType;
use Illuminate\Auth\Access\HandlesAuthorization;

class CancerTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the cancerType can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list cancertypes');
    }

    /**
     * Determine whether the cancerType can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CancerType  $model
     * @return mixed
     */
    public function view(User $user, CancerType $model)
    {
        return $user->hasPermissionTo('view cancertypes');
    }

    /**
     * Determine whether the cancerType can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create cancertypes');
    }

    /**
     * Determine whether the cancerType can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CancerType  $model
     * @return mixed
     */
    public function update(User $user, CancerType $model)
    {
        return $user->hasPermissionTo('update cancertypes');
    }

    /**
     * Determine whether the cancerType can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CancerType  $model
     * @return mixed
     */
    public function delete(User $user, CancerType $model)
    {
        return $user->hasPermissionTo('delete cancertypes');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CancerType  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete cancertypes');
    }

    /**
     * Determine whether the cancerType can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CancerType  $model
     * @return mixed
     */
    public function restore(User $user, CancerType $model)
    {
        return false;
    }

    /**
     * Determine whether the cancerType can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CancerType  $model
     * @return mixed
     */
    public function forceDelete(User $user, CancerType $model)
    {
        return false;
    }
}
