@extends('layouts.dasheadfoot')
@section('content')
    <div class="form-area">  
            <form method="post" enctype="multipart/form-data" action="{{ route('teachers.update', [$teachers->id]) }}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
          <br style="clear:both">
          <h3 style="margin-bottom: 25px; text-align: center;">Register Form For Teachers</h3>
          <span></span>
          <div class="form-group">
              <input type="file" name="cover_image">
          </div>
          <div class="form-group">
          <input type="text" class="form-control" id="name" name="name" placeholder="Teacher's Name" value="{{$teachers->name}}" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="mobile" placeholder="Mobile Number" value="{{$teachers->mobile}}" required>
          </div>

          <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{$teachers->email}}" required>
              </div>
              <div class="form-group">
                  <label>Entry Date</label>
                    <input type="date" class="form-control" id="contact" name="entry_date" placeholder="Contact number *" value="{{$teachers->entry_date}}" required>
                  </div>
          <button type="submit"  name="submit" value="submit" class="btn btn-success pull-right">Submit</button>
        </form>
      </div>

      @endsection
