
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style>
.container{
    margin-top:100px;
    width:500p;


}
textarea {
  resize: vertical;
    resize: horizontal;

}
</style>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <!-- ログインフォーム -->
                    <form method="POST" action="{{ route('articles.post') }}">
                        @csrf

                        <!-- メールアドレス入力 -->
                        <div class="mb-3">
                            <label for="articles" class="form-label">記事タイトル</label>
                            <input type="text" placeholder="タイトルを入れてください" class="form-control" name="title">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">記事内容</label>
                           <textarea name="content" placeholder="記事の内容を入力してください"  class="form-control" rows="10" cols="100"></textarea>
                          @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- ログインボタン -->
                        <button type="submit" class="btn btn-primary">
                           投稿
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

