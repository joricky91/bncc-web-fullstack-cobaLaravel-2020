<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Membuat Pertanyaan Baru</h2>
    <br>
    <form action="/pertanyaan/store" method="POST">
        @csrf
        ID :<input type="text" name='id'><br><br>
        Title :<input type="text" name='title'><br><br>
        Content :<input type="text" name='content'><br><br>
        Profile ID :<input type="text" name='profile_id'><br><br>
        <input type="submit" value="Submit Data">
    </form>
</body>
</html>