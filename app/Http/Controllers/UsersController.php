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
    't2' => 'required|min:6',   // t2はパスワード（6文字以上）
]);

$email = $request->input('t1');
$password = $request->input('t2');


// ユーザー情報を取得（メールアドレスで検索）
$userinfo = Users::where('email', $email)->first();


$user = new Users();
//$user->name = $userinfo->name;
$user->email = $userinfo->email;


// ユーザーが存在しない場合
if (!$userinfo) {
    return back()->withErrors(['email' => 'そのメールアドレスのユーザーは存在しません']);
}
$remember = $request->has('remember') ? true : false;

// パスワードが一致するか確認
if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
    // ユーザー情報をセッションに保存
    session(['user' => $userinfo->email]);

    // 10件の記事を取得
    $articles = Articles::paginate(10);

    // 記事ページを表示
    return view('articles.index', ['products' => $articles,'userid' => $user->id]);
} else {
    // パスワードが一致しない場合
    return back()->withErrors(['password' => 'パスワードが間違っています']);
}
    }


    //新規登録表示
    public function touroku()
    {
        return view('user.touroku');
    }


    //登録処理
    public function register(Request $request)
    {

$email = $request->input('t1');
$password = $request->input('t2');


    // 同じメールアドレスが既に存在するか確認
    $existingUser = Users::where('email', $email)->first();

    if ($existingUser) {
        // ユーザーが既に存在する場合、エラーメッセージを返す
        return "既に存在しています";
    }



        $user = new Users();
        $user->email = $email;
        $user->password = Hash::make($password); // パスワードをハッシュ化
        $user->save();
    

        return "登録しました";
    }



}
