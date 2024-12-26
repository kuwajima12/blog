<?php

namespace App\Http\Controllers\Api;
use App\Models\Articles;
use App\Models\comments;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{
    //


    //記事一覧
    public function getData()
    {
        $products = Articles::paginate(10);

        return response()->json([
            'data' => $products            // ページネーションされたデータ
        ]);
    }


    public function data()
    {


        

    }
    
    //記事詳細
    public function shousai($id)
    {

        $post = Articles::where('id', $id)->firstOrFail();

        return response()->json([
            'data' => $post            // ページネーションされたデータ
        ]);    
    }

    //記事のコメント
    public function comment($id)
    {
        $come = comments::where('articles_id', $id)->get();

        return response()->json([
            'data' => $come           
        ]);    
    }
}
