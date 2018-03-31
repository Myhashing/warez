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

    public function roles(){

        return $this->belongsToMany(Role::class);

    }

    public function assignRole($role){

        return $this->roles()->save(
            Role::whereName($role)->firstOrFail()
        );
    }
    public function hasRole($role){

        if(is_string($role)){
            return $this->roles->contains('name',$role);
        }
        return !! $role->intersect($this->roles)->count();
    }

    public function hasAccess(array $permissions) : bool
    {


        foreach ($this->roles as $role){
            if ($role->hasAccess($permissions)){
                return true;
            }

            return false;
        }
    }

    public function inRole(string $roleSlug)
    {
        return $this->roles()->where('lable', $roleSlug)->count() == 1;
    }

}
