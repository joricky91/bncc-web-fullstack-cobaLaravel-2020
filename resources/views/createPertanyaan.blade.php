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
    <form action="/pertanyaan" method="POST">
        @csrf
        <div>
            <label for="id">ID : </label>
            <input type="text" name='id'>
            @error('id')
                <span style="color: red">ID must be filled.</span>
            @enderror
        </div>
        
        <div>
            <label for="title">Title : </label>
            <input type="text" name='title'>
            @error('title')
                <span style="color: red">Title must be filled.</span>
            @enderror
        </div>
        
        <div>
            <label for="content">Content : </label>
            <input type="text" name='content'>
            @error('content')
                <span style="color: red">Content must be filled.</span>
            @enderror
        </div>
        
        <div>
            <label for="profile_id">Profile ID : </label>
            <input type="text" name='profile_id'>

            @error('profile_id')
                <span style="color: red">Profile ID must be filled.</span>
            @enderror
        </div>
        
        <input type="submit" value="Submit Data">
    </form>
</body>
</html>