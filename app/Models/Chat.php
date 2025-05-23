<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;



    protected $table = 'chats';

    protected $fillable = [
        'building_id',
        'name',
        'created_at',
        'updated_at',
    ];

}
