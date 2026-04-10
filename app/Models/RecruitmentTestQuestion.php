<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecruitmentTestQuestion extends Model
{
    protected $fillable = [
        'question_text',
        'question_type',
        'is_required',
        'sort_order',
        'is_active'
    ];

    public function answers()
    {
        return $this->hasMany(RecruitmentTestAnswer::class, 'question_id');
    }

    public function options()
    {
        return $this->hasMany(RecruitmentTestOption::class, 'question_id');
    }
}
