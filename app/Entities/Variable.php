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
        'name', 'json_name', 'calculated','calculation_operation', 'description'
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
                    ->withPivot(['name','value_1','value_2','comparison_operator','unit'])
                    ->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function patients()
    {
        return $this->belongsToMany(Patient::class,'variable_patient','variable_id','patient_id')
                    ->withPivot(['value','completed_date'])
                    ->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class,'variable_patient','patient_id','user_id')
            ->withPivot(['diagnosis_date'])
            ->withTimestamps();
    }
}
