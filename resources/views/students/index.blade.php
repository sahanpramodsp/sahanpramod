@extends('layouts.main')

@section('title', 'Student List')
@section('content')
      <h1>Student List</h1>
      @if (Session::has('msg'))
      <div class="alert alert-success">
        {{ Session::get('msg')}}
      </div>
      @endif

      <a href="{{url('students/create')}}" class="btn btn-primary">Add New Student</a>
      <table class="table">
        <thead>
          <tr class="table-list">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($students as $student)
          <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->created_at->format('y-M-d') }}</td>
            <td>{{ $student->updated_at->diffForHumans() }}</td>

            <td>
              <div>
              <a href="{{ url('students/edit/'. $student->id) }}" class="btn btn-primary">Edit</a>
              <button class="btn btn-danger">Delete</button>
            </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection