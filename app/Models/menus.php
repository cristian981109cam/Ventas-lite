<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    use HasFactory;

    public $table = 'menus';
    protected $fillabel = ['id', 'id_parent', 'created_at', 'updated_at'];
}
