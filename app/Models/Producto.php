<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'descripcion','categoria', 'precio', 'stock']; 

    use HasFactory;

    public function inventario()
    {
        return $this->hasOne(Inventario::class);
    }
}
