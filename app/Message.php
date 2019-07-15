<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //buat array kosong untuk menanmpung pesan
    protected $fillable = [
        'from','to','text',
    ];
}
