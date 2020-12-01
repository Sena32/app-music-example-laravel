<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $fillable = ['name','track','vocalist','price','file','imgTumbnail'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'musics';
}
