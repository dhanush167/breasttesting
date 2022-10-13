<?php

namespace App\Policies;

use App\Models\User;
use App\Models\FollowupReason;
use Illuminate\Auth\Access\HandlesAuthorization;

class FollowupReasonPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the followupReason can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list followupreasons');
    }

    /**
     * Determine whether the followupReason can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\FollowupReason  $model
     * @return mixed
     */
    public function view(User $user, FollowupReason $model)
    {
        return $user->hasPermissionTo('view followupreasons');
    }

    /**
     * Determine whether the followupReason can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create followupreasons');
    }

    /**
     * Determine whether the followupReason can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\FollowupReason  $model
     * @return mixed
     */
    public function update(User $user, FollowupReason $model)
    {
        return $user->hasPermissionTo('update followupreasons');
    }

    /**
     * Determine whether the followupReason can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\FollowupReason  $model
     * @return mixed
     */
    public function delete(User $user, FollowupReason $model)
    {
        return $user->hasPermissionTo('delete followupreasons');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\FollowupReason  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete followupreasons');
    }

    /**
     * Determine whether the followupReason can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\FollowupReason  $model
     * @return mixed
     */
    public function restore(User $user, FollowupReason $model)
    {
        return false;
    }

    /**
     * Determine whether the followupReason can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\FollowupReason  $model
     * @return mixed
     */
    public function forceDelete(User $user, FollowupReason $model)
    {
        return false;
    }
}
