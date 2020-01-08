<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/record/{{ $user->id }}/update">
        @csrf
        <input type="text" name="name" value="{{ $user->name }}">
        <input type="submit" value="Update Record">
    </form>
</body>
</html>
