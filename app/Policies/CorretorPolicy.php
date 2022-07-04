<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Corretor;
use Illuminate\Auth\Access\HandlesAuthorization;

class CorretorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param  \App\Models\Corretor  $corretor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Corretor $corretor)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param  \App\Models\Corretor  $corretor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Corretor $corretor)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param  \App\Models\Corretor  $corretor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Corretor $corretor)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param  \App\Models\Corretor  $corretor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Corretor $corretor)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param  \App\Models\Corretor  $corretor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Corretor $corretor)
    {
        //
    }
}
