<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
textarea{
    width:300px;
}
.mb-3{
    width:900px;
    margin:auto;
}
</style>
</head>
<body>
<form action="{{ route('coment.store', ['id' =>$id]) }}" method="POST">
    @csrf
   <div class="mb-3">
@if (session('user'))
    <li class="nav-item">
        <a class="nav-link text-white" href="">{{ session('user') }}</a>
    </li>
@endif

   <label class="form-label">コメント内容</label>
    <textarea name="content" placeholder="記事の内容を入力してください"  class="form-control" rows="10" cols="100"></textarea>
          @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
     <button type="submit" class="btn btn-primary"> 投稿</button>
    </div>
</form>
</body>
</html>