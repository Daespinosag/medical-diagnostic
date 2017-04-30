<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    protected $table = 'diagnosis';

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function typeDiagnosis()
    {
        return $this->hasMany(TypeDiagnosis::class,'id','type_diagnosis_id');
    }

    public function levels()
    {
        return $this->belongsTo(Level::class,'diagnosis_id');
    }
}
