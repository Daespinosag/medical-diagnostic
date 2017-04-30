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
        'gender', 'formula', 'response',
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
    public function diagnosis()
    {
        return $this->hasMany(Diagnosis::class,'id','diagnosis_id');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function variables()
    {
        return $this->belongsToMany(Variable::class,'criterion','level_id','variable_id')
                    ->withPivot(['value_1','value_2','operator_comparison','unit','gender'])
                    ->withTimestamps();
    }
}
