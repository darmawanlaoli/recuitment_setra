<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class RecruitmentTestOption extends Model
{

    protected $fillable = [
        'question_id',
        'option_text',
        'is_correct',
        'media_type',
        'media_path',
    ];

    public function test()
    {
        return $this->belongsTo(RecruitmentTestType::class);
    }

    public function answers()
    {
        return $this->hasMany(RecruitmentAnswer::class, 'attempt_id');
    }
}
