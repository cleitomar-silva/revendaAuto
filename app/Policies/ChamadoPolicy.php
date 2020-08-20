<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Chamado;

class ChamadoPolicy
{
    use HandlesAuthorization;

    

    public function verChamado($user, Chamado $chamado){
        //
    }

}
