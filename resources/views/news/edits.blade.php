@extends('layouts.dasheadfoot')
@section('content')
<div class="form-area">  
  <form method="post" enctype="multipart/form-data" action="{{ route('news.update', [$editnews->id]) }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <br style="clear:both">
    <h3 style="margin-bottom: 25px; text-align: center;">Register Form</h3>
    <span></span>
    <div class="form-group">
      <input type="file" name="cover_image">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="name" name="title" placeholder="Title *" value="{{$editnews->title}}" required>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="name" name="author" placeholder="Author *" value="{{$editnews->author}}" required>
    </div>
    <div class="form-group">
      <input type="date" class="form-control" id="contact" name="published_at" placeholder="Contact number *" value="{{$editnews->published_at}}" required>
    </div>
    <div class="form-group">
          <textarea class="form-control" type="textarea" id="message" name="content" placeholder="Write your content here" maxlength="9999" rows="10">{{nl2br($editnews->content)}}</textarea>
          </div>
    <button type="submit"  name="submit" value="submit" class="btn btn-success pull-right">Register</button>
  </form>
</div>
@endsection
