<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class TypeDiagnosis extends Model
{
    protected $table = 'type_diagnosis';

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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function diagnostics()
    {
        return $this->belongsTo(Diagnosis::class,'type_diagnosis_id');
    }
}
