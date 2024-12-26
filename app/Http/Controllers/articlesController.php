<?php

namespace App\Http\Controllers;
use App\Models\Articles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use Illuminate\Pagination\Paginator;

class articlesController extends Controller
{
    public function index()
    {     //   $products = Article::paginate(10);
   //     return view('articles.index', compact('products'));

        return view('articles.index');
    }



    //記事詳細ページidを取得して
    //該当idの値を返している
    public function shousai($id)
    {    
        $post = Articles::where('id', $id)->firstOrFail();

        return view('articles.shousai', compact('post'));

    }




    //表示だけ
    public function show()
    {
        return view('articles.create');
    }




    public function post(Request $request)
    {
        //タイトル
        $title = $request->input('title');
        //記事の内容
        $content = $request->input('content');

        //バリデート
        $request->validate([
            'title' =>  'max:20',  // t1はメールアドレス
            'content' => 'required|min:10',  // t2はパスワード（6文字以上）
        ]);
        // modelに書き込み
        articles::create([
            'title' => $title,
            'content' => $content,
            'created_at'=> now()
        ]);


        return "投稿しました";
    }



    //ログアウト
    public function logout()
    {

        Auth::logout();  // ユーザーをログアウト

        // すべてのセッションデータを削除
        session()->flush();  

        return redirect()->route('login.index'); 
    }



public function Pagenation(Request $request)
{

    $products = Article::paginate(10);

    // ビューに記事データを渡す
    return view('articles.index', compact('products'));



}




}
