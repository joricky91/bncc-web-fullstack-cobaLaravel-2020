@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BNCC Database</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h2>List Pertanyaan</h2>
        
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th e="col">Content</th>
                        <th e="col">Questioner</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($questions as $q)
                        <tr>
                            <th scope="row">{{ $q->id }}</th>
                            <td>{{ $q->title }}</td>
                            <td>{{ $q->content }}</td>
                            <td>{{ $q->profile->fullname }}</td>
                            <td>
                                <a href="/pertanyaan/{{$q->id}}/edit" class="btn btn-primary">Edit</a>
                                <form action="/pertanyaan/{{$q->id}}" method="POST">
                                    <input type="submit" value="Delete" class="btn btn-primary">
                                    @method('delete')
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </body>
    </html>
@endsection
