<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'table_artikel';
    // protected $fillable= ['judul','body','gambar','categories_id'];

    protected $guarded = ['id'];


    public function Kategori()
    {
        return $this->belongsTo(\App\Categori::class, 'categories_id', 'id');
    }

    public function getRouteKeyName()
    {
        return 'judul';
    }
}
