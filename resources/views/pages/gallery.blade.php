@extends('layouts.headerfooter') 
@section('content')

<div class="page-top-banner">
	<div class="banner-heading">
		<p> Gallery Section </p>	
	</div>
</div>
<div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12 pt-5 mt-5">
          <div class="section__title text-center pb-5">
              <h1>Photo Albums</h1>
              <hr>
              <h4> All our photos of events and important things are posted here. Have a look! </h4>
          </div>
      </div>
  </div>
      
      <div id="albums">
          <div class="container">
                <div class="row text-center">
                        @foreach ($albums as $album)
                            {{-- @if ($i == $colcount) --}}
                            <div class="col-md-4 col-sm-6">
                                    {{-- <a href="/albums/{{$album->id}}"> --}}
                                        <a href="/gallery/{{$album->id}}">
                                          <img class="img-thumbnail imgthumb" src="storage/album_images/{{$album->cover_image}}" alt="">
                                    </a>
                                    <br>
                              <h4 class="mt-4 mb-5">{{$album->name}}</h4>
                            </div>
                            @endforeach   
                        </div>
                  </div>
          </div>
            
@endsection
            