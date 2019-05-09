@extends('layouts.dasheadfoot')
@section('content')

<h1> Create Album </h1>
<form method="POST" enctype="multipart/form-data" action="{{route('photos.store')}}">
    {{ csrf_field() }}
        <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Title Name">
        </div>
        <div class="form-group">
                <textarea name="description"  class="form-control" id="" cols="30" rows="10" placeholder="descirption"></textarea>
        </div>
        <div class="form-group">
                <input type="file" name="photos[]" multiple>
        </div>
        <input type="hidden" name="album_id" value={{$album_id}}>
        <input type="submit" name="submit">
    </form>

      @endsection
