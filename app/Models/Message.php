<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    // 追記して想定外のデータが代入されるのを防ぎ、なおかつ、一気にデータを代入することが可能にする。
    protected $fillable = ['content', 'title']; 
}
