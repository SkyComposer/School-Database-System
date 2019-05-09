@extends('layouts.app')

@section('content')
<h1>Students</h1>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Roll no</th>
          </tr>
        </thead>
        <tbody>
                @if(count($students) > 1)
                @foreach ($students as $sudent)
          <tr>
            <th scope="row">{{$sudent->id}}</th>
            <td>{{$sudent->first_name}}</td>
            <td>{{$sudent->last_name}}</td>
            <td>{{$sudent->roll_no}}</td>
          </tr>
          @endforeach
          @else
          <p> NO post </p>
          @endif 
        </tbody>
      </table>
      @endsection
