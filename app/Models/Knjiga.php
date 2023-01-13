<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knjiga extends Model
{
    use HasFactory;

    protected $table = 'knjige';

    protected $fillable = ['naziv', 'autor', 'zanrID', 'proizvodjacID', 'cena'];
}
