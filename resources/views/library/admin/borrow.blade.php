@extends('layouts.layout')
@section('liststudents')
<div style="margin:40px auto;width:90%;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Student ID</th>
      <th scope="col">Book ID</th>
      <th scope="col">Book Name</th>
    </tr>
  </thead>
  <tbody>
  @foreach($books as $book)
    <tr>
      <th scope="row">{{$book->user_id}}</th>
      <td>{{$book->book_id}}</td>
      <td>{{$book->book_name}}</td>  
    </tr>
  @endforeach
  </div>
@endsection