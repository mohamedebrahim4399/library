@extends('layouts.student')
@section('book')
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="table">
  <tbody>
    <tr>
      <th scope="col">Book ID</th>
      <th scope="row">{{$book_data->id}}</th>
    </tr>
    <tr>
      <th scope="col">Book Name</th>
      <td>{{$book_data->book_name}}</td>
    </tr>
    <tr>
      <th scope="col">Book description</th>
      <td>{{$book_data->book_description}}</td>
    </tr>
    <tr>
        <th scope="col">Author name</th>
        <td>{{$book_data->author_name}}</td>
      </tr>
      <tr>
        <th scope="col">Created at</th>
        <td>{{$book_data->created_at}}</td>
      </tr>
      <tr>
        <th scope="col">Updated at</th>
        <td>{{$book_data->updated_at}}</td>
      </tr>
      <tr><td><a href="/dashboard/{id}" class='btn btn-primary'>Cancel</a></td></tr>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
