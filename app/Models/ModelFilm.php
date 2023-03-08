<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelFilm extends Model
{
    use HasFactory;

    protected $table = 'tb_film';
    protected $primaryKey = 'id_film';

    public $timestamps = true;
}