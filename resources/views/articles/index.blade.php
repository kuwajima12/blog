<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
h1{
text-align:center;

}

#zoku{
    margin-left:50px;


}

.mainform{
    width:1000px;
    margin:auto;



}

.card{
    margin:auto;
    margin-top:50px;

}

.card:hover {
    /* マウスを乗せたときの背景色 */
    background-color: #e0e0e0;  /* 任意の色に変更 */
}
</style>
</head>
<body>

<ul class="nav bg-dark p-3">
    <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('articles.post') }}">記事投稿</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('articles.logout') }}">ログアウト</a>
    </li>
    <li class="nav-item">
    

    {{$userid}}
@if (session('user'))
    <li class="nav-item">
        <a class="nav-link text-white" href="">{{ session('user') }}</a>
    </li>
@endif

    </li>
    
</ul>





<h1>記事一覧</h1>
<div class="container">




    @foreach ($products as $article)
        
        <div class="card" style="width: 40rem;">
  <div class="card-body">
  {{ $article->id }}
            <h2>{{ $article->title }}</h2>  <!-- 記事タイトル -->

                <p>{{ \Illuminate\Support\Str::limit( $article->content, 100) }}...</p>

            <a href="{{ route('coments.index', ['id' => $article->id]) }}" id="come">コメント一覧</a>
                           <a href="{{ route('coment.show', ['id' => $article->id]) }}">コメント投稿</a>

            
            <a href="{{ route('kiji.shousai',['id' => $article->id]) }}" id="zoku">続きを見る</a>
            <small>投稿日時：{{ $article->created_at }}</small>
            <hr>
        </div>
        </div>
    @endforeach
    </div>

{{ $products->links('pagination::bootstrap-4') }}




</body>
</html>