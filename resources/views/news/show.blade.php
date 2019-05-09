@extends('layouts.dasheadfoot')

@section('content')

<div class="row justify-content-center">
      <div class="col-md-10">
                  <div class="card">
                              <img src="/images/news/{{$shownews->cover_image}}" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">{{$shownews->title}}</h5>
                                <p class="card-text">{!! nl2br(e($shownews->content)) !!}</p>
                              </div>
                              <div class="card-footer text-muted">
                                          {{$shownews->created_at}}
                              </div>
                            </div>            
      </div>
</div>
      @endsection
