<?php

namespace App\Policies;

use App\Models\Recruitment;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RecruitmentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Recruitment  $recruitment
     * @return mixed
     */
    public function view(User $user, Recruitment $recruitment)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Recruitment  $recruitment
     * @return mixed
     */
    public function update(User $user, Recruitment $recruitment)
    {
        return true;
        // return $user->id === $recruitment->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Recruitment  $recruitment
     * @return mixed
     */
    public function delete(User $user, Recruitment $recruitment)
    {
        return true;
        // return $user->id === $recruitment->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Recruitment  $recruitment
     * @return mixed
     */
    public function restore(User $user, Recruitment $recruitment)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Recruitment  $recruitment
     * @return mixed
     */
    public function forceDelete(User $user, Recruitment $recruitment)
    {
        return $user->id === $recruitment->user_id;
    }
}
