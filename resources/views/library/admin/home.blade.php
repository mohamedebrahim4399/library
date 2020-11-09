@extends('layouts.layout')
<html>
<head>
<title>Home</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
@section('book')
@foreach($book as $book)
<table>
<tr>
<div class="card" style="margin:30px auto;width: 60%; display:flex; overflow:hidden; text-align: center;  justify-content: center;">
<div class="card" style="width: 80%;margin: 30px auto; display:inline-block; text-align: justify;">
  <div class="card-header">
      Book Name  : {{$book->book_name}}
  </div >
   <ul class="list-group list-group-flush" style="margin:30px">
      <li class="list-group-item"> Author Name :  {{$book->author_name}}</li>
      <li class="list-group-item">Book Description : {{$book->book_description}}</li>
    </ul>
  </div>
  <div class="buttons" style="display:inline-block; margin:0 0 20px 0">
<a href="/edit/{{$book->id}}" class="btn btn-primary" role="button" >Update</a>
<a href="/show/{{$book->id}}" class="btn btn-primary" role="button" >Details</a>
<a href="/delete/{{$book->id}}" class="btn btn-danger" role="button">Delete</a>
</div>  
</div>
</tr>
</table>
@endforeach
@endsection
</body>
</html>
