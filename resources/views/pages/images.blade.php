@extends('layouts.headerfooter') 
@section('content')

<div class="page-top-banner">
	<div class="banner-heading">
		<p> Gallery Section </p>	
	</div>
</div>

<hr>
<?php
      ?>
      <div id="albums" class="container">
            <div class="row text-center">
                  @foreach ($album->photos as $photo)
                      {{-- @if ($i == $colcount) --}}

                      <div class="col-md-4 col-sm-6">
                              {{-- <a href="/photos/{{$photo->id}}"> --}}
                                    
                                    <a href="../storage/photos/{{$photo->album_id}}/{{$photo->photo}}" class="d-block mb-4 h-100" data-lightbox="gallery">
                                    <img class="imgthumb img-thumbnail" src="../storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="">
                              </a>
                              
                        
                      </div>
                      @endforeach   
                  </div>
            </div>
@endsection