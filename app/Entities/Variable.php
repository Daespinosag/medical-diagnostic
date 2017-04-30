<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Variable extends Model
{
    protected $table = 'variable';

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'name_json', 'calculated','calculation_operation',
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
    public function levels()
    {
        return $this->belongsToMany(Level::class,'criterion','variable_id','level_id')
                    ->withPivot(['value_1','value_2','operator_comparison','unit','gender'])
                    ->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function patients()
    {
        return $this->belongsToMany(Patient::class,'variable_patient','variable_id','patient_id')
                    ->withPivot(['value','date_completed'])
                    ->withTimestamps();
    }
}
