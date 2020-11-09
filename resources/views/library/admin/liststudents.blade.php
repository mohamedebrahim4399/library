@extends('layouts.layout')
@section('liststudents')
<div style="margin:40px auto;width:90%;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      {{-- <th scope="col">Current Team ID</th> --}}
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($all_students as $student)
    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->name}}</td>
      <td>{{$student->email}}</td>
      {{-- <td>{{$student->current_team_id}}</td> --}}
      <td><a href="/moredetails/{{$student->id}}" class="btn btn-outline-primary">More Details</a></td>
    </tr>
  @endforeach
</div>
@endsection