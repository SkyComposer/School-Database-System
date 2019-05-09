@extends('layouts.headerfooter') 
@section('content')

<div class="page-top-banner">
    <div class="banner-heading">
        <p> Your News </p>
    </div>
</div>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow">
                <img src="/images/news/{{$news->cover_image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">{{$news->title}}</h3>
                    <p class="card-text">{!! nl2br(e($news->content)) !!}</p>
                </div>
                <div class="card-footer text-muted">
                    {{$news->created_at}}
                </div>
            </div>
        </div>
        <div class="col-md-4">
                <div class="card shadow bg-dark pb-2 mb-3">
                        <div class="card-body text-left">
                            <h4 class="card-title text-white"> Contact Us </h4>
                            <div class="socialicons">
                                    <ul class="list-unstyled list-inline social-icons text-white" style="font-size: 20px;">
                                        <li><i class="fa fa-phone lh32"></i> 98412823123 </li>
                                        <li><i class="fa fa-envelope lh32"></i> mbschool@gmail.com </li>
                                        <li><i class="fab fa-linkedin-in"> 9843648136</i></li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                <div class="card shadow">
                        <div class="card-body">
                            <h4 class="card-title">Other News</h4>
                            <ul class="list-unstyled list-inline" style="font-size: 18px">
                            @foreach ($allnews as $all)
                            <a href="/singlenews/{{$all->id}}"><li> - {{$all->title}}</i></li>    </a>
                                            @endforeach
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card shadow bg-dark pt-2 mt-3 mb-5">
                            <div class="card-body text-center">
                                <h4 class="card-title text-white">Follow Us on Social Media</h4>
                                <div class="socialicons">
                                        <ul class="list-unstyled list-inline social-icons">
                                            <!-- List Item 1 -->
                                            <!--<a> tag is put outside the <li> tag so as to make the entire icon redirect to the social media site it refers to -->
                      
                                            <li class="locater">
                                                <a href="https://www.facebook.com/SYFNepal" class="facebook" target="_blank">
                                                    <i class="fab fa-facebook-f lh32"></i>
                                                </a>
                                            </li>
                                            <!-- List Item 2 -->
                                            <li class="locater">
                                                <a href="#" class="twitter" target="_blank">
                                                    <i class="fab fa-twitter lh32"></i>
                                                </a>
                                            </li>
                                            <!-- List Item 3 -->
                                            <li class="locater">
                                                <a href="#" class="googleplus" target="_blank">
                                                    <i class="fab fa-google-plus-g lh32"></i>
                                                </a>
                                            </li>
                                            <!-- List Item 4 -->
                                            <li class="locater">
                                                <a href="https://www.youtube.com/channel/UCzApUcs3n5va8wrOZvyFAqQ" class="youtube" target="_blank">
                                                    <i class="fab fa-youtube lh32"></i>
                                                </a>
                                            </li>
                                            <!-- List Item 5 -->
                                            <li class="locater">
                                                <a href="#" class="linkedin" target="_blank">
                                                    <i class="fab fa-linkedin-in lh32"></i>
                                            </li>
                                            </a>
                                        </ul>
                                    </div>
                            </div>
                        </div>
        </div>

    </div>
</div>
@endsection