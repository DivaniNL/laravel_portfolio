<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Werk extends Model
{
    protected $fillable = ['title','created_at_', 'description', 'url', 'file'];
}
