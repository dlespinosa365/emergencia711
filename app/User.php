<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    const ROLE_NUERSE = 'nurse';
    const ROLE_ENFERMERA = 'enfermera';
    const ROLE_DOCTOR = 'doctor';
    const ROLE_DIRECTIVO = 'directivo';
    const ROLE_CONTABLE = 'contable';
    const ROLE_ADMIN = 'admin';
    const ROLE_CHOFER = 'chofer';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'active', 'role', 'lastname'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFullNameAttribute()
    {
        return ucfirst($this->name) . ' ' . ucfirst($this->lastname);
    }

    public function historia($role)
    {
        return $this->belongsTo(HistoriaClinica::class, 'id_' . $role);
    }

    public function getroleAttribute($value)
    {
        return strtoupper($value);
    }

    public function getactiveAttribute($value)
    {
        return $value ? 'Activo' : 'No Activo';
    }


}
