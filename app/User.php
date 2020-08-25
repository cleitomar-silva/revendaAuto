<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function chamados(){
        return $this->belongsToMany('App\Chamado');
    }

    public function eAdmin()
    {
        return $this->id == 1;
    }

    public function papeis()
    {
        return $this->belongsToMany(Papel::class);
    }

    public function adicionaPapel($papel)
    {
        if(is_string($papel)){
            $papel = Papel::where('nome','=',$papel)->firstOrFail();
        }

        if($this->existePapel($papel)){
            return;
        }

        //metodo attach adiciona relacionamento
        return $this->papeis()->attach($papel);
    }

    public function existePapel($papel)
    {
        if(is_string($papel)){
            $papel = Papel::where('nome','=',$papel)->firstOrFail();
        }

        return (boolean) $this->papeis()->find($papel->id);

    }

    public function removePapel($papel)
    {
        if(is_string($papel)){
            $papel = Papel::where('nome','=',$papel)->firstOrFail();
        }

        //metodo detach retira relacionamento
        return $this->papeis()->detach($papel);
    }


}
