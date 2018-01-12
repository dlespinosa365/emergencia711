<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pago extends Model
{
    protected $table = 'pagos';

    protected $dates = [
        'created_at',
        'updated_at',
    ];


    protected $fillable = ['cliente_id', 'monto', 'cobrado', 'tipo'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function getcreatedAtAttribute($value)
    {
        $date = Carbon::parse($value);
        //return $value;
        return $date->diffForHumans();
    }

    public function getAgoAttribute()
    {
        $date = Carbon::parse($this->create_at);
        return $date->diffForHumans();
    }

    public function gettipoAttribute($value)
    {
        return strtoupper($value);
    }

    public function scopeSearch($query, $value)
    {
        return $query
            ->join('clientes', 'clientes.id', '=', 'pagos.cliente_id')
            ->where('clientes.cedula', 'LIKE', '%' . $value . '%')
            ->orwhere('clientes.nombres', 'LIKE', '%' . $value . '%')
            ->orWhere('clientes.apellidos', 'LIKE', '%' . $value . '%')
            ->orWhere('cobrado', 'LIKE', '%' . $value . '%');
    }

    /**
     * @return array
     */


}
