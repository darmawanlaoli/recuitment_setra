<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    protected $fillable = ['id', 'province_id', 'name', 'is_active'];

    public $incrementing = false;
    protected $keyType = 'int';

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
