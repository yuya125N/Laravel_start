<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ToDo App</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
  <header>
    <nav class="navbar">
      <a class="navbar-brand" href="/">ToDo App</a>
    </nav>
  </header>
  <main>
    <div class="container">
      <div class="row">
        <div class="col col-md-4">
          <nav class="card">
            <div class="card-header">フォルダ</div>
            <div class="card-body">
              <a href="#" class="btn btn-dark btn-block">
                フォルダを追加する
              </a>
            </div>
            <div class="list-group">
              @foreach($folders as $folder)
                <a href="{{ route('tasks.index', ['id' => $folder->id]) }}" class="list-group-item">
                  {{ $folder->title }}
                </a>
              @endforeach
            </div>
          </nav>
        </div>
        <div class="column col-md-8">
        <!-- ここにタスクが表示される -->
        </div>
      </div>
    </div>
  </main>
</body>
</html>