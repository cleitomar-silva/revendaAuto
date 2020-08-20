<?php

namespace App\Policies;

use App\Chamado;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChamadoTestePolicy
{
    use HandlesAuthorization;


    public function before($user, $ability)
    {
        if($user->eAdmin())
        {
            return true;
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Chamado  $chamado
     * @return mixed
     */
    public function view(User $user, Chamado $chamado)
    {
        return $user->id == $chamado->user_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Chamado  $chamado
     * @return mixed
     */
    public function update(User $user, Chamado $chamado)
    {
        return $user->id == $chamado->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Chamado  $chamado
     * @return mixed
     */
    public function delete(User $user, Chamado $chamado)
    {
        return $user->id == $chamado->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Chamado  $chamado
     * @return mixed
     */
    public function restore(User $user, Chamado $chamado)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Chamado  $chamado
     * @return mixed
     */
    public function forceDelete(User $user, Chamado $chamado)
    {
        //
    }
}
