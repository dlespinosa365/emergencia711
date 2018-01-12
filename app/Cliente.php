<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Cliente extends Model
{
    protected $table = 'clientes';




    protected $fillable = ['nombres', 'apellidos', 'email', 'cedula', 'fecha_nac', 'solar', 'manzana', 'calles', 'balniario', 'celular', 'emergencia', 'sexo'];

    public function getFullNameAttribute()
    {
        return ucfirst($this->nombres) . ' ' . ucfirst($this->apellidos);
    }

    public function getEdadAttribute()
    {
        $now = Carbon::now();
        $nac = Carbon::parse($this->fechaNac);
        return $now->diffInYears($nac);
    }

    public function getFullDireccionAttribute()
    {
        return $this->calles . ' Manzana ' . $this->manzana . ' Solar ' . $this->solar . ' Entre ' . $this->entrecalles . ' Balniario ' . $this->balniario;
    }

    public function getfechaNacAttribute($value)
    {
        $date = \Carbon\Carbon::parse($value);
        return $date->toDateString();
    }

    public function getcreatedAtAttribute($value)
    {
        $date = \Carbon\Carbon::parse($value);
        return $date->toDateString();
    }

    public function gethoraAttribute($value)
    {
        $date = \Carbon\Carbon::parse($value);
        return $date->toTimeString();
    }

    public function getsexoAttribute($value)
    {

        return $value ? 'Masculino' : 'Femenino';
    }

    public function getemergenciaAttribute($value)
    {
        return strtoupper($value);
    }


    /**
     * Scope a query to only include search users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $value)
    {
        return $query
            ->where('nombres', 'LIKE', '%' . $value . '%')
            ->orWhere('apellidos', 'LIKE', '%' . $value . '%')
            ->orWhere('cedula', 'LIKE', '%' . $value . '%');
    }


    /**
     * Scope a query to only include search users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */


    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }

    public function historias()
    {
        return $this->hasMany(HistoriaClinica::class);
    }

    public function getnHistoriasAttribute()
    {
        return HistoriaClinica::where('cliente_id', $this->id)->latest()->take(5)->get();

    }

    public function getnPagosAttribute()
    {
        return Pago::where('cliente_id', $this->id)->latest()->take(5)->get();

    }


}
