<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UsersController extends Controller
{



    public function index()
    {

        



        return view('user.index');
    }


    public function login(Request $request)
    {


         // バリデーションを追加
    $request->validate([
        't1' => 'required|email',  // t1はメールアドレス
        't2' => 'required|min:6',  // t2はパスワード（6文字以上）
    ]);

    $email = $request->input('t1');
    $password = $request->input('t2');

    // ユーザー情報を取得（メールアドレスで検索）
    $userinfo = Users::where('email', $email)->first();

    // ユーザーが存在するか確認
    if ($userinfo) {
        // 認証
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // ユーザー情報をセッションに保存
            session(['user' => $userinfo->email]);

            // 10件の記事を取得
            $articles = Articles::paginate(10);

            // 記事ページを表示
           return view('articles.index', ['products' => $articles]);

          //  return redirect()->route('articles.tes', ['products' => $articles]);

        } else {
            // パスワードが一致しない場合
            return back()->withErrors(['password' => 'パスワードが間違っています']);
        }
    } else {
        // メールアドレスが存在しない場合
        return back()->withErrors(['email' => 'そのメールアドレスのユーザーは存在しません']);
    }






        /*
        $email = $request->input('t1');
        $password = $request->input('t2');
    

        // ユーザー情報を取得
        //$userinfo = users::where('email', $email)->where('password', $password)->first();
        $userinfo = users::where('email', $email)->first();  // 最初の一致するユーザーを取得
        
        //認証
        if (Auth::attempt(['email' => $email, 'password' => $password])) {

            // ユーザー情報をセッションに保存
           session(['user' => $userinfo->email]);
    
            //10件取得
            $articles = articles::paginate(10);
    
            // 記事ページを表示
            return view('articles.index', ['products' => $articles]);
        } else {
            return "ログインできませんでした";
        }

        */
    }
}
