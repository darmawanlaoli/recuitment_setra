<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'id_user',
        'provinsi',
        'kabupaten',
        'area',
        'posisi',
        'status',
        'approved_by',
        'approved_at',
        'remark',
        'name',
        'nama_panggilan',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'jenis_kelamin',
        'kewarganegaraan',
        'status_perkawinan',
        'golongan_darah',
        'nomor_ktp',
        'file_ktp',
        'nomor_kk',
        'file_kk',
        'nomor_sim',
        'file_sim',
        'jenis_sim',
        'tanggal_berlaku_sim',
        'nomor_npwp',
        'file_npwp',
        'nomor_rekening',
        'file_rekening',
        'file_skck',
        'alamat_ktp',
        'alamat_domisili',
        'status_tempat_tinggal',
        'nomor_telepon',
        'email',
        'pendidikan',
        'jurusan',
        'universitas',
        'tahun_lulus',
        'ipk',
        'file_ijazah',
        'file_transkrip',
        'jenis_kendaraan',
        'merk_kendaraan',
        'kepemilikan_kendaraan',
        'bersedia_luar_kota',
        'bersedia_penempatan',
        'nama_ibu_kandung',
        'tempat_lahir_ibu_kandung',
        'tanggal_lahir_ibu_kandung',
        'pekerjaan_ibu',
        'jabatan_ibu',
        'perusahaan_ibu',
        'nama_referensi',
        'alamat_referensi',
        'nomor_telepon_referensi',
        'pekerjaan_referensi',
        'hubungan_dengan_referensi',
        'instagram',
        'facebook',
        'tiktok',
        'linkedin',
        'hobby',
        'skill',
        'pengalaman_organisasi',
        'file_paklaring',
        'pengalaman_kerja',
        'alasan_melamar',
        'gaji_diharapkan',


        'deleted_at',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function regency()
    {
        return $this->belongsTo(Regency::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
