<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostLastVersion extends Model
{
    use HasFactory;

    protected $table = 'post_v1';
}