<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;


class Rol extends Model
{
    protected $table = 'rol';

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class,'user_rol','rol_id','user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function typesDiagnostics()
    {
        return $this->belongsToMany(TypeDiagnosis::class,'type_diagnosis_rol','rol_id','type_diagnosis_id');
    }
}
