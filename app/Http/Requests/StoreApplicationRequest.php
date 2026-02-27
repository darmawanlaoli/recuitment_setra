<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // Data pribadi
            'name' => 'nullable|string|max:255',
            'nama_panggilan' => 'nullable|string|max:100',
            'tempat_lahir' => 'nullable|string|max:100',
            'tanggal_lahir' => 'nullable|date',
            'agama' => 'nullable|string|max:50',
            'jenis_kelamin' => 'nullable|string|max:20',
            'kewarganegaraan' => 'nullable|string|max:50',
            'status_perkawinan' => 'nullable|string|max:50',
            'golongan_darah' => 'nullable|string|max:5',

            // Identitas
            'nomor_ktp' => 'nullable|string|max:30',
            'file_ktp' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',

            'nomor_kk' => 'nullable|string|max:30',
            'file_kk' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',

            'nomor_sim' => 'nullable|string|max:30',
            'file_sim' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'jenis_sim' => 'nullable|string|max:50',
            'jenis_sim_sebelumnya' => 'nullable|string|max:50',
            'tanggal_berlaku_sim' => 'nullable|date',

            'nomor_npwp' => 'nullable|string|max:30',
            'file_npwp' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',

            'nomor_rekening' => 'nullable|string|max:50',
            'file_rekening' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',

            'file_skck' => 'nullable|file|mimes:pdf|max:4096',

            // Alamat & Kontak
            'alamat_ktp' => 'nullable|string',
            'alamat_domisili' => 'nullable|string',
            'status_tempat_tinggal' => 'nullable|string|max:100',
            'nomor_telepon' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:150',

            // Pendidikan
            'pendidikan' => 'nullable|string|max:100',
            'jurusan' => 'nullable|string|max:100',
            'universitas' => 'nullable|string|max:150',
            'tahun_lulus' => 'nullable|digits:4|integer|min:1900|max:' . date('Y'),
            'ipk' => 'nullable|numeric',

            'file_ijazah' => 'nullable|file|mimes:pdf|max:4096',
            'file_transkrip' => 'nullable|file|mimes:pdf|max:4096',

            // Kendaraan
            'jenis_kendaraan' => 'nullable|string|max:50',
            'merk_kendaraan' => 'nullable|string|max:100',
            'kepemilikan_kendaraan' => 'nullable|string|max:100',

            'bersedia_luar_kota' => 'nullable|string|max:20',
            'bersedia_penempatan' => 'nullable|string|max:150',

            // Data Ibu
            'nama_ibu_kandung' => 'nullable|string|max:150',
            'tempat_lahir_ibu_kandung' => 'nullable|string|max:100',
            'tanggal_lahir_ibu_kandung' => 'nullable|date',
            'pekerjaan_ibu' => 'nullable|string|max:100',
            'jabatan_ibu' => 'nullable|string|max:100',
            'perusahaan_ibu' => 'nullable|string|max:150',

            // Referensi
            'nama_referensi' => 'nullable|string|max:150',
            'alamat_referensi' => 'nullable|string',
            'nomor_telepon_referensi' => 'nullable|string|max:20',
            'pekerjaan_referensi' => 'nullable|string|max:100',
            'hubungan_dengan_referensi' => 'nullable|string|max:100',

            // Sosial Media
            'instagram' => 'nullable|string|max:150',
            'facebook' => 'nullable|string|max:150',
            'tiktok' => 'nullable|string|max:150',
            'linkedin' => 'nullable|string|max:150',

            // Tambahan
            'hobby' => 'nullable|string',
            'skill' => 'nullable|string',
            'pengalaman_organisasi' => 'nullable|string',
            'file_paklaring' => 'nullable|file|mimes:pdf|max:4096',
            'pengalaman_kerja' => 'nullable|string',
            'alasan_melamar' => 'nullable|string',
            'gaji_diharapkan' => 'nullable|numeric|min:0',

            // File validation
            'file_ktp' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'file_kk' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'file_sim' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'file_npwp' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'file_ijazah' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:4096',
            'file_transkrip' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:4096',
            'file_paklaring' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:4096',
            'file_skck' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:4096',
        ];
    }
}
