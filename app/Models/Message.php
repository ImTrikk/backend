<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'messages';

    // make primary key
    protected $primaryKey = 'message_id';

    // for the tables to be inputted with data
    protected $fillable = [
        'message',
        'sender',
        // 'user_id',
    ];
}
