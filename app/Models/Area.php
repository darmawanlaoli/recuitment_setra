<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'tb_area';

    public $incrementing = false;
    protected $keyType = 'int';
}
