<?php

namespace App\Models\Resource;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillabel = ['id', 'id_parent', 'created_at', 'updated_at'];
}
