<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    protected $table = 'patient';

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'identification_card'
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
    public function variables()
    {
        return $this->belongsToMany(Variable::class,'variable_patient','patient_id','variable_id')
                    ->withPivot(['value','date_completed'])
                    ->withTimestamps();
    }
}
