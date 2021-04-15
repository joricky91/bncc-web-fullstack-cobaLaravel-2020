@extends('layouts.app')

@section('content')
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
        <div class="container">
            <h2>List Pertanyaan Berdasarkan ID Tertentu</h2>
            
            <table class="table table-bordered">
                <tr>
                    <td>Pertanyaan</td>
                    <td>{{ $questions->content }}</td>
                    <td>
                        <a href="/pertanyaan/{{$questions->id}}/edit" class="btn btn-primary">Edit</a>
                        <form action="/pertanyaan/{{$questions->id}}" method="POST">
                            <input type="submit" value="Delete" class="btn btn-primary">
                            @method('delete')
                            @csrf
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>Jawaban Paling Benar</td>
                    <td>{{ $correct->content }}</td>
                </tr>
                <tr>
                    <td>Jawaban Lain</td>
                    <td>
                        <ul>
                            @foreach ($answers as $a)
                                <li>{{ $a->content }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Tag</td>
                    <td>
                        <ul>
                            @foreach ($tags as $t)
                                <li>{{ $t->tag }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
    </body>
    </html>
@endsection
