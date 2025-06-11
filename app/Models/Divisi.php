<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table = 'divisi';
    protected $fillable = ['kode', 'nama', 'manager'];

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'divisi_id');
    }
}
?>
