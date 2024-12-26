<style>
.mb-3{
    width:500px;
    margin:auto;
    margin-top:100px;

}



</style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <form method="POST" action="{{ route('User.post') }}">
    @csrf                        
    <div class="mb-3">    
    <label for="t1">メールアドレス</label>
    <input type="email" name="t1" class="form-control" id="t1" value="{{ old('t1') }}" required>
    <label for="t2">パスワード</label>
    <input type="password" class="form-control"  name="t2" id="t2" required>
    <button type="submit" class="btn btn-primary">新規登録</button>
    </div>
    </form>
