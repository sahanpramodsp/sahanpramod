@extends('layouts.main')

@section('title', 'Edit Student Details')
@section('content')
      <h1>Edit Student Details</h1>
      <a href="{{url('students')}}" class="btn btn-danger" >Back To List</a>
      <form method="POST" action="{{ url('students/edit/' . $student->id) }}">
        @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input value="{{$student->name}}" type="text" class="form-control" id="name" name="name" aria-describedby="">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input value="{{$student->phone}}" type="text" class="form-control" id="phone" name="phone" aria-describedby="">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input value="{{$student->email}}" type="email" class="form-control" id="email" name="email" aria-describedby="">
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection