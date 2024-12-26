<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{

    protected $table = 'articles'; // テーブル名を指定
    protected $fillable = ['title', 'content', 'created_at']; // created_atをfillabeに追加
    public $timestamps = false;

}
