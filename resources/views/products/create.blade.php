@extends('layouts.dasheadfoot')
@section('content')
    <div class="form-area">  
            <form method="post" enctype="multipart/form-data" action="{{route('news.store')}}">
                {{ csrf_field() }}
          <br style="clear:both">
          <h3 style="margin-bottom: 25px; text-align: center;">Register Form</h3>
          <span></span>
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="product_name" placeholder="Product *" required>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
                <label class="mr-sm-2" for="genders">Gender</label>
                <select class="custom-select mr-sm-2" id="gender" name="gender">
                  <option selected>Choose Your Category</option>
                  @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->category_name}}</option>    
                  @endforeach
                </select>
            </div>
            {{-- <div class="form-group col-md-4">
              <label for="inputPassword4">Date of Birth</label>
              <input type="date" class="form-control" id="inputPassword4" name = "dob" placeholder="Password">
            </div> --}}
            {{-- <div class="form-group col-md-4">
                <label class="mr-sm-2" for="genders">Blood Group</label>
                <select class="custom-select mr-sm-2" id="gender" name = "blood_group" >
                  <option selected>Choose...</option>
                  <option value="A +ve">A +ve</option>
                  <option value="A -ve">A -ve</option>
                  <option value="B +ve">B +ve</option>
                  <option value="B -ve">B -ve</option>
                  <option value="B +ve">AB +ve</option>
                  <option value="B +ve">AB -ve</option>
                  <option value="B +ve">O +ve</option>
                  <option value="B +ve">O -ve</option>
                </select>
            </div> --}}
          </div>
          <button type="submit"  name="submit" value="submit" class="btn btn-success pull-right">Register</button>
        </form>
      </div>

      @endsection
