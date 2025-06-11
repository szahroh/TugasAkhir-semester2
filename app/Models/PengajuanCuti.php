<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengajuanCuti extends Model
{
    protected $table = 'pengajuan_cuti';
    protected $fillable = [
        'tanggal_awal', 'tanggal_akhir', 'jumlah', 'ket', 'status', 'nip'
        ];

        public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'nip', 'nip');
    }
}


    ?>
