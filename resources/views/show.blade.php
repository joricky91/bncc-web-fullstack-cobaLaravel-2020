<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>List Pertanyaan Berdasarkan ID Tertentu</h2>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Action</th>
        </tr>
        @foreach ($questions as $q)
            <tr>
                <td>{{ $q->id }}</td>
                <td>{{ $q->title }}</td>
                <td>{{ $q->content }}</td>
                <td>
                    <a href="/pertanyaan/edit/{{ $q->id }}">Edit</a>
                    |
                    <form action="/pertanyaan/destroy/{{ $q->id }}" method="POST">
                        <input type="submit" value="Delete">
                        @method('delete')
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>