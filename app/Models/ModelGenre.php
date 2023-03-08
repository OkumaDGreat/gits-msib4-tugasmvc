<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelGenre extends Model
{
    use HasFactory;

    protected $table = 'tb_genre';
    protected $primaryKey = 'id_genre';

    public $timestamps = true;
}