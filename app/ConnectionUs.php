<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConnectionUs extends Model
{
    protected $table = 'connection_us';

    protected $fillable = [
       'img','title', 'content' ,'sort'
    ];

}
