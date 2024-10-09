<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            line-height: 1.5;
        }
    </style>
</head>
<body class="antialiased">
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <h1 class="text-3xl">Welcome to テスト</h1>
        <div class="links">
  <table>
     <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>URL</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($articles as $article)
        <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->title }}</td>
            <td>{{ $article->url }}</td>
        </tr>
    @endforeach
    </tbody>
  </table>
</div>
    </div>
</body>
</html>
