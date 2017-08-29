<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'level';

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','diagnosis_id','name','gender', 'formula', 'response',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'updated_at','created_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function diagnosis()
    {
        return $this->belongsTo(Diagnosis::class,'diagnosis_id');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function variables()
    {
        return $this->belongsToMany(Variable::class,'criterion','level_id','variable_id')
                    ->withPivot(['id','name','value_1','value_2','comparison_operator','unit'])
                    ->withTimestamps();
    }

    public function patients()
    {
        return $this->belongsToMany(Patient::class,'patient_level','level_id','patient_id')
            ->withPivot(['diagnosis_date', 'medical_case'])
            ->withTimestamps();
    }
}
