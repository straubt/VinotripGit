<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sejour extends Model
{
    use HasFactory;
    protected $table = "sejour";
    protected $primaryKey = "id_sejour";
    public $timestamps = false;
}
