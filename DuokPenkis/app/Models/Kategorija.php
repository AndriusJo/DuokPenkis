<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorija extends Model
{
    use HasFactory;
    protected $table = 'kategorija';
    public $timestamps = false;
    protected $fillable = [
        'pavadinimas',
        'fk_Kategorija_pavadinimas'
    ];
}
