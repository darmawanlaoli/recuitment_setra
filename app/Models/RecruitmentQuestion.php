<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecruitmentQuestion extends Model
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
        return $this->hasMany(RecruitmentAnswer::class, 'question_id');
    }
}
