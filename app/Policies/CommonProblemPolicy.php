<?php

namespace App\Policies;

use App\Models\User;
use App\Models\CommonProblem;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommonProblemPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the commonProblem can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list commonproblems');
    }

    /**
     * Determine whether the commonProblem can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CommonProblem  $model
     * @return mixed
     */
    public function view(User $user, CommonProblem $model)
    {
        return $user->hasPermissionTo('view commonproblems');
    }

    /**
     * Determine whether the commonProblem can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create commonproblems');
    }

    /**
     * Determine whether the commonProblem can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CommonProblem  $model
     * @return mixed
     */
    public function update(User $user, CommonProblem $model)
    {
        return $user->hasPermissionTo('update commonproblems');
    }

    /**
     * Determine whether the commonProblem can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CommonProblem  $model
     * @return mixed
     */
    public function delete(User $user, CommonProblem $model)
    {
        return $user->hasPermissionTo('delete commonproblems');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CommonProblem  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete commonproblems');
    }

    /**
     * Determine whether the commonProblem can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CommonProblem  $model
     * @return mixed
     */
    public function restore(User $user, CommonProblem $model)
    {
        return false;
    }

    /**
     * Determine whether the commonProblem can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CommonProblem  $model
     * @return mixed
     */
    public function forceDelete(User $user, CommonProblem $model)
    {
        return false;
    }
}
