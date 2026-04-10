<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class RecruitmentTestSession extends Model
{

    protected $fillable = [
        'applicant_id',
        'test_type_id',
        'start_time',
        'end_time',
        'total_score',
        'result_status',
        'status',
    ];

    public function test()
    {
        return $this->belongsTo(RecruitmentTestType::class);
    }

    public function answers()
    {
        return $this->hasMany(RecruitmentTestAnswer::class, 'attempt_id');
    }
}
