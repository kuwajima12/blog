
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <!-- ログインフォーム -->
                    <form method="POST" action="{{ route('login.index') }}">
                        @csrf
                        
                        <div class="mb-3">    
                        <label for="t1">メールアドレス</label>
                         <input type="email" name="t1" class="form-control" id="t1" value="{{ old('t1') }}" required>
                         @error('t1')
                         <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          
                          <label for="t2">パスワード</label>
                          <input type="password" class="form-control"  name="t2" id="t2" required>
                          @error('t2')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <button type="submit" class="btn btn-primary">ログイン</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

