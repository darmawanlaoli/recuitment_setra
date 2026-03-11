<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class EmploymentHistory extends Model
{
    protected $table = 'recruitment_employment_histories';

    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'id_applicant',
        'nama_perusahaan',
        'posisi',
        'tanggal_gabung',
        'tanggal_akhir',
        'file_paklaring',
        'no_telepon_perusahaan',
    ];
}
