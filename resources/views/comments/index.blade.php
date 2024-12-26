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
li{
    list-style:none;
}

p#recor_count{
    text-align:right;
    margin-right:100px;

}
</style>
</head>
<body>
<h1>コメント一覧</h1>

<p id="recor_count">コメント件数：{{$commentsCount}}件</p>
    @foreach ($comments as $come)
        
        <div class="card" style="width: 40rem;">
  <div class="card-body">
  <ul>
<ul style="display: flex; align-items: center; list-style: none; padding: 0;">
    <li><img src="{{ asset('img/img.png') }}" width="50" height="50" alt=""></li>
    <li>投稿日時：{{ $come->created_at}}</li>
</ul>
            {{ $come->content }}

        </div>
        </div>
    @endforeach
</body>
</html>