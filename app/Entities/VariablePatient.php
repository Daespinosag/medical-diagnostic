<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class VariablePatient extends Model
{
    protected $table = 'variable_patient';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','patient_id','variable_id', 'case','user_id','value','completed_date'
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
    public function patient()
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function variable()
    {
        return $this->belongsTo(Variable::class,'variable_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
