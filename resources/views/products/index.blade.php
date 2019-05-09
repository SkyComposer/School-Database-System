@extends('layouts.dasheadfoot')
@section('content')
<h1>All Teachers</h1>
<a href="/products/create" class="btn btn-primary mb-3">Create Teachers</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
          <th scope="col">Category</th>
            <th scope="col">Email</th>
            <th scope="col">Created on</th>
          </tr>
        </thead>
        <tbody>
                @if(count($products) > 0)
                @foreach ($products as $product)
          <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->product_name}}</td>
            <td>{{$product->category->category_name}}</td>
          <td></td>
            <td></td>
          <td>
            <div class="row">
              <div class="col-md-12">
                  {{-- <img class="img-fluid" src="/storage/cover_images/{{$single_news->cover_image}}" alt=""> --}}
                  {{-- <img class="img-thumbnail imgthumb" src="/images/news/{{$single_news->cover_image}}" alt=""> --}}
              </div>
            </div>
            
          </td>
            
            {{-- <td><a href="/teachers/{{$teacher->id}}/edit"><button class="btn btn-info">Edit</button></a></td>
            <td>
              <form class="pull-right" method="POST" action="{{ route('teachers.destroy', [$teacher->id]) }}">
                  {{ csrf_field() }}
              <input type="hidden" name="_method" value="DELETE">
              <input type="submit" class="btn btn-danger" value="Delete">
              </form>
            
            </td> --}}
          </tr>
          @endforeach
          
          @else
          <p> NO post </p>
          @endif 
        </tbody>
      </table>
      
      @endsection
