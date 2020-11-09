@extends('layouts.layout')
@section('moredetails')
<div style="margin:40px auto;width:90%;">
<table class="table">
  <tbody>
  @foreach($student_details as $student_details)
    <tr>
      <th scope="col">ID</th>
      <th scope="row">{{$student_details->id}}</th>
    </tr>
    <tr>
      <th scope="col">Name</th>
      <td>{{$student_details->name}}</td>
    </tr>
    <tr>
      <th scope="col">Email</th>
      <td>{{$student_details->email}}</td>
    </tr>
    <tr>
      <th scope="col">Created At</th>
      <td>{{$student_details->created_at}}</td>
    </tr>
    <tr>
      <th scope="col">Updated At</th>
      <td>{{$student_details->updated_at}}</td>
    </tr>
 @endforeach
</div>
@endsection