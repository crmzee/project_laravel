<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    // nama tabel
    protected $table = 'category_product';

    // primary key tabel
    protected $primaryKey = 'id_category';

    // kolom yang TIDAK boleh diisi massal
    protected $guarded = ['id_category'];
}