<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaSms extends Model
{
    use HasFactory;
    protected $fillable = ['title','keywords','description'];
    protected $guarded = ['id', 'created_at', 'update_at'];
}
