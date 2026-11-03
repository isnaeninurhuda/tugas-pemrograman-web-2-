<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
#[Fillable(['nama', 'brand', 'ukuran', 'warna', 'harga_beli', ])]
class Sepatu extends Model
{
    /** @use HasFactory<\Database\Factories\SepatuFactory> */
    use HasFactory;
}
