<?php namespace App\Models;
 use CodeIgniter\Model;
 class KabupatenModel extends Model
 {
    protected $table      = 'kabupaten';   // nama tabel
    protected $primaryKey = 'id_kabupaten';  // primary key tabel
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $useAutoIncrement = true;
    // nama semua field pada tabel
    protected $allowedFields = ['id_kabupaten', 'kode_kabupaten', 'nama_kabupaten', 'koordinat', 
'jumlah_penduduk', 'luas_wilayah'];
    protected $skipValidation     = true;
 }
 ?>