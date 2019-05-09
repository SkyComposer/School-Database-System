@extends('layouts.dasheadfoot')
@section('content')
    <div class="form-area">  
            <form method="post" enctype="multipart/form-data" action="{{route('news.store')}}">
                {{ csrf_field() }}
          <br style="clear:both">
          <h3 style="margin-bottom: 25px; text-align: center;">Register Form</h3>
          <span></span>
          <div class="form-group">
              <input type="file" name="cover_image">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="title" placeholder="Title *" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="author" placeholder="Author *" required>
          </div>
          <!-- <div class="form-group">
            <input type="textarea" class="form-control" id="" name="content" placeholder="Content *" value="" rows="9999">
          </div> -->
          <div class="form-group">
            <input type="date" class="form-control" id="contact" name="published_at" placeholder="Contact number *" value="" required>
          </div>
          <div class="form-group">
          <textarea class="form-control" type="textarea" id="message" name="content" placeholder="Write your content here" maxlength="9999" rows="10"></textarea>
          </div>
          
          {{-- <div class="form-group">
            <textarea class="form-control" type="textarea" id="message" name="short" placeholder="Why are you interested in this event?" maxlength="9999" rows="5"></textarea>                   
          </div> --}}
          <button type="submit"  name="submit" value="submit" class="btn btn-success pull-right">Register</button>
        </form>
      </div>

      @endsection
