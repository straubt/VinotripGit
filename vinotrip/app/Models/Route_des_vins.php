<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route_des_vins extends Model
{
    use HasFactory;
    protected $table = "route_des_vins";
    protected $primaryKey = "id_route_des_vins";
    public $timestamps = false;
}
