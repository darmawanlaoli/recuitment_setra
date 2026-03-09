<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'tb_provinces';
    protected $fillable = ['code', 'name', 'is_active'];

    public $incrementing = false;
    protected $keyType = 'int';

    public function regencies()
    {
        return $this->hasMany(Regency::class);
    }
}
