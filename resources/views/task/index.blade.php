<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>タスク一覧</h1>
    @foreach ($tasks as $task)
        <!-- // リンク先をidで取得し名前で出力 -->
        <ol><a href="/tasks/{{ $task->id }}">{{ $task->title }}</a></ol>
    @endforeach
    <hr>
    <h1>新規論文投稿</h1>
    @csrf
    <form action="/tasks" method="post">
        @csrf
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" value="{{ old('title') }}">
        </p>
        <p>
            <label for="body">内容</label><br>
            <textarea name="body" class="body">{{ old('body') }}</textarea>
        </p>

        <input type="submit" value="登録">
    </form>
</body>

</html>
