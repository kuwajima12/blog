<?php

namespace App\Http\Controllers;
use App\Models\comments;
use Illuminate\Http\Request;

class comentController extends Controller
{
    public function index($id)
    {
        $comments = Comments::where('articles_id', $id)->get();
        //レコードの件数を取得
        $commentsCount = $comments->count();

        return view("comments.index", compact('comments','commentsCount'));
    }


    public function shousai()
    {    

        return view('comments.create');
    }


    public function show($id)
    {
        // タイトルで記事を検索
      //  $article = comments::where('content', $id)->firstOrFail();
        
        return view('comments.create',compact('id'));
    }


    public function store(Request $request,$id)
    {
        //コメント内容
        $content = $request->input('content');

        //バリデーション
        $request->validate([
            'content' => 'required|min:10'
        ]);

        // 新しいPostレコードを作成して保存
        comments::create([
            'id' => $content,
            'content' => $content,
            'created_at'=>"2024-12-24",
            'articles_id'=>$id,
            'user_id'=>"2"
        ]);

        
        // コメント投稿後、リダイレクト
        return "投稿されました ";
    }
}
