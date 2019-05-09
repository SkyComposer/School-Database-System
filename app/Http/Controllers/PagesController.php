<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Album;
use App\Student;
use App\Teacher;

class PagesController extends Controller
{
    //
    public function index(){
        $getallnews = News::orderBy('created_at','desc')->paginate(3);
        $students = Student::all();
        $teachers = Teacher::all();
        return view('pages.index')->with('allnews', $getallnews)
        ->with('students',$students)
        ->with('teachers',$teachers); 
    }
    public function contact(){
        return view('pages.contact');
    }
    public function services(){
        return view('pages.services');
    }
    public function aboutus(){
        return view('pages.aboutus');
    }
    public function gallery(){
        $albums = Album::with('Photos')->get();
        return view('pages.gallery')->with('albums', $albums);
    }
    public function images($id){
        $album = Album::with('Photos')->find($id);
        return view('pages.images')->with('album',$album);
    }
    public function singlenews($id){
        $news = News::find($id);
        $allnews = News::all();
        return view('pages.single_news')
        ->with('news',$news)
        ->with('allnews', $allnews);
    }
}
