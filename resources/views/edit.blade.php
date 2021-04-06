<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2>Edit Data</h2>
    <br>
    <form action="/pertanyaan/{{$questions->id}}" method="POST">
        <div class="form-group">
            <label for="id">ID : </label>
            <input style="width: 600px;" type="text" name="id" class="form-control" value="{{ $questions->id }}">
            @error('id')
                <span style="color: red">ID must be filled.</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="title">Title : </label>
            <input style="width: 600px;" type="text" name="title" class="form-control" value="{{ $questions->title }}">
            @error('title')
                <span style="color: red">Title must be filled.</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="content">Content : </label>
            <input style="width: 600px;" type="text" name="content" class="form-control" value="{{ $questions->content }}">
            @error('content')
                <span style="color: red">Content must be filled.</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="profile_id">Profile ID : </label>
            <input style="width: 600px;" type="text" name="profile_id" class="form-control" value="{{ $questions->profile_id }}">
            @error('profile_id')
                <span style="color: red">Profile ID must be filled.</span>
            @enderror
        </div>
        <input type="submit" value="Submit Data" class="btn btn-primary">
        @method('put')
        @csrf
    </form> 
</body>
</html>