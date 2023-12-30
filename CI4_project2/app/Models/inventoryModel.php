<?php

namespace App\Models;

use CodeIgniter\Model;

class InventoryModel extends Model
{
    protected $table = 'pakaian';
    protected $useTimestamps = false;
    protected $allowedFields = ['namapakaian', 'deskripsi', 'ukuran', 'warna', 'kode_pakaian', 'stok', 'hargapakaian'];
}
