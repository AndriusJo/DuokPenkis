<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preke extends Model
{
    use HasFactory;

    protected $table = 'Preke';
    public $timestamps = false;
    protected $fillable =[
            'pavadinimas',
            'kaina',
            'aprasymas',
            'kiekis',
            'dydis',
            'prekiniszenklas',
            'spalva',
            'lytis',
            'bukle',
            'medziagos_tipas',
            'nuotauka'
    ];
}
