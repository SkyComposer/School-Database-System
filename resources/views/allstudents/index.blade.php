@extends('layouts.dasheadfoot')
@section('content')
<h1>Students</h1>

@if(session('success'))
  <div class = "alert alert-success">
    {{session('success')}}
  </div>
@endif

@if(session('error'))
  <div class = "alert alert-danger">
    {{session('error')}}
  </div>
@endif



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
  
<a href="allstudents/create"><button class="btn btn-primary m-3"> Add New Student</button></a>
 <h4 class="m-3"> Total students in school = {{$counter}}</h4>

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
          <tr>
            <th scope="row">1</th>
            <td>Nursery</td>
          <td>{{$nursery}}</a></td>
          <td>
          <a href="/singleclass/Nursery"><button class="btn btn-success">View Details</button></a>
          </td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <th scope="row">2</th>
            <td>L.K.G</td>
          <td>{{$LKG}}</a></td>
            <td>
            <a href="/singleclass/LKG"><button class="btn btn-success">View Details</button></a>
            </td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <th scope="row">3</th>
            <td>U.K.G</td>
          <td>{{$UKG}}</a></td>
            <td><a href="/singleclass/UKG"><button class="btn btn-success">View Details</button></a></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <th scope="row">4</th>
            <td>I</td>
          <td>{{$classI}}</a></td>
            <td><a href="/singleclass/I"><button class="btn btn-success">View Details</button></a></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <th scope="row">5</th>
            <td>II</td>
          <td>{{$classII}}</a></td>
            <td><a href="/singleclass/II"><button class="btn btn-success">View Details</button></a></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <th scope="row">6</th>
            <td>III</td>
          <td>{{$classIII}}</a></td>
            <td><a href="/singleclass/III"><button class="btn btn-success">View Details</button></a></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <th scope="row">7</th>
            <td>IV</td>
          <td>{{$classIV}}</a></td>
            <td><a href="/singleclass/IV"><button class="btn btn-success">View Details</button></a></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <th scope="row">8</th>
            <td>V</td>
          <td>{{$classV}}</a></td>
            <td><a href="/singleclass/V"><button class="btn btn-success">View Details</button></a></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <th scope="row">9</th>
            <td>VI</td>
          <td>{{$classVI}}</a></td>
            <td><a href="/singleclass/VI"><button class="btn btn-success">View Details</button></a></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <th scope="row">10</th>
            <td>VII</td>
          <td>{{$classVII}}</a></td>
            <td><a href="/singleclass/VII"><button class="btn btn-success">View Details</button></a></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <th scope="row">11</th>
            <td>VIII</td>
          <td>{{$classVIII}}</a></td>
            <td><a href="/singleclass/VIII"><button class="btn btn-success">View Details</button></a></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <th scope="row">12</th>
            <td>IX</td>
          <td>{{$classIX}}</a></td>
            <td><a href="/singleclass/IX"><button class="btn btn-success">View Details</button></a></td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <th scope="row">13</th>
            <td>X</td>
          <td>{{$classX}}</a></td>
            <td><a href="/singleclass/X"><button class="btn btn-success">View Details</button></a></td>
          </tr>
        </tbody>
      </table>














    <!-- <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
          <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Class</th>
            <th scope="col">Roll No</th>
          </tr>
        </thead>
        <tbody>
                @if(count($allstudents) > 0)
                @foreach ($allstudents as $allstudent)
          <tr>
            <th scope="row">{{$allstudent->id}}</th>
            <td>{{$allstudent->f_name}}</td>
          <td><a href="/news/{{$allstudent->id}}">{{$allstudent->l_name}}</a></td>
            <td>{{$allstudent->class}}</td>
          <td>
            <div class="row">
              <div class="col-md-12">
                  <img class="img-fluid" src="/storage/cover_images/{{$allstudent->cover_image}}" alt="">
              </div>
            </div>
            
          </td>
          <td> 
          <a href="/allstudents/{{$allstudent->id}}">
            <button class="btn btn-success"> View Details </button>
          </a>
          </td>
            @if(!Auth::guest())
              @if(Auth::user()->id == $allstudent->user_id)
            <td><button class="btn btn-danger"><a href="/allstudents/{{$allstudent->id}}/edit">Edit</a></button></td>
            <td>
              <form class="pull-right" method="POST" action="{{ route('news.destroy', [$allstudent->id]) }}">
                  {{ csrf_field() }}
              <input type="hidden" name="_method" value="DELETE">
              <input type="submit" class="btn btn-danger" value="delete">
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
      {{-- {{$allstudent->links()}} --}} -->
      @endsection
