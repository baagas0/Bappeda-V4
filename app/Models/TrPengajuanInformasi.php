<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class TrPengajuanInformasi extends Model  
{

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tr_pengajuan_informasi';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_pemohon', 'ktp_pemohon', 'alamat_pemohon', 'telepon_pemohon', 'email_pemohon', 'informasi_pemohon', 'alasan_pemohon', 'nama_pengguna', 'ktp_pengguna', 'alamat_pengguna', 'telepon_pengguna', 'email_pengguna', 'alasan_pengguna', 'cara_memperoleh_1', 'cara_memperoleh_2', 'cara_memperoleh_3', 'cara_memperoleh_4', 'format_bahan_1', 'format_bahan_2', 'cara_mengirim_1', 'cara_mengirim_2', 'cara_mengirim_3', 'status', 'view', 'keterangan', 'tanggal_pengajuan', 'tanggal_penyerahan', 'petugas', 'password', 'kuisioner', 'user_id', 'role_id', 'created_at', 'updated_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = ['status' => 'boolean', 'view' => 'boolean', 'kuisioner' => 'boolean'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['tanggal_pengajuan', 'tanggal_penyerahan', 'created_at', 'updated_at'];

}
