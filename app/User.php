<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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



    public function roles() {

        return $this->belongsToMany(Role::class);
        
    }


    public function isAdmin(){


        foreach ($this->roles()->get() as $role)
        {
            if ($role->type == 'admin')
            {
                return true;
            }
        }

        return false;
    }


    public function admin() {

        $user_id = Auth::user()->id;

        $user = User::find($user_id);


        foreach ($user->roles()->get() as $role)
        {
            if ($role->type == 'admin')
            {
                return true;
            }
        }

        return false;
    }





}
