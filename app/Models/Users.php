<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    

    protected $table = 'users'; // テーブル名を指定
    protected $fillable = ['id','email', 'password']; // このカラムだけがマスアサインメント可能

    public $timestamps = false;  // タイムスタンプを無効にする



}
