<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{
    use HasFactory;
    protected $fillable = ['categoria_id', 'number_ddd','number','name','content', 'status'];
    protected $guarded = ['id', 'created_at', 'update_at'];
}
