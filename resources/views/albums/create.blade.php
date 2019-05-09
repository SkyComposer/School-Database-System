@extends('layouts.dasheadfoot')
@section('content')

<h1> Create Album </h1>
<form method="POST" enctype="multipart/form-data" action="{{route('albums.store')}}">
    {{ csrf_field() }}
        <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Album Name">
        </div>
        <div class="form-group">
                <textarea name="description"  class="form-control" id="" cols="30" rows="10" placeholder="descirption"></textarea>
        </div>
        <div class="form-group">
                <input type="file" name="cover_image">
        </div>
        <input type="submit" name="submit">
    </form>

      @endsection
