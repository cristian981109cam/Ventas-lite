<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menus extends Model
{
    use HasFactory;
    protected $fillabel = ['id', 'id_parent', 'created_at', 'updated_at'];
}
