@extends('layouts.dasheadfoot')
@section('content')

<a href="/albums" class="btn btn-secondary">Go Back</a>
<a href="/photos/create/{{$album->id}}" class="btn btn-success"> Upload Photo to this Album</a>
<hr>
<?php
      ?>
      <H1 class="text-center my-4"> {{$album->name}}</H1>
      <div id="albums">
            <div class="row text-center">
                  @if(count($album->photos) > 0)
                  @foreach ($album->photos as $photo)
                      {{-- @if ($i == $colcount) --}}
                      <div class="col-md-4 col-sm-6">
                                      <hr>
                              <a href="/photos/{{$photo->id}}">
                                    <img class="img-thumbnail imgthumb" src="../storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="">
                              </a>
                              <form class="pull-right" method="POST" action="{{ route('photos.destroy', [$photo->id]) }}">
                                          {{ csrf_field() }}
                                      <input type="hidden" name="_method" value="DELETE">
                                      <input type="submit" class="btn btn-danger px-5 mt-3" value="Delete" onclick="return confirm('Are you sure?')" >
                                      </form>
                              <br>
                        {{-- <h4>{{$photo->title}}</h4> --}}
                      </div>
                      @endforeach       
                  @else
                        <div class="col-md-12">
                                    <h3 class="text-center"> No Photos to Show </h3>
                        </div>
                  @endif
                  
                  </div>
            </div>
@endsection