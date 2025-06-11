<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Models;

class JatahCuti extends Models
{
    protected $table = 'jatah_cuti';
    protected $fillable = ['tahun', 'jumlah', 'nip'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'nip', 'nip');
    }
}

        ?>
