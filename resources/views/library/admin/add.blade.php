@extends('layouts.layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
      #content{
        width:70%;
        margin:40px auto;
      }
    </style>
</head>
<body >
 @section('add')
 <div id="content">
 <h1>Add Book</h1>
 <form method='POST' action='/submit' >
 @csrf
  <div class="form-group" >
    <label for="1">book name</label>
    <input type="text" name="book_name" class="form-control" id="1" value='{{old("book_name")}}'>
    <label>{{$errors->first('book_name')}} </label>
  </div>
  <div class="form-group">
    <label for="3">author name</label>
    <input type="text" name="author_name" class="form-control" id="3" value='{{old("author_name")}}'>
    <label>{{$errors->first('author_name')}} </label>
  </div>
  <div class="form-group">
    <label for="2">book describtion</label>
    <textarea name="book_description" class="form-control" id="2" cols="30" rows="7">{{old("book_description")}}
    </textarea>
    <label>{{$errors->first('book_description')}} </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    @endsection
</body>
</html>

