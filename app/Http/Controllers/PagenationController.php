<?php

namespace App\Http\Controllers;
use App\Models\articles;
use App\Models\users;
use Illuminate\Http\Request;

class PagenationController extends Controller
{





    //ページネーション処理
    public function index()
    {


      //  $articles = articles::paginate(10);

        //$posts = articles::paginate(10);




                    // 記事をページネーション付きで取得
          $products = Articles::paginate(5);

        // ビューにデータを渡す
       // return view(coments.index', compact('posts'));

        // ビューに投稿データを渡す
        return view('articles.index', compact('products'));



    }



}
