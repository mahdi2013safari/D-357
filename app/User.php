<?php

namespace App;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use SoftDeletes;

    use HasRoles,Notifiable;
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $guarded = ['confirm_password'];

    public function doctor()
    {
        return $this->hasOne('doctors','id_doctor','id');
    }

    public function getUsername()
    {
        return Auth::user()->firsname;
    }


}
