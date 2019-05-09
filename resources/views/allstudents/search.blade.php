@extends('layouts.dasheadfoot')
@section('content') 
<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" action = "{{url('search')}}">
        <div class="input-group">
        
          <input type="text" name="searchData" class="form-control" placeholder="Search for...">
          <div class="input-group-append">
          
        <!-- <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button> -->
            <input type="submit" value="Search">
          </div>
          
        </div>
      </form>

<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Roll No</th>
            <th scope="col">Image</th>
          <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Class</th>
            
            
          </tr>
        </thead>
        <tbody>
                @if(count($allstudents) > 0)
                @foreach ($allstudents as $allstudent)
          <tr>
            <th scope="row"> {{$allstudent->roll_no}}</th>
            <td>
                  <img class="img-fluid" src="/images/{{$allstudent->cover_image}}" alt="" style="height:50%;">
            
          </td>
            <td>{{$allstudent->f_name}}</td>
          <td>{{$allstudent->l_name}}</td>
            <td>{{$allstudent->class}}</td>
     
          
          <td> 
          <a href="/allstudents/{{$allstudent->id}}">
            <button class="btn btn-success"> View Details </button>
          </a>
          </td>
            @if(!Auth::guest())
              @if(Auth::user()->id == $allstudent->user_id)
            <td><a href="/allstudents/{{$allstudent->id}}/edit"><button class="btn btn-warning">Edit</button></a></td>
            <td>
              <form class="pull-right" method="POST" action="{{ route('allstudents.destroy', [$allstudent->id]) }}">
                  {{ csrf_field() }}
              <input type="hidden" name="_method" value="DELETE">
              <input type="submit" class="btn btn-danger" value="delete" onclick="return confirm('Are you sure?')" >
              </form>
            
            </td>
              @endif
            @endif
          </tr>
          @endforeach
          
          @else
          <p> NO post </p>
          @endif 
        </tbody>
      </table>
      {{-- {{$allstudent->links()}} --}}
      @endsection







