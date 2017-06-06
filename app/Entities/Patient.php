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
        'name', 'last_name_1','last_name_2','email','identification_card','gender'
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
                    ->withPivot(['value','completed_date'])
                    ->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function levels()
    {
        return $this->belongsToMany(Level::class,'patient_level','patient_id','level_id')
            ->withPivot(['diagnosis_date'])
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
