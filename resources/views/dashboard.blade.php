{{-- @extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <a href="/news/create" class="btn btn-primary">
                    Create Posts</a>
                    <h3>your news</h3>
                    @if (count($news)>0)
                    <table class="table table-striped">
                       <tr>
                        <th></th>
                        <th>Title</th>
                        <th>Writen sdasdsadsadon </th>
                        <th>by</th>
                    </tr>
                    @foreach ($news as $new)
                    <tr>
                        <td>
                           {{$new->title}}
                       </td>
                       <td>{{$new->published_at}}</td>
                       <td>
                        {{$new->user->name}}
                    </td>
                    <td><a href="/news/{{$new->id}}/edit" class="btn btn-default">Edit</a></td>
                    <td>
                        <form class="pull-right" method="POST" action="{{ route('news.destroy', [$new->id]) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" class="btn btn-danger" value="delete">
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            @else
            <p> You Have no news for display </p>
            @endif

        </div>
    </div>
</div>
</div>
</div>
@endsection --}}
{{-- content --}}
@extends('layouts.dasheadfoot')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a href="/news/create" class="btn btn-primary mb-3">Create Posts</a>
            @if (count($news)>0)
            <table class="table table-striped">
               <tr>
                   <th>Title</th>
                   <th>Written on</th>
                   <th>by</th>
                   <th>Actions </th>
                   <th></th>
               </tr>
               @foreach ($news as $new)
               <tr>
                <td>
                   {{$new->title}}
               </td>
               <td>{{$new->published_at}}</td>
               <td>
                {{$new->user->name}}
            </td>
            <td><a href="/news/{{$new->id}}/edit" class="btn btn-default">Edit</a></td>
            <td>
                <form class="pull-right" method="POST" action="{{ route('news.destroy', [$new->id]) }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" class="btn btn-danger" value="delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @else
    <p> You Have no news for display </p>
    @endif
    <div class="card">
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <h3>All Your News</h3>
        </div>
    </div>
</div>
</div>
</div>
@endsection
{{-- contetn --}}












