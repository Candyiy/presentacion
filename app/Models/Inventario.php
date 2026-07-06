<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table = 'inventarios';
    protected $primaryKey = 'id';
    protected $fillable = ['stockdisponible', 'producto_id'];
    use HasFactory;

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
