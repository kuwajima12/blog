<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{


    
    protected $table = 'comments'; // テーブル名を指定
    protected $fillable = ['content', 'created_at','articles_id','user_id'];
    public $timestamps = false;
}
