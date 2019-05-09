@extends('layouts.dasheadfoot')
@section('content')

      <?php
      $colcount = count($albums);
      $i = 1;
      ?>
      <a href="/albums/create"><button class="btn btn-success my-4"> Create New Album </button></a>
      <h2 class="text-center"> Your Albums </h2>
      <div id="albums">
            <div class="row text-center my-5">
                  @foreach ($albums as $album)
                      {{-- @if ($i == $colcount) --}}
                      <div class="col-md-4 col-sm-6">
                              <a href="/albums/{{$album->id}}">
                                    <img class="img-thumbnail" src="storage/album_images/{{$album->cover_image}}" alt="">
                              </a>
                              <br>
                        <h4 class="mt-3">{{$album->name}}</h4>
                      </div>
                      @endforeach   
                  </div>
            </div>
@endsection
