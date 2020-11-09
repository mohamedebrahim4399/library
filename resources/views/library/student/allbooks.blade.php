@extends('layouts.student')
@section('book')
<html>
<head>
<title>Student</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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
    </ul>
  </div>
  <div class="buttons" style="display:inline-block; margin:0 0 20px 0">
  <a href="/detailes/{{$book->id}}" class="btn btn-primary" role="button">Book Details</a>
  <a href="/borrow/{{$book->id}}" class="btn btn-primary" role="button">Borrow</a>
</div>  
</div>
</tr>
</table>
            @endforeach            
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
</html>