@extends('layouts.dasheadfoot')
@section('content')
<h1>News</h1>
<a href="/news/create" class="btn btn-primary mb-3">Create News</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
          <th scope="col">Author</th>
            <th scope="col">Title</th>
            <th scope="col">Created on</th>
          </tr>
        </thead>
        <tbody>
                @if(count($allnews) > 0)
                @foreach ($allnews as $single_news)
          <tr>
            <th scope="row">{{$single_news->id}}</th>
            <td>{{$single_news->author}}</td>
          <td><a href="/news/{{$single_news->id}}">{{$single_news->title}}</a></td>
            <td>{{$single_news->published_at}}</td>
          <td>
            <div class="row">
              <div class="col-md-12">
                  {{-- <img class="img-fluid" src="/storage/cover_images/{{$single_news->cover_image}}" alt=""> --}}
                  {{-- <img class="img-thumbnail imgthumb" src="/images/news/{{$single_news->cover_image}}" alt=""> --}}
              </div>
            </div>
            
          </td>
            @if(!Auth::guest())
              @if(Auth::user()->id == $single_news->user_id)
            <td><a href="/news/{{$single_news->id}}/edit"><button class="btn btn-info">Edit</button></a></td>
            <td>
              <form class="pull-right" method="POST" action="{{ route('news.destroy', [$single_news->id]) }}">
                  {{ csrf_field() }}
              <input type="hidden" name="_method" value="DELETE">
              <input type="submit" class="btn btn-danger" value="Delete">
              </form>
            
            </td>
              @endif
            @endif
          </tr>
          @endforeach
          
          @else
          <p> NO post </p>
          @endif 
        </tbody>
      </table>
      {{$allnews->links()}}
      @endsection
