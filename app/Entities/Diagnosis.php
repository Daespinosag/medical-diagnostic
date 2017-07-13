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
        'type_diagnosis_id','name', 'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function typeDiagnosis()
    {
        return $this->belongsTo(TypeDiagnosis::class,'type_diagnosis_id');
    }

    public function levels()
    {
        return $this->hasMany(Level::class,'diagnosis_id','id');
    }
}
