<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Checklist;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChecklistPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the checklist can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list checklists');
    }

    /**
     * Determine whether the checklist can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Checklist  $model
     * @return mixed
     */
    public function view(User $user, Checklist $model)
    {
        return $user->hasPermissionTo('view checklists');
    }

    /**
     * Determine whether the checklist can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create checklists');
    }

    /**
     * Determine whether the checklist can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Checklist  $model
     * @return mixed
     */
    public function update(User $user, Checklist $model)
    {
        return $user->hasPermissionTo('update checklists');
    }

    /**
     * Determine whether the checklist can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Checklist  $model
     * @return mixed
     */
    public function delete(User $user, Checklist $model)
    {
        return $user->hasPermissionTo('delete checklists');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Checklist  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete checklists');
    }

    /**
     * Determine whether the checklist can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Checklist  $model
     * @return mixed
     */
    public function restore(User $user, Checklist $model)
    {
        return false;
    }

    /**
     * Determine whether the checklist can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Checklist  $model
     * @return mixed
     */
    public function forceDelete(User $user, Checklist $model)
    {
        return false;
    }
}
