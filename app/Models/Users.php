<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    

    protected $table = 'users'; // テーブル名を指定
    protected $fillable = ['id','email', 'password']; // このカラムだけがマスアサインメント可能

    public $timestamps = false;  // タイムスタンプを無効にする

    public function articles()
    {
        return $this->hasMany(Article::class);  // 1人のユーザーが複数の記事を持つ
    }

}
