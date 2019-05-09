@extends('layouts.dasheadfoot')
@section('content')
<h1>Students</h1>
<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
          <th scope="col">Class</th>
            <th scope="col">Total Students</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($class as $clas)
          <tr>
            <th scope="row"></th>
            <td>{{$clas->class}}</td>
          <td>1</a></td>
          <td>
          <a href="/classes/{{$clas->class}}"><button class="btn btn-success">View Details</button></a>
          </td>
          </tr>
          @endforeach

        </tbody>
        </table>


@endsection