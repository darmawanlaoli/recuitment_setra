<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecruitmentInterviewAnswer extends Model
{
    protected $fillable = [
        'application_id',
        'question_id',
        'answer_value',
        'explanation'
    ];
}
