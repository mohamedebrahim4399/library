@extends('layouts.layout')
@section('moredetails')
<div style="margin:40px auto;width:90%;">
<table class="table">
  <tbody>
    <tr>
      <th scope="col">ID</th>
      <th scope="row">{{$book_data->id}}</th>
    </tr>
    <tr>
      <th scope="col">Book Name</th>
      <td>{{$book_data->book_name}}</td>
    </tr>
    <tr>
      <th scope="col">Book Description</th>
      <td>{{$book_data->book_description}}</td>
    </tr>
    <tr>
      <th scope="col">Author Name</th>
      <td>{{$book_data->author_name}}</td>
    </tr>
    <tr>
      <th scope="col">Created At</th>
      <td>{{$book_data->created_at}}</td>
    </tr>
    <tr>
      <th scope="col">Updated At</th>
      <td>{{$book_data->updated_at}}</td>
    </tr>
</div>
@endsection