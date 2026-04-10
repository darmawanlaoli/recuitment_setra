<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecruitmentTestAnswer extends Model
{
    protected $fillable = [
        'session_id',
        'question_id',
        'selected_option_id',
        'answer_text',
        'score',
    ];
}
