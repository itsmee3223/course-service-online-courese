<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leeson extends Model
{
    protected $table = 'lessons';

    protected $fillable = [
        'name', 'video', 'chaper_id'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ];
}
