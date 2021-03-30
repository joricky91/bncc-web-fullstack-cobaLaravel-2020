<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Edit Data</h2>
    <br>
    @foreach ($questions as $q)
    <form action="/pertanyaan/update" method="POST">
        ID :<input type="text" name='id' value="{{ $q->id }}"><br><br>
        Title :<input type="text" name='title' value="{{ $q->title }}"><br><br>
        Content :<input type="text" name='content' value="{{ $q->content }}"><br><br>
        Profile ID :<input type="text" name='profile_id' value="{{ $q->profile_id }}"><br><br>
        <input type="submit" value="Submit Data">
        @method('put')
        @csrf
    </form>
    @endforeach
</body>
</html>