<?php
// app/Models/Portofolio.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolio';
    protected $primaryKey = 'id_portofolio';
    protected $fillable = ['judul', 'deskripsi', 'url', 'gambar'];
}
