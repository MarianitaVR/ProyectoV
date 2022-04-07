<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaProducto extends Model
{
    protected $table = 'categoriaproducto';
    protected $primaryKey = 'idCategoria';
    protected $fillable = ['descripcioProducto'];
    public $timestamps = false;
}
