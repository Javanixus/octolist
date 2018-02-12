<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function getNameAttribute($value){ // Accessor
        return ucwords($value);
    }

    public function getBioAttribute($value){ // Accessor
        return ucfirst($value);
    }

    public function setNameAttribute($value){ // Mutator
        return $this->attributes['name'] = strtolower($value);
    }

    public function setUsernameAttribute($value){ // Mutator
        return $this->attributes['username'] = strtolower($value);
    }

    public function setPasswordAttribute($value){ // Mutator
        return $this->attributes['password'] = bcrypt($value);
    }

    protected $fillable = [
        'role', 'username', 'password',
    ];

    protected $hidden = [
        'password',
    ];

//    Relation One to one | User has Info user
    public function InfoUser(){
        return$this->hasOne('App/StudentsInfo', 'id_students');
    }

    public function InfoTeacher(){
        return$this->hasOne('App/TeachersInfo', 'id_teachers');
    }

    public function InfoAdmin(){
        return$this->hasOne('App/AdminsInfo', 'id_students');
    }
}
